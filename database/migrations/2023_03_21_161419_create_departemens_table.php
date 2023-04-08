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
        Schema::create('karyawan', function (Blueprint $table) {
            //$table->id();
            $table->integer('id_departemen');
            $table->string('nama_departemen', 50);
            $table->string('kepala_departemen', 30);
            $table->string('deskripsi_departemen');
            $table->string('lokasi_departemen', 30);

            $table->primary('id_departemen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
