<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('content.beranda');
    }
    public function index1()
    {

        return view('content.dashboard');
    }
    public function index2()
    {

        return view('content.pendaftar');
    }
    public function index4()
    {

        return view('content.pinjamru');
    }
    public function index5()
    {
        $user= User::all();
        return view('content.pinjaman', compact('user'));
    }
    public function index6()
    {

        return view('content.barang');
    }
    public function index8()
    {

        return view('content.dashboardaslab');
    }
    public function index9()
    {

        return view('content.pinruaslab');
    }
    public function index10()
    {

        return view('content.datapinjamaslab');
    }
    public function index11()
    {

        return view('content.formpeminjaman_edit');
    }

     /**
     * Controller untuk Landing Page.
     */
    public function index12()
    {

        return view('content.landingpage');
    }
    public function index13(){
        return view('content.profil');
    }
    public function index14(){
        return view('content.struktur');
    }
    public function index15(){
        return view('content.riset');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
