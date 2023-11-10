<?php
 
 // app/Repositories/UserRepositoryInterface.php

namespace App\Repositories;

interface baseproductInterface extends baserepositoryInterface
{
    
     public function hoan();
     public function phimmoicapnhat();
     public function phimbomoi();
     public function phimnetflix();
     public function phimchieurap();
     public function phimkinhdi();
     public function phimvientuong();
     public function phimhoathinh();
     public function phimtinhcamlangman();

     public function theloaiphimhanhdong();
     public function theloaiphimtinhcamlangman();
     public function theloaiphimchientranh();
     public function theloaiphimphieuluu();
     public function theloaiphimhaihuoc();
     public function theloaiphimvientuong();
     public function theloaiphimcotrang();
     public function theloaiphimhoathinh();

     public function theloaiphimkinhdi();
     public function theloaiphimhinhsu();
     public function theloaiphimhoihopgaycan();
     public function theloaiphimtamly();
     public function theloaiphimle();
     public function theloaiphimchieurap();

     public function theloaiphimnetflix();
     public function theloaiphimbomy();
     public function theloaiphimbohanquoc();
     public function theloaiphimbotrungquoc();
     public function theloaiphimvietnam();
     public function imgdetail($slug);
     public function searchfilm($slug);


}


?>