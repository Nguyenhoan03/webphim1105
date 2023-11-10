<?php
namespace App\Repositories;

use App\Models\detailfilm;

class basedetailfilm extends baserepository implements basedetailfilmInterface
{
    protected function getModel()
    {
        return new detailfilm();
    }

    public function detailfilm($slug){
        return $this->model->with('product')->where('title',$slug)->first();
    }
    public function layalldulieu(){
        return $this->model->orderBy('id','DESC')->get();
    }
   

}