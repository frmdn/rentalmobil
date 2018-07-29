<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mobil');
            $table->string('kategori_mobil');
            $table->string('kapasitas_mobil');
            $table->string('merk_mobil');
            $table->string('plat_mobil');
            $table->string('tarif_mobil');
            $table->string('status_mobil');
            $table->string('gambar_mobil');
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
        Schema::dropIfExists('mobil');
    }
}
