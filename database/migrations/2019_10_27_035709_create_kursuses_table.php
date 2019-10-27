<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursuses', function (Blueprint $table) {
            $table->bigIncrements('id_kursus');
            $table->integer('kelas_id')->unsigned();
            $table->integer('matpel_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');
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
        Schema::dropIfExists('kursuses');
    }
}
