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
        Schema::create('pesandari_pendonors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien');
            $table->foreignId('id_pendonor');
            $table->string('status');
            $table->integer('stok_pesanan');
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
        Schema::dropIfExists('pesandari_pendonors');
    }
};
