<?php

namespace App\Http\Controllers;

use App\Models\DataLisensi;
use App\Http\Requests\StoreDataLisensiRequest;
use App\Http\Requests\UpdateDataLisensiRequest;

class DataLisensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datalisensi.data')->with([
            'datalisensi' => DataLisensi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataLisensiRequest $request)
    {
        $validate = $request->validated();

        $lsns = new DataLisensi;
        $lsns->nip = $request->txtnip;
        $lsns->namalisensi = $request->txtnamalisensi;
        $lsns->penerbit = $request->txtpenerbit;
        $lsns->tglterbit = $request->txttglterbit;
        $lsns->tglkadaluarsa = $request->txttglkadaluarsa;
        $lsns->idkredensial = $request->txtidkredensial;
        $lsns->save();

        return redirect('datalisensi')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataLisensi $lsns, $id)
    {
        $data = $lsns->findOrFail($id);
        return view('datalisensi.formedit')->with([
            'txtnip' => $data->id,
            'txtnip' => $data->nip,
            'txtnamalisensi' => $data->namalisensi,
            'txtpenerbit' => $data->penerbit,
            'txttglterbit' => $data->tglterbit,
            'txttglkadaluarsa' => $data->tglkadaluarsa,
            'txtidkredensial' => $data->idkredensial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataLisensiRequest $request, DataLisensi $lsns, $id)
    {
        $data = $lsns->findOrFail($id);
        $data->nip = $request->txtnip;
        $data->namalisensi = $request->txtnamalisensi;
        $data->penerbit = $request->txtpenerbit;
        $data->tglterbit = $request->txttglterbit;
        $data->tglkadaluarsa = $request->txttglkadaluarsa;
        $data->idkredensial = $request->txtidkredensial;
        $data->save();

        return redirect('datalisensi')->with('msg', 'Data untuk nip ' . $data->nip . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataLisensi $lsns, $id)
    {
        $data = $lsns->findOrFail($id);
        $data->delete();
        return redirect('datalisensi')->with('msg', 'Data Lisensi dengan nip ' . $data->nip . ' Berhasil Dihapus');
    }
}
