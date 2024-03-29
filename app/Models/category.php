<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
 
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable  = [
      'namecategory',
    ];

    public function product()
{
    return $this->hasMany(product::class, 'category_id', 'id'); // Chỉ định các trường để liên kết
}
}
