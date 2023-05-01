<?php

namespace App\Http\Controllers;

use App\Models\DataPendidikan;
use App\Http\Requests\StoreDataPendidikanRequest;
use App\Http\Requests\UpdateDataPendidikanRequest;

class DataPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datapendidikan.data')->with([
            'datapendidikan' => DataPendidikan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataPendidikanRequest $request)
    {
        $validate = $request->validated();

        $pddkn = new DataPendidikan;
        $pddkn->nip = $request->txtnip;
        $pddkn->sekolah = $request->txtsekolah;
        $pddkn->gelar = $request->txtgelar;
        $pddkn->bidang = $request->txtbidang;
        $pddkn->tglmulai = $request->txttglmulai;
        $pddkn->tglselesai = $request->txttglselesai;
        $pddkn->nilai = $request->txtnilai;
        $pddkn->save();

        return redirect('datapendidikan')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPendidikan $pddkn, $id)
    {
        $data = $pddkn->find($id);
        return view('datapendidikan.formedit')->with([
            'txtid' => $data->id,
            'txtnip' => $data->nip,
            'txtsekolah' => $data->sekolah,
            'txtgelar' => $data->gelar,
            'txtbidang' => $data->bidang,
            'txttglmulai' => $data->tglmulai,
            'txttglselesai' => $data->tglselesai,
            'txtnilai' => $data->nilai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataPendidikanRequest $request, DataPendidikan $pddkn, $id)
    {
        $data = $pddkn->find($id);
        $data->nip = $request->txtnip;
        $data->sekolah = $request->txtsekolah;
        $data->gelar = $request->txtgelar;
        $data->bidang = $request->txtbidang;
        $data->tglmulai = $request->txttglmulai;
        $data->tglselesai = $request->txttglselesai;
        $data->nilai = $request->txtnilai;
        $data->save();

        return redirect('datapendidikan')->with('msg', 'Data untuk nip ' . $data->nip . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPendidikan $pddkn, $id)
    {
        $data = $pddkn->find($id);
        $data->delete();
        return redirect('datapendidikan')->with('msg', 'Data Pendidkan dengan nip' . $data->nip . ' Berhasil Dihapus');
    }
}
