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
        Schema::create('nilaimks', function (Blueprint $table) {
            $table->integer('idmhs',10);
            $table->string('nama_mk');
            $table->char('kode_mk',10);
            $table->float('nilai');
        
            $table->primary('idmhs');
            $table->foreign('idmhs')->references('idmhs')->on('mahasiswas')->onDelete('cascade');
            # $table->foreign('id_jabatan')->references('id')->on('jabatan')->onDelete('cascade');
            $table->timestamps();

            $table->unsignedBigInteger('kode_mk');
            $table->foreign('idmhs')->references('id')->on('mahasiswas')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilaimks');
    }
};
