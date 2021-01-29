<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawaban', function (Blueprint $table) {
          // tambah kolom pertayaan_id
          $table->unsignedBigInteger('pertanyaan_id');
          // tambah foreign key ke kolom pertanyaan_id
          $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
          // tambah kolom profil_id
          $table->unsignedBigInteger('profil_id');
          // tambah foreign key ke kolom profil_id
          $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jawaban', function (Blueprint $table) {
          // hapus FK pertanyaan_id
          $table->dropForeign(['pertanyaan_id']);
          // hapus kolom pertayaan_id
          $table->dropColumn(['pertanyaan_id']);
          // hapus FK profil_id
          $table->dropForeign(['profil_id']);
          // hapus kolom profil_id
          $table->dropColumn(['profil_id']);
        });
    }
}
