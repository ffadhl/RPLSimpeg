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
        Schema::create('form_pengajuan_cuti', function (Blueprint $table) {
            $table->id('ID_form')->autoIncrement();
            $table->string('nama');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('departemen');
            $table->string('email');
            $table->string('no_hp');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('jenis_cuti', ['Cuti tahunan', 'Cuti Besar', 'Cuti Sakit', 'Cuti Bersalin', 'Cuti Karena Alasan Penting']);
            $table->longText('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pengajuan_cuti');
    }
};
