<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table    = "pertanyaan";
    protected $fillable = ["judul", "isi", "user_id", "tag"];
    protected $guarded  = [];

    public function author(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag', 'pertanyaan_tag', 'pertanyaan_id', 'tag_id');
    }

    public function jawabans(){
      return $this->hasMany('App\Jawaban');
    }
}
