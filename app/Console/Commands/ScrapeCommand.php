<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;

use App\Models\crawler;
use Illuminate\Support\Facades\Log;

class ScrapeCommand extends Command
{
    protected $signature = 'scrape:dantri';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    public function handle()
    {
        $mainUrl = 'https://phimgi1.net/phim-hanh-dong/';
        $client = new Client();
        $crawler = $client->request('GET', $mainUrl);

        $crawler->filter('a.halim-thumb')->each(function ($node) use ($client) {
            $detailUrl = $node->attr('href');
            $this->scrapeDetailPage($client, $detailUrl);
        });

        $this->info('Data scraping completed.');
        return self::SUCCESS; 
    }

    public function scrapeDetailPage($client, $detailUrl)
    {
        $crawler = $client->request('GET', $detailUrl);

        $titlefilm = $crawler->filter('h1.entry-title')->text() ?: null;

        $episodes = $crawler->filter('ul.halim-list-eps li.halim-episode a')->each(function ($node) {
            $title = $node->filter('span')->text();
            $link = $node->attr('href');

            return [
                'title' => $title,
                'link' => $link,
            ];
        });

        foreach ($episodes as $episode) {
            $episodeTitle = intval($episode['title']); 
            $episodeLink = $episode['link'];

            $iframeSrc = $this->getIframeSrc($client, $episodeLink);

            if ($iframeSrc) {
                crawler::create([
                    'titlefilm' => $titlefilm,
                    'linkfilm' => $iframeSrc,
                    'episode' => $episodeTitle,
                ]);
                Log::info("Data saved for episode: $episodeTitle");
            }
        }
    }

    private function getIframeSrc($client, $episodeLink)
    {
        $episodePage = $client->request('GET', $episodeLink);
        $iframeElement = $episodePage->filter('iframe.embed-responsive-item');

        if ($iframeElement->count() > 0) {
            $iframeSrc = $iframeElement->attr('src');

            preg_match('/link=([^&]+)/', $iframeSrc, $matches);
            return $matches[1] ?? null;
        } else {
            return null;
        }
    }
}
