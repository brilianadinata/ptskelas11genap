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
        Schema::create('siswa1', function (Blueprint $table) {
            $table->integer('Nis');
            $table->string('Nama_Lengkap');
            $table->string('Jenis_Kelamin');
            $table->integer('Kelas');
            $table->date('Tanggal_Lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa1');
    }
};
