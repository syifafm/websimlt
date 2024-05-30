<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
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
Route::get('/dashbord', [BerandaController::class, 'index1']);
Route::get('/pendaftar', [BerandaController::class, 'index2']);
Route::get('/users', [BerandaController::class, 'index3']);