<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xemphim extends Model
{
  public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'xemphims';
    protected $primaryKey = 'id';
    protected $guarded = [
      'episode',
      'linkfilm',
      'titlefilm',
    'detailfilm_id',
      
    ];
    public function detailfilm(){
      return $this->belongsTo(detailfilm::class);
    }
  
}
