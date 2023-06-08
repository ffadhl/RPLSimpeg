<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImamMahasiswa;
use App\Http\Requests\StoreImamMahasiswaRequest;
use App\Http\Requests\UpdateImamMahasiswaRequest;

class ImamMahasiswaController extends Controller
{
    public function index()
    {
        return view('imammahasiswa.data')->with([
            'imammahasiswa' => ImamMahasiswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImamMahasiswaRequest $request)
    {
        $validate = $request->validated();

        $krywan = new ImamMahasiswa();
        $krywan->idmahasiswa = $request->txtidmahasiswa;
        $krywan->nama = $request->txtnama;
        $krywan->jenis_kelamin = $request->txtjeniskelamin;
        $krywan->prodi = $request->txtprodi;
        $krywan->agama = $request->txtagama;
        $krywan->nik = $request->txtnik;
        $krywan->telepon = $request->txttelepon;
        $krywan->alamat = $request->txtalamat;
        $krywan->save();

        return redirect('imammahasiswa')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ImamMahasiswa $krywan, $idmahasiswa)
    {
        $data = $krywan->find($idmahasiswa);
        return view('imammahasiswa.formedit')->with([
            'txtidmahasiswa' => $idmahasiswa,
            'txtnama' => $data->nama,
            'txtjeniskelamin' => $data->jenis_kelamin,
            'txtprodi' => $data->prodi,
            'txtagama' => $data->agama,
            'txtnik' => $data->nik,
            'txttelepon' => $data->telepon,
            'txtalamat' => $data->alamat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImamMahasiswaRequest $request, ImamMahasiswa $krywan, $idmahasiswa)
    {
        $data = $krywan->find($idmahasiswa);
        $data->nama = $request->txtnama;
        $data->jenis_kelamin = $request->txtjeniskelamin;
        $data->prodi = $request->txtprodi;
        $data->agama = $request->txtagama;
        $data->nik = $request->txtnik;
        $data->telepon = $request->txttelepon;
        $data->alamat = $request->txtalamat;
        $data->save();

        return redirect('imammahasiswa')->with('msg', 'Data ' . $data->nama . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImamMahasiswa $krywan, $idmahasiswa)
    {
        $data = $krywan->find($idmahasiswa);
        $data->delete();
        return redirect('imammahasiswa')->with('msg', 'Data ' . $data->nama . ' Berhasil Dihapus');
    }

}
