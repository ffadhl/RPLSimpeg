<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jabatan.data')->with([
            'jabatan' => Jabatan::all()
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
        $JabatanStore = new Jabatan;

        $JabatanStore->id_jabatan = $request->field_id;
        $JabatanStore->nama_jabatan = $request->field_nama;
        $JabatanStore->deskripsi_jabatan = $request->field_deskripsi;
        $JabatanStore->lokasi_jabatan = $request->field_lokasi;

        $JabatanStore->save();

        return redirect('jabatan')->with('msg', "Data ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $JabatanStore, $id_jabatan)
    {
        $data = $JabatanStore->find($id_jabatan);

        return view('jabatan.formedit')->with([
            'field_id' => $id_jabatan,
            'field_nama' => $JabatanStore->nama_jabatan,
            'field_deskripsi' => $JabatanStore->deskripsi_jabatan,
            'field_lokasi' => $JabatanStore->lokasi_jabatan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Jabatan $jabatan)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJabatanRequest $request, Jabatan $JabatanStore, $id_jabatan)
    {
        $data = $JabatanStore->find($id_jabatan);
        $data->nama_jabatan = $request->field_nama;
        $data->deskripsi_jabatan = $request->field_deskripsi;
        $data->lokasi_jabatan = $request->field_lokasi;
        $data->save();

        return redirect('jabatan')->with('msg', 'Data '. $data->nama_jabatan . ' berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $JabatanStore, $id_jabatan)
    {
        $data = $JabatanStore->find($id_jabatan);
        $data->delete();
        return redirect('jabatan')->with('msg', 'Data '. $data->nama_jabatan .' berhasil dihapus');
    }
}
