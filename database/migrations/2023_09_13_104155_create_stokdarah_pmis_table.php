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
        Schema::create('stokdarah_pmis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pmi');
            $table->integer('stok_darah_a');
            $table->integer('stok_darah_b');
            $table->integer('stok_darah_ab');
            $table->integer('stok_darah_o');
            $table->integer('stok_darah_am');
            $table->integer('stok_darah_bm');
            $table->integer('stok_darah_abm');
            $table->integer('stok_darah_om');
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
        Schema::dropIfExists('stokdarah_pmis');
    }
};
