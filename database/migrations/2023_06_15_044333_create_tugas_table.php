<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id('tugasID');
            $table->string('namatugas');
            $table->string('keterangan');
            $table->string('deadline');
            $table->foreignId('kelasID')->references('kelasID')->on('kelas');
            $table->foreignId('userID')->references('id')->on('users');
            $table->foreignId('pengajarID')->references('pengajarID')->on('pengajars');
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
        Schema::dropIfExists('tugas');
    }
};