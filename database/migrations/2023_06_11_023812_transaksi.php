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
        Schema::create('tb_trx', function (Blueprint $table) {
            $table->string('idTrx',50)->primary();
            $table->string('idAdmin',50);
            $table->string('idEnginer',50);
            $table->string('idMember',50);
            $table->string('idTrxJenis',50);
            $table->string('namaPemberli',200);
            $table->timestamp('tanggalTrx');
            $table->bigInteger('totalHarga');
            $table->bigInteger('downPayment');
            $table->string('status',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_trx');
    }
};
