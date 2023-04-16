<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use App\Http\Requests\StoreDataKeluargaRequest;
use App\Http\Requests\UpdateDataKeluargaRequest;

class DataKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datakeluarga.data')->with([
            'datakeluarga' => DataKeluarga::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataKeluargaRequest $request)
    {
        $validate = $request->validated();

        $klrg = new DataKeluarga;
        $klrg->nik = $request->txtnik;
        $klrg->nip = $request->txtnip;
        $klrg->namadatakeluarga = $request->txtnamadatakeluarga;
        $klrg->tempatlahir = $request->txttempatlahir;
        $klrg->jeniskelamin = $request->txtjeniskelamin;
        $klrg->agamakeluarga = $request->txtagamakeluarga;
        $klrg->save();

        return redirect('datakeluarga')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataKeluarga $klrg, $nik)
    {
        $data = $klrg->find($nik);
        return view('datakeluarga.formedit')->with([
            'txtnik' => $nik,
            'txtnip' => $nip,
            'txtnamadatakeluarga' => $data->namadatakeluarga,
            'txttempatlahir' => $data->tempatlahir,
            'txtjeniskelamin' => $data->jeniskelamin,
            'txtagamakeluarga' => $data->agamakeluarga
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataKeluargaRequest $request, DataKeluarga $klrg, $nik)
    {
        $data = $klrg->find($nik);
        $data->nik = $request->txtnik;
        $data->nip = $request->txtnip;
        $data->namadatakeluarga = $request->txtnamadatakeluarga;
        $data->tempatlahir = $request->txttempatlahir;
        $data->jeniskelamin = $request->txtjeniskelamin;
        $data->agamakeluarga = $request->txtagamakeluarga;
        $data->save();

        return redirect('datakeluarga')->with('msg', 'Data ' . $data->namadatakeluarga . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataKeluarga $klrg, $nik)
    {
        $data = $klrg->find($nik);
        $data->delete();
        return redirect('datakeluarga')->with('msg', 'Data ' . $data->namadatakeluarga . ' Berhasil Dihapus');
    }
}
