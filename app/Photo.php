<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

class Photo extends Model
{
 protected $fillable = array ('album_id','photo','title','size','description');
 public function Album(){
 return $this->belongsTo('App\Album');
}
}
