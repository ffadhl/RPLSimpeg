<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Http\Requests\StoreKeluargaRequest;
use App\Http\Requests\UpdateKeluargaRequest;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keluarga.data')->with([
            'keluarga' => Keluarga::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKeluargaRequest $request)
    {
        $validate = $request->validated();

        $klrg = new Keluarga;
        $klrg->nip = $request->txtnip;
        $klrg->namadatakeluarga = $request->txtnamadatakeluarga;
        $klrg->tempatlahir = $request->txttempatlahir;
        $klrg->jeniskelamin = $request->txtjeniskelamin;
        $klrg->agamakeluarga = $request->txtagamakeluarga;
        $klrg->save();

        return redirect('keluarga')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keluarga $klrg, $nip)
    {
        $data = $klrg->find($nip);
        return view('keluarga.formedit')->with([
            'txtnip' => $nip,
            'txtnamadatakeluarga' => $data->txtnamadatakeluarga,
            'txttempatlahir' => $data->txttempatlahir,
            'txtjeniskelamin' => $data->txtjeniskelamin,
            'txtagamakeluarga' => $data->txtagamakeluarga,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeluargaRequest $request, Keluarga $klrg, $nip)
    {
        $data = $klrg->find($nip);
        $klrg->nip = $request->txtnip;
        $klrg->namadatakeluarga = $request->txtnamadatakeluarga;
        $klrg->tempatlahir = $request->txttempatlahir;
        $klrg->jeniskelamin = $request->txtjeniskelamin;
        $klrg->agamakeluarga = $request->txtagamakeluarga;
        $data->save();

        return redirect('keluarga')->with('msg', 'Data ' . $data->namadatakeluarga . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keluarga $klrg, $nip)
    {
        $data = $klrg->find($nip);
        $data->delete();
        return redirect('keluarga')->with('msg', 'Data ' . $data->namadatakeluarga . ' Berhasil Dihapus');
    }
}
