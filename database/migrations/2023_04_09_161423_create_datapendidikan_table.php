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
        Schema::create('datapendidikan', function (Blueprint $table) {
            $table->integer('nip',20);
            $table->string('sekolah');
            $table->string('gelar');
            $table->string('bidang',30);
            $table->date('tglmulai');
            $table->date('tglselesai');
            $table->float('nilai');
        
            $table->primary('nip');
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
        Schema::dropIfExists('datapendidikan');
    }
};
