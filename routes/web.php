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
Route::get('/dashboard', [BerandaController::class, 'index1']);
Route::get('/pendaftar', [BerandaController::class, 'index2']);
Route::get('/users', [BerandaController::class, 'index3']);
Route::get('/pinjamru', [BerandaController::class, 'index4']);
Route::get('/pinjamal', [BerandaController::class, 'index5']);
Route::get('/laporanru', [BerandaController::class, 'index6']);
Route::get('/laporanal', [BerandaController::class, 'index7']);
Route::get('/dashboardaslab', [BerandaController::class, 'index8']);
Route::get('/pinruaslab', [BerandaController::class, 'index9']);
Route::get('/datapinjamaslab', [BerandaController::class, 'index10']);