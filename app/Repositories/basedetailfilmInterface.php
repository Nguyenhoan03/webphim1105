<?php
 
 // app/Repositories/UserRepositoryInterface.php

namespace App\Repositories;

interface basedetailfilmInterface extends baserepositoryInterface{
    public function detailfilm($slug);
    public function layalldulieu();
}


?>