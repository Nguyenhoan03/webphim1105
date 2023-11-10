<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class loginadmins extends Model
{
  use HasApiTokens;
    public $timestamps = TRUE;
    use HasFactory;
    
    protected $table = 'loginadmin';
    protected $primaryKey = 'id';
    protected $fillable  = [
      'username',
      'password',
    ];

}
