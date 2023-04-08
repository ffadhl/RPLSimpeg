<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Http\Requests\StoreDepartemenRequest;
use App\Http\Requests\UpdateDepartemenRequest;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('departemen.data')->with([
            'departemen' => Departemen::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartemenRequest $request)
    {
        $validate = $request->validated();

        $dprtmn = new Departemen;
        $dprtmn->id_departemen = $request->id_dprtmn;
        $dprtmn->nama_departemen = $request->nama_dprtmn;
        $dprtmn->kepala_departemen = $request->kepala_dprtmn;
        $dprtmn->deskripsi_departemen = $request->deskripsi_dprtmn;
        $dprtmn->lokasi_departemen = $request->lokasi_dprtmn;
        
        $dprtmn->save();

        return redirect('departemen')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departemen $dprtmn, $id_departemen)
    {
        $data = $dprtmn->find($id_departemen);
        return view('departemen.formedit')->with([
            'id_dprtmn' => $id_departemen,
            'nama_dprtmn' => $data->$nama_departemen,
            'kepala_dprtmn' => $data->$kepala_departemen,
            'deskripsi_dprtmn' => $data->$deskripsi_departemen,
            'lokasi_dprtmn' => $data->$lokasi_departemen
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartemenRequest $request, Departemen $dprtmn, $id_departemen)
    {
        $data = $dprtmn->find($id_departemen);
        $data->id_departemen = $request->id_dprtmn;
        $data->nama_departemen = $request->nama_dprtmn;
        $data->kepala_departemen = $request->kepala_dprtmn;
        $data->deskripsi_departemen = $request->deskripsi_dprtmn;
        $data->lokasi_departemen = $request->lokasi_dprtmn;
        $data->save();

        return redirect('departemen')->with('msg', 'Data ' . $data->nama_departemen . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departemen $dprtmn, $id_departemen)
    {
        $data = $dprtmn->find($id_departemen);
        $data->delete();
        return redirect('departemen')->with('msg', 'Data ' . $data->nama_departemen . ' Berhasil Dihapus');
    }
}
