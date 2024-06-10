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
        Schema::create('pinjamruangalat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap',100);
            $table->string('instansi_prodi',100);
            $table->string('tanggal',30);
            $table->string('jam_mulai',50);
            $table->string('jam_selesai',50);
            $table->string('jenis_pinjaman',100);
            $table->string('ruang_alat',100);
            $table->string('uplod_ktp_ktm',100);
            $table->string('deskripsi_kegiatan',300);
            $table->string('status',100);
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamruangalat');
    }
};
