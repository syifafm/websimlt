<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginnController extends Controller
{
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboardaslab');
        }
        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'foto' => $request->foto,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'instansi_prodi' => $request->instansi_prodi,
            'nip_nim' => $request->nip_nim,
            'password' => $request->password,
            'status' => $request->status,

        ]);
        return redirect('login');
    }

    public function store2(Request $request)
    {
        $user = User::create([
            'foto' => $request->foto,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'instansi_prodi' => $request->instansi_prodi,
            'nip_nim' => $request->nip_nim,
            'password' => $request->password,
            'status' => $request->status,

        ]);
        return redirect('pendaftar');
    }

    

    public function create()
    {
        return view('content.registrasi');
    }
    public function create2()
    {
        return view('content.registrasiaslab');
    }
    public function index2(){
        $user= User::all();
        return view('content.pendaftar', compact('user'));
    }
}
