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
        Schema::create('cuti', function (Blueprint $table) {
            //$table->id();
            $table->integer('id_cuti');
            $table->string('nip');
            $table->string('nama');
            $table->string('jenis_cuti');
            $table->date('mulai_cuti');
            $table->date('selesai_cuti');

            $table->primary('id_cuti');
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
        Schema::dropIfExists('cuti');
    }
};
