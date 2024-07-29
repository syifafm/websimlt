<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'nama_ruang',
        'kode_jenis_barang',
        'nama',
        'tipe',
        'tahun_peroleh',
        'jumlah',
        'satuan',
    ];
}
