<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PertanyaanTag extends Model
{
  protected $table = 'pertanyaan_tag';
  public function pertanyaan(){
   return $this->belongsToMany('App\Pertanyaan');
  }

  public function tag(){
   return $this->belongsToMany('App\Tag');
  }
}
