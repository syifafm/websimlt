<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;
use App\Models\User;
use App\Models\Pengembalian;

class PinjamController extends Controller
{
    public function index(){
        $pinjam = Pinjam::all();
        $user = User::all();

        return view('content.pinjamru', compact('pinjam','user'));
    }
    public function index2(){
        $pengembalian = Pengembalian::all();
        $user = User::all();

        return view('content.pengembalian', compact('pengembalian','user'));
    }
    public function datapinjam(){
        $pinjam = Pinjam::all();
    
        return view('content.pinjamruall', compact('pinjam'));
    }
    public function create($id){
        $user = User::all();
        return view('content.formpeminjaman', compact('user'));
    }
    public function create2($id){
        $user = User::all();
        return view('content.formpengembalian', compact('user'));
    }
    public function store(Request $request){
        $pinjam = Pinjam::create([
            'user_id'=> $request -> user_id,
            'nama_lengkap' => $request -> nama_lengkap,
            'instansi_prodi' => $request -> instansi_prodi,
            'tanggal' => $request -> tanggal,
            'jam_mulai' => $request -> jam_mulai,
            'jam_selesai' => $request -> jam_selesai,
            'durasi' => $request -> durasi,
            'jenis_pinjaman' => $request -> jenis_pinjaman,
            'ruang_alat' => $request -> ruang_alat,
            'uplod_ktp_ktm' => $request -> uplod_ktp_ktm,
            'deskripsi_kegiatan' => $request -> deskripsi_kegiatan,
            'status' => $request -> status,
        ]);

        return redirect('/pinjamru/{id}');
    }
    public function store2(Request $request){
        $pengembalian = Pengembalian::create([
            'user_id'=> $request -> user_id,
            'nama_lengkap' => $request -> nama_lengkap,
            'instansi_prodi' => $request -> instansi_prodi,
            'tanggal_pinjam' => $request -> tanggal_pinjam,
            'tanggal_pengembalian' => $request -> tanggal_pengembalian,
            'jenis_pinjaman' => $request -> jenis_pinjaman,
            'ruang_alat' => $request -> ruang_alat,
            'uplod_bukti_pengembalian' => $request -> uplod_bukti_pengembalian,
            'status' => $request -> status,
        ]);

        return redirect('/pengembalian/{id}');
    }
    public function delete($id){
        $pinjam = Pinjam::find($id)->delete();
        return redirect('/pinjamru');
    }

    public function edit($id){
        $pinjam = Pinjam::where('id', $id)->first();
        return view('content.formpeminjaman_edit', compact('pinjam'));
    }
    public function update(Request $request){
        $pinjam = Pinjam::find($request->id)->update([
            'nama_lengkap' => $request -> nama_lengkap,
            'instansi_prodi' => $request -> instansi_prodi,
            'tanggal' => $request -> tanggal,
            'jam_mulai' => $request -> jam_mulai,
            'jam_selesai' => $request -> jam_selesai,
            'jenis_pinjaman' => $request -> jenis_pinjaman,
            'ruang_alat' => $request -> ruang_alat,
            'uplod_ktp_ktm' => $request -> uplod_ktp_ktm,
            'deskripsi_kegiatan' => $request -> deskripsi_kegiatan,
            'status' => $request -> status,
        ]);
        return redirect('/pinjamru');
    }
}
