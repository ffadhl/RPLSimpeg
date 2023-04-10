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
        Schema::create('penjadwalan', function (Blueprint $table) {
            $table->string('kode_jadwal');
            $table->string('nip');
            $table->string('nama');
            $table->integer('id_jabatan');
            $table->string('waktu_shift');
            $table->date('tanggal_shift');
        
            $table->primary('kode_jadwal');
            $table->foreign('nip')->references('nip')->on('karyawan')->onDelete('cascade');
            # $table->foreign('id_jabatan')->references('id')->on('jabatan')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjadwalan');
    }
};
