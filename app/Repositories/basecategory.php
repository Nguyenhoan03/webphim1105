<?php
namespace App\Repositories;

use App\Models\category;

class basecategory extends baserepository implements basecategoryInterface
{
    protected function getModel()
    {
        return new category();
    }

   
}