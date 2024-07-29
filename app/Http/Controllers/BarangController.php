<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){

        // get barang
        $barang = Barang::all();

        // render view with barangs
        return view('content.barang', compact('barang'));
    }
    public function create(){
        return view('content.formbarang');
    }
    public function store(Request $request){
        $barang = Barang::create([
            'nama_ruang' => $request->nama_ruang,
            'kode_jenis_barang' => $request->kode_jenis_barang,
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'tahun_peroleh' => $request->tahun_peroleh,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ]);

        return redirect('/barang');
    }
    public function edit($id){
        $barang = Barang::where('id', $id)->first();
        return view('content.formbarang_edit', compact('barang'));
    }
    public function update(Request $request){
        $barang = Barang::find($request->id)->update([
            'nama_ruang' => $request->nama_ruang,
            'kode_jenis_barang' => $request->kode_jenis_barang,
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'tahun_peroleh' => $request->tahun_peroleh,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
        ]);
        return redirect('/barang');
    }
    public function destroy($id){
        // delete data barang
        $barang = Barang::find($id)->delete();

        return redirect('/barang')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}