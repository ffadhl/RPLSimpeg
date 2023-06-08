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
        Schema::create('form_pengajuan_editdata', function (Blueprint $table) {
            $table->id('ID_form')->autoIncrement();
            $table->string('nama');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('departemen');
            $table->string('email');
            $table->string('no_hp');
            $table->string('bagian_data');
            $table->longText('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pengajuan_editdata');
    }
};
