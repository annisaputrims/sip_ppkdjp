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
        Schema::create('peserta_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jurusan');
            $table->integer('id_gelombang');
            $table->string('nama_lengkap', 100);
            $table->string('nik', 20);
            $table->string('kartu_keluarga', 20);
            $table->tinyInteger('jenis_kelamin');
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('nama_sekolah');
            $table->string('kejuruan');
            $table->string('no_hp');
            $table->string('email');
            $table->string('aktivitas_saat_ini');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_pelatihan');
    }
};
