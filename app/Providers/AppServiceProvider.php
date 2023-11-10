<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\baseproduct;
use App\Repositories\baseproductInterface;

use App\Repositories\basedetailfilm;
use App\Repositories\basedetailfilmInterface;

use App\Repositories\basecategory;
use App\Repositories\basecategoryInterface;

use App\Repositories\basexemphim;
use App\Repositories\basexemphimInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(baseproductInterface::class, baseproduct::class);
        $this->app->bind(basedetailfilmInterface::class, basedetailfilm::class);
        $this->app->bind(basecategoryInterface::class, basecategory::class);
        $this->app->bind(basexemphimInterface::class, basexemphim::class);
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
