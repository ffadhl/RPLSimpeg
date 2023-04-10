<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;

// use App\Http\Requests\StorePenggajianRequest;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jabatan.data')->with([
            'jabatan' => jabatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJabatanRequest $request)
    {
        $validate = $request->validated();

        $jabatan = new jabatan;
        $jabatan->id_jabatan = $request->idjabatan;
        $jabatan->nama_jabatan = $request->namajabatan;
        $jabatan->deskripsi_jabatan = $request->deskripsijabatan;
        $jabatan->lokasi_jabatan = $request->lokasijabatan;

        $jabatan->save();
        return redirect('jabatan')->with('msg', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(jabatan $jabatan, $id_jabatan)
    {
        $data = $jabatan->find($id_jabatan);
        return view('jabatan.formedit')->with([
            'idjabatan' => $id_jabatan,
            'namajabatan' => $data->nama_jabatan,
            'deskripsijabatan' => $data->deskripsi_jabatan,
            'lokasijabatan' => $data->lokasi_jabatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(jabatan $jabatan)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJabatanRequest $request, jabatan $jabatan, $id_jabatan)
    {
        $data = $jabatan->find($id_jabatan);
        $data->id_jabatan = $request->idjabatan;
        $data->nama_jabatan = $request->namajabatan;
        $data->deskripsi_jabatan = $request->deskripsijabatan;
        $data->lokasi_jabatan = $request->lokasijabatan;
        $data->save();

        return redirect('jabatan')->with('msg', 'Data '. $data->nama_jabatan. ' berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jabatan $jabatan, $id_jabatan)
    {
        $data = $jabatan->find($id_jabatan);
        $data->delete();
        return redirect('jabatan')->with('msg', 'Data '. $data->nama_jabatan . ' berhasil dihapus');
    }
}
