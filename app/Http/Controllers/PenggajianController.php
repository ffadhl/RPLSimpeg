<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use App\Http\Requests\StorePenggajianRequest;
use App\Http\Requests\UpdatePenggajianRequest;
use App\Models\Karyawan;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penggajian.data')->with([
            'penggajian' => Penggajian::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenggajianRequest $request)
    {
        $validate = $request->validated();

        $pgjn = new Penggajian;
        $pgjn->id_gaji = $request->id_gj;
        $pgjn->nip = $request->txtnip;
        $pgjn->nama = $request->txtnama;
        $pgjn->gaji_pokok = $request->gj_pkk;
        $pgjn->tunjangan = $request->tjgn;
        
        $pgjn->save();

        return redirect('penggajian')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penggajian $pgjn, $id_gaji)
    {
        $karyawans = Karyawan::all();
        $data = $pgjn->find($id_gaji);
        return view('penggajian.formedit', compact('karyawans'))->with([
            'id_gj' => $id_gaji,
            'txtnip' => $data->nip,
            'txtnama' => $data->nama,
            'gj_pkk' => $data->gaji_pokok,
            'tjgn' => $data->tunjangan
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenggajianRequest $request, Penggajian $pgjn, $id_gaji)
    {
        $data = $pgjn->find($id_gaji);
        $data->id_gaji = $request->id_gj;
        $data->nip = $request->txtnip;
        $data->nama = $request->txtnama;
        $data->gaji_pokok = $request->gj_pkk;
        $data->tunjangan = $request->tjgn;
        $data->save();

        return redirect('penggajian')->with('msg', 'Data ' . $data->nama . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penggajian $pgjn, $id_gaji)
    {
        $data = $pgjn->find($id_gaji);
        $data->delete();
        return redirect('penggajian')->with('msg', 'Data ' . $data->nama . ' Berhasil Dihapus');
    }
}
