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
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigInteger('id_presensi');
            $table->string('nama');
            $table->string('nip');
            $table->integer('status_presensi');
            $table->string('foto');
        
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
        Schema::dropIfExists('presensi');
    }
};
