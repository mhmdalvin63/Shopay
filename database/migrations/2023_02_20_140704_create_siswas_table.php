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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10);
            $table->string('nis', 8);
            $table->string('nama', 35);
            $table->foreignId('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->text('alamat');
            $table->string('no_telp', 14);
            $table->foreignId('id_spp')->references('id')->on('spps')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
