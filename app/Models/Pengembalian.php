<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'instansi_prodi',
        'tanggal_pinjam',
        'tanggal_pengembalian',
        'jenis_pinjaman',
        'ruang_alat',
        'uplod_bukti_pengembalian',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
