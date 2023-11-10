<?php
 
 namespace App\Repositories;

 use App\Models\xemphim;
 
 class basexemphim extends baserepository implements basexemphimInterface
 {
     protected function getModel()
     {
         return new xemphim();
     }
     public function getallxemphim(){
        return $this->model->orderBy('id','DESC')->get();
     }
    public function gettapfilm($slug){
        return $this->model->where('titlefilm',$slug)->orderBy('id','ASC')->get();
    }

    public function getxemphim($slug,$episode){
           return $this->model->where('titlefilm',$slug)->where('episode',$episode)->first();
 }

}

?>