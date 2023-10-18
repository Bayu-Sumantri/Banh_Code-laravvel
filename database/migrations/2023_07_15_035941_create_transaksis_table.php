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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('transaksiID');
            $table->string('name');
            $table->string('email');
            $table->enum('metode_pembayaran', ['dana', 'bank']);
            $table->string('no_dana')->nullable();
            $table->string('rek_bank')->nullable();
            $table->string('no_telepon');
            $table->foreignId('kelasID')->references('kelasID')->on('kelas');
            // $table->foreignId('pembelianID')->references('pembelianID')->on('pembelis');
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
        Schema::dropIfExists('transaksis');
    }
};