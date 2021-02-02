<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table    = "jawaban";
    protected $fillable = ["isi", "user_id", "pertanyaan_id"];
    protected $guarded  = [];

    public function pertanyaan(){
      return $this->belongsTo('App\Pertanyaan');
    }
}
