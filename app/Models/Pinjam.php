<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjamruangalat';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'instansi_prodi',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'durasi',
        'jenis_pinjaman',
        'ruang_alat',
        'uplod_ktp_ktm',
        'deskripsi_kegiatan',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
