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
        Schema::create('tb_trx_detail', function (Blueprint $table) {
            $table->id();
            $table->string('idTrx',50);
            $table->string('idProduk',50);
            $table->integer('qty');
            $table->integer('hargaSatuan');
            $table->bigInteger('hargaTotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_trx_detail');
    }
};
