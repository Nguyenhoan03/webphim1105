<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailfilm extends Model
{
  public $timestamps = FALSE;
  use HasFactory;
    protected $table = 'detailfilms';
    protected $primaryKey = 'id';
    protected $guarded = [
      'product_id',
      'title',
      '	nameenglish	',
      'moicapnhat',
      'tinhtrang',
      'nam',
      '	theloai',
      'quocgia',
      'daodien',
      'dienvien',
      'thoiluong',
      'descripts',
     
    ];

    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
 public function xemphim(){
  return $this->hasOne(xemphim::class,'detailfilm_id','id');
 }
    
    
    
}
