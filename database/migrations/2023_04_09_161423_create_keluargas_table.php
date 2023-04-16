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
        Schema::create('datakeluarga', function (Blueprint $table) {
            $table->integer('nik',20);
            $table->string('nip');
            $table->string('namadatakeluarga');
            $table->string('tempatlahir',30);
            $table->enum('jeniskelamin', ['Pria', 'Wanita']);
            $table->enum('agamakeluarga',['Islam','Katholik','Kristen','Hindu', 'Buddha', 'Konghucu']);
        
            $table->primary('nik');
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
        Schema::dropIfExists('datakeluarga');
    }
};
