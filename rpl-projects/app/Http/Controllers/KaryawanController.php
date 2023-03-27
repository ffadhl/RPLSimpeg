<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('karyawan.data')->with([
            'karyawan' => Karyawan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKaryawanRequest $request)
    {
        $validate = $request->validated();

        $krywan = new Karyawan;
        $krywan->nip = $request->txtnip;
        $krywan->nama = $request->txtnama;
        $krywan->tempat_lahir = $request->txttempatlahir;
        $krywan->tanggal_lahir = $request->tl;
        $krywan->jenis_kelamin = $request->txtjenis_kelamin;
        $krywan->no_telepon = $request->txttelp;
        $krywan->agama = $request->txtagama;
        $krywan->pendidikan = $request->txtpend;
        $krywan->lisensi = $request->txtlisensi;
        $krywan->save();

        return redirect('karyawan')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $krywan, $nip)
    {
        $data = $krywan->find($nip);
        return view('karyawan.formedit')->with([
            'txtnip' => $nip,
            'txtnama' => $data->nama,
            'txttempatlahir' => $data->tempat_lahir,
            'tl' => $data->tanggal_lahir,
            'txtjenis_kelamin' => $data->jenis_kelamin,
            'txttelp' => $data->no_telepon,
            'txtagama' => $data->agama,
            'txtpend' => $data->pendidikan,
            'txtlisensi' => $data->lisensi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKaryawanRequest $request, Karyawan $krywan, $nip)
    {
        $data = $krywan->find($nip);
        $data->nama = $request->txtnama;
        $data->tempat_lahir = $request->txttempatlahir;
        $data->tanggal_lahir = $request->tl;
        $data->jenis_kelamin = $request->txtjenis_kelamin;
        $data->no_telepon = $request->txttelp;
        $data->agama = $request->txtagama;
        $data->pendidikan = $request->txtpend;
        $data->lisensi = $request->txtlisensi;
        $data->save();

        return redirect('karyawan')->with('msg', 'Data ' . $data->nama . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $krywan, $nip)
    {
        $data = $krywan->find($nip);
        $data->delete();
        return redirect('karyawan')->with('msg', 'Data ' . $data->nama . ' Berhasil Dihapus');
    }
}