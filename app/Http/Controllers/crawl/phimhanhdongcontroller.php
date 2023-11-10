<?php

namespace App\Http\Controllers\crawl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\detailfilm;
use App\Models\xemphim;

use Goutte;


class phimhanhdongcontroller extends Controller
{
    public function crawlphimhanhdong(){
        $dataphimhanhdong = [];
    
        $crawler = Goutte::request('GET', 'https://ophim9.cc/the-loai/hanh-dong?page=2');
    
        // Extract movie names and images
        $names = $crawler->filter('.items-center .ml-4 a h3')->each(function ($node) {
            return $node->text();
        });
    
        $images = $crawler->filter('.items-center .flex-shrink-0 img')->each(function ($node) {
            return $node->attr('src');
        });
    
        // Combine names and images into a single array of movies
        foreach ($names as $key => $name) {
            $dataphimhanhdong[] = [  // Use [] to append to the array
                'Name' => $name,
                'image' => $images[$key],
                'phimhanhdong'=>1,
                'phimvietnam'=>0,
                'phimbotrungquoc'=>0,
                'phimbohanquoc'=>0,
                'phimbomy'=>0,
                'phimnetflix'=>0,
                'phimchieurap'=>0,
                'phimle'=>0,
                'phimtamly'=>0,
                'phimhoihopgaycan'=>0,
                'phimhinhsu'=>0,
                'kinhdi'=>0,
                'hoathinh'=>0,
                'phimcotrang'=>0,
                'phimvientuong'=>0,
                'phimhaihuoc'=>0,
                'phimphieuluu'=>0,
                'phimchientranh'=>0,
                'phimtinhcamlangman'=>0,
            ];
        }
    
        // Insert data into the database
        product::create($dataphimhanhdong); // Use insert() for multiple records
     
    
        print("lấy dữ liệu product thành công \n");
    
        // Extract links for further scraping
        $linkPost = $crawler->filter('.items-center .ml-4 a')->each(function ($node) {
            return $node->attr("href");
        });
    
        foreach ($linkPost as $link) {
            self::scrapedata($link);
        }
    }
    
    

    public static function scrapedata($url)
    {
        $datadetail = [];
        try {
            $crawler = Goutte::request('GET', $url);
    
            // Lấy tiêu đề và slug
            $title = $crawler->filter('.text-center h1')->text();
            $nameenglish = $crawler->filter('.text-center h2')->text();
         
            $descripts = $crawler->filter('.px-4 .text-gray-500 article p')->text();
    
            $thongtinmota = $crawler->filter('tbody.align-baseline tr.border-t td.pl-2')->text();
    
            $totalmota = count($thongtinmota);
    
            $datadetail = [
                'title' => $title,
                'descripts' => implode("\n", $descripts),
                'nameenglish' => $nameenglish,
                'product_id' => '0',
            ];
    
            // Thêm các cột p1, p2, p3, ... vào mảng dữ liệu
            for ($i = 0; $i < $totalmota; $i++) {
                $dataPost["moicapnhat"] = !empty($thongtinmota[0]) ? $thongtinmota[0] : '';
                $dataPost["tinhtrang"] = !empty($thongtinmota[1]) ? $thongtinmota[1] : '';
                $dataPost["nam"] = !empty($thongtinmota[3]) ? $thongtinmota[3] : '';
                $dataPost["theloai"] = !empty($thongtinmota[8]) ? $thongtinmota[8] : '';
                $dataPost["quocgia"] = !empty($thongtinmota[9]) ? $thongtinmota[9] : '';
                $dataPost["daodien"] = !empty($thongtinmota[6]) ? $thongtinmota[6] : '';
                $dataPost["dienvien"] = !empty($thongtinmota[7]) ? $thongtinmota[7] : '';
                $dataPost["thoiluong"] = !empty($thongtinmota[2]) ? $thongtinmota[2] : '';
            }
    
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu cần
        }
    
        detailfilm::create($datadetail);
        print("lấy dữ liệu detail phim hành động thành công" ."\n");
    }
    
}


