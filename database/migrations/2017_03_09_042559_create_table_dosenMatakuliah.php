<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosenMatakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id', false, true);
            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->integer('matakuliah_id', false, true);
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
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
        Schema::drop('dosenMatakuliah');
    }
}
