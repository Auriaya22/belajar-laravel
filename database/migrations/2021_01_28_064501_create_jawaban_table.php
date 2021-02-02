<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('isi');
            $table->timestamps();
            // tambah kolom pertayaan_id
            $table->unsignedBigInteger('pertanyaan_id');
            // tambah foreign key ke kolom pertanyaan_id
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            // tambah kolom profil_id
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
        // hapus FK pertanyaan_id
        $table->dropForeign(['pertanyaan_id']);
        // hapus kolom pertayaan_id
        $table->dropColumn(['pertanyaan_id']);
        // hapus FK profil_id
        $table->dropForeign(['profil_id']);
        // hapus kolom profil_id
        $table->dropColumn(['profil_id']);
    }
}
