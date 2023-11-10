<?php
namespace App\Repositories;
use Illuminate\Http\Request;
use App\Models\product;

class baseproduct extends baserepository implements baseproductInterface
{
    protected function getModel()
    {
        return new product();
    }


    public function hoan(){
        return $this->model->orderBy('id','DESC')->get();
    }

    public function phimmoicapnhat(){
        return $this->model->orderBy('id','DESC')->take(30)->get();
    }

    public function phimbomoi(){
        $phimbomy = $this->model->where('phimbomy',1)->orderBy('id','DESC')->take(7)->get();
        $phimbohanquoc = $this->model->where('phimbohanquoc',1)->orderBy('id','DESC')->take(7)->get();
        $phimbotrungquoc = $this->model->where('phimbotrungquoc',1)->orderBy('id','DESC')->take(6)->get();

        $data = [
            'phimbomy'=>$phimbomy,
            'phimbohanquoc'=>$phimbohanquoc,
            'phimbotrungquoc'=>$phimbotrungquoc,
        ];
        return $data;

    }
    public function searchfilm($slug){
         return $this->model->where('Name', 'like', '%' . $slug . '%')->get();
    }

    public function phimnetflix(){
        return  $this->model->where('phimnetflix',1)->orderBy('id','DESC')->take(20)->get();
    }
   
    public function phimchieurap(){
        return  $this->model->where('phimchieurap',1)->orderBy('id','DESC')->take(20)->get();
    }

    public function phimkinhdi(){
        return  $this->model->where('kinhdi',1)->orderBy('id','DESC')->take(13)->get();
    }

    public function phimvientuong(){
        return  $this->model->where('phimvientuong',1)->orderBy('id','DESC')->take(13)->get();
    }

    public function phimtinhcamlangman(){
        return  $this->model->where('phimtinhcamlangman',1)->orderBy('id','DESC')->take(13)->get();
    }

    public function phimhoathinh(){
        return  $this->model->where('hoathinh',1)->orderBy('id','DESC')->take(13)->get();
    }
 

    public function theloaiphimhanhdong(){
        return $this->model->where('phimhanhdong',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimtinhcamlangman(){
        return $this->model->where('phimtinhcamlangman',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimchientranh(){
        return $this->model->where('phimchientranh',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimphieuluu(){
        return $this->model->where('phimphieuluu',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimhaihuoc(){
        return $this->model->where('phimhaihuoc',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimvientuong(){
        return $this->model->where('phimvientuong',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimcotrang(){
        return $this->model->where('phimcotrang',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimhoathinh(){
        return $this->model->where('hoathinh',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimkinhdi(){
        return $this->model->where('kinhdi',1)->orderBy('id','DESC')->get();
    }


    public function theloaiphimhinhsu(){
        return $this->model->where('phimhinhsu',1)->orderBy('id','DESC')->get();
    }


    public function theloaiphimhoihopgaycan(){
        return $this->model->where('phimhoihopgaycan',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimtamly(){
        return $this->model->where('phimtamly',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimle(){
        return $this->model->where('phimle',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimchieurap(){
        return $this->model->where('phimchieurap',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimnetflix(){
        return $this->model->where('phimnetflix',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimbomy(){
        return $this->model->where('phimbomy',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimbohanquoc(){
        return $this->model->where('phimbohanquoc',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimbotrungquoc(){
        return $this->model->where('phimbotrungquoc',1)->orderBy('id','DESC')->get();
    }

    public function theloaiphimvietnam(){
        return $this->model->where('phimvietnam',1)->orderBy('id','DESC')->get();
    }

    public function imgdetail($slug){
        return $this->model->where('Name',$slug)->first();
    }

    // baseproduct
   

    // Các phương thức riêng cho UserRepository nếu cần
}
?>