<?php
namespace App\Repositories;

interface basexemphimInterface extends baserepositoryInterface{
    public function getallxemphim();
    public function gettapfilm($slug);
    public function getxemphim($slug,$episode);
}

?>