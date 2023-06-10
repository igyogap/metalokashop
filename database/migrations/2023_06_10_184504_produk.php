<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->string('idProduk',50)->primary();
            $table->string('idJenis',50);
            $table->string('idKategori',50);
            $table->string('nama');
            $table->string('warna');
            $table->string('kondisi');
            $table->integer('minPembelian');
            $table->string('deskripsi');
            $table->integer('hargaBeli');
            $table->integer('hargaJual');
            $table->text('videoUrl');
            $table->integer('stok');
            $table->integer('berat');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('tinggi');
            $table->text('photo');
            $table->string('vendor');
            $table->timestamp('created_at');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produk');
    }
};
