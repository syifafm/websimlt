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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_lengkap',100);
            $table->string('instansi_prodi',100);
            $table->string('tanggal_pinjam',30);
            $table->string('tanggal_pengembalian',30);
            $table->string('jenis_pinjaman',100);
            $table->string('ruang_alat',100);
            $table->string('uplod_bukti_pengembalian',100);
            $table->string('status',100);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');
    }
};
