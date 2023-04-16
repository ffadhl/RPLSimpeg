<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\SessionController;

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
    return view('sesi.index');
})->middleware('isLogin');

Route::get('/home', function () {
    return view('layout.home');
})->middleware('isLogin');

Route::get('/karyawan/add', function () {
    return view('karyawan.formadd');
});

Route::get('/departemen/add', function () {
    return view('departemen.formadd');
});

Route::get('/penggajian/add', function () {
    return view('penggajian.formadd');
});

Route::get('/cuti/add', function () {
    return view('cuti.formadd');
});

Route::get('/penjadwalan/add', function () {
    return view('penjadwalan.formadd');
});

Route::get('/datakeluarga/add', function () {
    return view('datakeluarga.formadd');
});

Route::get('/karyawan/add', [DataKeluargaController::class]);

Route::resource('karyawan', KaryawanController::class)->middleware('isLogin');
Route::resource('departemen', DepartemenController::class)->middleware('isLogin');
Route::resource('penggajian', PenggajianController::class)->middleware('isLogin');
Route::resource('cuti', CutiController::class)->middleware('isLogin');
Route::resource('penjadwalan', PenjadwalanController::class)->middleware('isLogin');
Route::resource('datakeluarga', DataKeluargaController::class)->middleware('isLogin');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
