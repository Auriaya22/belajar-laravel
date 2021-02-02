<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_tag', function (Blueprint $table) {          
          // tambah kolom pertanyaan_id
          $table->unsignedBigInteger('pertanyaan_id');
          // tambah foreign key ke kolom pertanyaan_id
          $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
          // tambah kolom tag_id
          $table->unsignedBigInteger('tag_id');
          // tambah foreign key ke kolom profil_id
          $table->foreign('tag_id')->references('id')->on('tag');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan_tag');
    }
}
