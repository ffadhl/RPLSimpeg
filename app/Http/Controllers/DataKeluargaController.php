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
    public function show(DataKeluarga $klrg, $nip)
    {
        $data = $klrg->find($nip);
        return view('datakeluarga.formedit')->with([
            'txtnip' => $nip,
            'txtnamadatakeluarga' => $data->txtnamadatakeluarga,
            'txttempatlahir' => $data->txttempatlahir,
            'txtjeniskelamin' => $data->txtjeniskelamin,
            'txtagamakeluarga' => $data->txtagamakeluarga
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataKeluargaRequest $request, DataKeluarga $klrg, $nip)
    {
        $data = $klrg->find($nip);
        $klrg->nip = $request->txtnip;
        $klrg->namadatakeluarga = $request->txtnamadatakeluarga;
        $klrg->tempatlahir = $request->txttempatlahir;
        $klrg->jeniskelamin = $request->txtjeniskelamin;
        $klrg->agamakeluarga = $request->txtagamakeluarga;
        $data->save();

        return redirect('datakeluarga')->with('msg', 'Data ' . $data->namadatakeluarga . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataKeluarga $klrg, $nip)
    {
        $data = $klrg->find($nip);
        $data->delete();
        return redirect('datakeluarga')->with('msg', 'Data ' . $data->namadatakeluarga . ' Berhasil Dihapus');
    }
}
