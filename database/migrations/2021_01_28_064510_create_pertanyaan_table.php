<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('judul');
          $table->longText('isi');
          $table->timestamps();
          // foreign key
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          // $table->unsignedBigInteger('jawaban_tepat_id')->nullable();
          // $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
        $table->dropForeign(['jawaban_tepat_id']);
        $table->dropColumn(['jawaban_tepat_id']);
        $table->dropForeign(['profil_id']);
        $table->dropColumn(['profil_id']);
    }
}
