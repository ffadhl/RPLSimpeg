<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DataPendidikanController;
use App\Http\Controllers\DataLisensiController;
use App\Models\Karyawan;
use App\Models\DataKeluarga;
use App\Models\DataLisensi;
use App\Models\DataPendidikan;
use App\Models\Penggajian;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FadhlmahasiswaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasiswaControllerC;
use App\Models\Jabatan;

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
// Route::get('/', function () {
//     return view('sesi.index');
// })->middleware('isLogin');



// Route::get('/sesi', [SessionController::class, 'index']);
// Route::post('/sesi/login', [SessionController::class, 'login']);
// Route::get('/sesi/logout', [SessionController::class, 'logout']);

// Route::get('/sesi/register', [SessionController::class, 'register']);
// Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/',[LayoutController::class,'index'])->middleware('auth');
Route::get('/home',[LayoutController::class,'index'])->middleware('auth');
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/cheva', MahasiswaControllerC::class);

Route::controller(LoginController::class)->group(function(){

    Route::get('sesi', 'index')->name('login');
    Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::post('sesi/proses', 'proses');
    Route::get('logout','logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        
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
            $karyawans = Karyawan::all();
            return view('penggajian.formadd', compact('karyawans'));
        });
        
        Route::get('/cuti/add', function () {
            $karyawans = Karyawan::all();
            return view('cuti.formadd', compact('karyawans'));
        });
        
        Route::get('/penjadwalan/add', function () {
            $karyawans = Karyawan::all();
            $jabatans = Jabatan::all();
            return view('penjadwalan.formadd', compact('karyawans', 'jabatans'));
        });
        
        Route::get('/datakeluarga/add', function () {
            $karyawans = Karyawan::all();
            return view('datakeluarga.formadd', compact('karyawans'));
        });
        
        Route::get('/datapendidikan/add', function () {
            $karyawans = Karyawan::all();
            return view('datapendidikan.formadd', compact('karyawans'));
        });
        
        Route::get('/datalisensi/add', function () {
            $karyawans = Karyawan::all();
            return view('datalisensi.formadd', compact('karyawans'));
        });
        
        Route::get('/jabatan/add', function () {
            return view('jabatan.formadd');
        });
        
        Route::get('/presensi/add', function () {
            return view('presensi.formadd');
        });
        
        
        Route::resource('karyawan', KaryawanController::class);
        Route::resource('departemen', DepartemenController::class);
        Route::resource('penggajian', PenggajianController::class);
        Route::resource('cuti', CutiController::class);
        Route::resource('penjadwalan', PenjadwalanController::class);
        Route::resource('datakeluarga', DataKeluargaController::class);
        Route::resource('jabatan', jabatanController::class);
        Route::resource('presensi', PresensiController::class);
        Route::resource('datapendidikan', DataPendidikanController::class);
        Route::resource('datalisensi', DataLisensiController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function(){
        //UsersKaryawan
        Route::get('/karyawanrosati', function () {
            return view('layoutkaryawan.index');
        });

        Route::get('/karyawanrosati', function () {
            return view('layoutkaryawan.dashboard');
        });

        Route::get('/karyawanrosati/datadirikaryawan', function () {
            return view('layoutkaryawan.karyawandatadiri');
        });

        Route::get('/karyawanrosati/jadwalkaryawan', function () {
            return view('layoutkaryawan.karyawanjadwal');
        });

        Route::get('/karyawanrosati/gajikaryawan', function () {
            return view('layoutkaryawan.karyawanpenggajian')->with([
                    'penggajian' => Penggajian::all()]);
        }) ;

        Route::get('/karyawanrosati/presensikaryawan', function () {
            return view('layoutkaryawan.karyawanpresensi');
        });

        Route::get('/karyawanrosati/pengajuanedit', function () {
            return view('layoutkaryawan.karyawanpengajuanedit');
        });

        Route::get('/karyawanrosati/pengajuancuti', function () {
            return view('layoutkaryawan.karyawanpengajuancuti');
        });

    });

    Route::group(['middleware' => ['cekUserLogin:3']], function(){
        
    });

    Route::group(['middleware' => ['cekUserLogin:4']], function(){
        
    });

});

//uas Fadhl
Route::get('/fadhlmahasiswa', function () {
    return view('fadhl.index');
});

Route::get('/fadhlmahasiswa',[FadhlmahasiswaController::class,'index']);
Route::get('/fadhlmahasiswa/create',[FadhlmahasiswaController::class,'create']);
Route::post('/fadhlmahasiswa/store',[FadhlmahasiswaController::class,'store']);

Route::get('/fadhlmahasiswa/{IDmahasiswa}/edit',[FadhlmahasiswaController::class,'edit']);
Route::put('/fadhlmahasiswa/{IDmahasiswa}',[FadhlmahasiswaController::class,'update']);

Route::delete('/fadhlmahasiswa/{IDmahasiswa}',[FadhlmahasiswaController::class,'destroy']);