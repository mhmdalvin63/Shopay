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
        Schema::create('Pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_petugas')->references('id')->on('petugas')->onDelete('cascade');
            $table->foreignId('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
            $table->date('tgl_bayar');
            $table->enum('bulan_bayar', ['Januari', 'Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']);
            $table->integer('tahun_bayar')->length(10)->unsigned();
            $table->integer('jumlah_bayar')->length(10)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
