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
        Schema::create('imammahasiswa', function (Blueprint $table) {
            //$table->id();
            $table->integer('idmahasiswa', 10);
            $table->string('nama', 50);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('prodi');
            $table->string('agama',10);
            $table->bigInteger('nik');
            $table->char('telepon',15);
            $table->string('alamat',100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imammahasiswa');
    }
};
