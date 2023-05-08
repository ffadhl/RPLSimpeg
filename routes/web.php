<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DataPendidikanController;
use App\Http\Controllers\DataLisensiController;
use App\Models\DataKeluarga;
use App\Models\DataLisensi;
use App\Models\DataPendidikan;
use App\Models\Penggajian;

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

// Admin
Route::get('/', function () {
    return view('sesi.index');
})->middleware('isLogin');

Route::get('/home', function () {
    return view('layout.home');
})->middleware('isLogin');

Route::get('/karyawan/add', function () {
    return view('karyawan.formadd')->with([
        'datakeluarga' => DataKeluarga::all(),
        'datalisensi' => DataLisensi::all(),
        'datapendidikan' => DataPendidikan::all()
    ]);
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

Route::get('/datapendidikan/add', function () {
    return view('datapendidikan.formadd');
});

Route::get('/datalisensi/add', function () {
    return view('datalisensi.formadd');
});

Route::get('/jabatan/add', function () {
    return view('jabatan.formadd');
});

Route::get('/presensi/add', function () {
    return view('presensi.formadd');
});


Route::resource('karyawan', KaryawanController::class)->middleware('isLogin');
Route::resource('departemen', DepartemenController::class)->middleware('isLogin');
Route::resource('penggajian', PenggajianController::class)->middleware('isLogin');
Route::resource('cuti', CutiController::class)->middleware('isLogin');
Route::resource('penjadwalan', PenjadwalanController::class)->middleware('isLogin');
Route::resource('datakeluarga', DataKeluargaController::class)->middleware('isLogin');
Route::resource('jabatan', jabatanController::class)->middleware('isLogin');
Route::resource('presensi', PresensiController::class)->middleware('isLogin');
Route::resource('datapendidikan', DataPendidikanController::class)->middleware('isLogin');
Route::resource('datalisensi', DataLisensiController::class)->middleware('isLogin');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

//UsersKaryawan
Route::get('/karyawanrosati', function () {
    return view('layoutkaryawan.index');
})->middleware('isLogin');

Route::get('/karyawanrosati', function () {
    return view('layoutkaryawan.dashboard');
})->middleware('isLogin');

Route::get('/karyawanrosati/datadirikaryawan', function () {
    return view('layoutkaryawan.karyawandatadiri');
})->middleware('isLogin');

Route::get('/karyawanrosati/jadwalkaryawan', function () {
    return view('layoutkaryawan.karyawanjadwal');
})->middleware('isLogin');

Route::get('/karyawanrosati/gajikaryawan', function () {
    return view('layoutkaryawan.karyawanpenggajian')->with([
            'penggajian' => Penggajian::all()]);
}) ->middleware('isLogin');

Route::get('/karyawanrosati/presensikaryawan', function () {
    return view('layoutkaryawan.karyawanpresensi');
})->middleware('isLogin');

Route::get('/karyawanrosati/pengajuanedit', function () {
    return view('layoutkaryawan.karyawanpengajuanedit');
})->middleware('isLogin');

Route::get('/karyawanrosati/pengajuancuti', function () {
    return view('layoutkaryawan.karyawanpengajuancuti');
})->middleware('isLogin');