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
        Schema::create('penggajian', function (Blueprint $table) {
            //$table->id();
            $table->integer('id_gaji');
            $table->unsignedstring('nip');
            $table->unsignedstring('nama');
            $table->integer('gaji_pokok');
            $table->integer('tunjangan');

            $table->primary('id_gaji');
            $table->foreign('nip')
              ->references('nip')->on('karyawan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggajian');
    }
};
