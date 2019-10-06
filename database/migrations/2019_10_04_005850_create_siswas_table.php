<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->integer('kota_id')->unsigned();
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->integer('kelas_id')->unsigned();
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->timestamps();

            $table->foreign('kota_id')->references('id_kota')->on('kotas')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
