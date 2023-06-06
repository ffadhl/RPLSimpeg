<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            // $table->id();
            $table->char('idmhs', 10);
            $table->string('nama', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('prodi', 30);
            $table->string('agama',10);
            $table->char('nik', 20);
            $table->char('no_telepon',15);
        
            $table->primary('idmhs');
            $table->timestamps();
            $table->timestamps();

            $table->unsignedBigInteger('idmhs');
            $table->foreign('idmhs')->references('id')->on('mahasiswas')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
