<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginnController;
use App\Http\Controllers\PinjamController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/dashboard', [BerandaController::class, 'index1']);
Route::get('/pendaftar', [BerandaController::class, 'index2']);
Route::get('/barang', [BerandaController::class, 'index6']);


Route::get('/datapinjamaslab', [BerandaController::class, 'index10']);
Route::get('/formpeminjaman', [BerandaController::class, 'index11']);
Route::get('/dashboardaslab', [BerandaController::class, 'index8']);

Route::get('/registrasi', function () {
    return view('content.registrasi');
});
Route::post('/registrasi-store', [LoginnController::class, 'store']);

Route::get('/login', function () {
    return view('content.login');
});

Route::get('/registrasi-create', [LoginnController::class, 'create']);
Route::post('/registrasi-store', [LoginnController::class, 'store']);

Route::post('/postlogin', 'App\Http\Controllers\LoginnController@postlogin')->name('postlogin');

Route::group(['middleware' => ['auth', 'CekStatus:kalab, aslab']], function () {

    
    // From Pengembalian
    Route::get('/pengembalian/{id}', [PinjamController::class, 'index2']);
    Route::get('/formpengembalian-create/{id}', [PinjamController::class, 'create2']);
    Route::post('/formpengembalian-store/{id}', [PinjamController::class, 'store2']);
    Route::get('/formpengembalian-delete/{id}', [PinjamController::class, 'delete2']);

    // Form Peminjaman
    Route::get('/pinjamru/{id}', [PinjamController::class, 'index']);
    Route::get('/formpeminjaman-create/{id}', [PinjamController::class, 'create']);
    Route::post('/formpeminjaman-store/{id}', [PinjamController::class, 'store']);
    Route::get('/formpeminjaman-delete/{id}', [PinjamController::class, 'delete']);
    Route::get('/formpeminjaman-edit/{id}', [PinjamController::class, 'edit']);
    Route::put('/formpeminjaman-update', [PinjamController::class, 'update']);
    Route::get('/pinjamruall', [PinjamController::class, 'datapinjam']);

    // Data Barang
    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/formbarang-create', [BarangController::class, 'create']);
    Route::post('/formbarang-store', [BarangController::class, 'store']);
    Route::get('/formbarang-destroy/{id}', [BarangController::class, 'destroy']);
    Route::get('/formbarang-edit/{id}', [BarangController::class, 'edit']);
    Route::put('/formbarang-update', [BarangController::class, 'update']);

    // Logout
    Route::get('/logout', 'App\Http\Controllers\LoginnController@logout')->name('logout');

    // Registrasi Aslab
    Route::get('/registrasiaslab-create2', [LoginnController::class, 'create2']);
    Route::post('/registrasiaslab-store2', [LoginnController::class, 'store2']);
    Route::get('/pendaftar', [LoginnController::class, 'index2']);
});

Route::post('/postlogin', 'App\Http\Controllers\LoginnController@postlogin')->name('postlogin');


// Route untuk Landing Page
// ----------------------------
Route::get('/', function () {
    return view('layout.header');
});

Route::get('/landingpage', [BerandaController::class, 'index12']);
Route::get('/profil', [BerandaController::class, 'index13']);
Route::get('/struktur', [BerandaController::class, 'index14']);
Route::get('/riset', [BerandaController::class, 'index15']);



