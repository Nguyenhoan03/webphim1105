<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [
     
      'Name',
      'image',
      
      'phimhanhdong',
      'phimtinhcamlangman',
      'phimchientranh',
      'phimphieuluu',
      'phimhaihuoc',
      'phimvientuong',
      'phimcotrang',
      'hoathinh',
      'kinhdi',
      'phimhinhsu',
      'phimhoihopgaycan',
      'phimtamly',
      'phimle',
      'phimchieurap',
      'phimnetflix',
      'phimbomy',
      'phimbohanquoc',
      'phimbotrungquoc',
      'phimvietnam',
    
      
     
      
    ];
    public function detailfilm()
{
  return $this->hasOne(product::class,'product_id','id');
}

public function category()
{
    return $this->belongsTo(category::class, 'id', 'category_id'); // Chỉ định các trường để liên kết
}

    
}
