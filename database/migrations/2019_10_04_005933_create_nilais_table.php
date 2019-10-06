<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('id_nilai');
            $table->integer('siswa_id')->unsigned();
            $table->integer('matpel_id')->unsigned();
            $table->integer('benar');
            $table->integer('salah');
            $table->integer('kosong');
            $table->integer('score');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id_siswa')->on('siswas')->onDelete('cascade');
            $table->foreign('matpel_id')->references('id_matpel')->on('matpels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
