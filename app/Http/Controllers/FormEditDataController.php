<?php

namespace App\Http\Controllers;

use App\Models\FormEditData;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFormEdit;
use App\Http\Requests\UpdateFormEdit;
use Illuminate\Contracts\Cache\Store;

class FormEditDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layoutkaryawan.karyawanpengajuanedit')->with('karyawanpengajuanedit', FormEditData::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormEdit $request)
    {
        $validate = $request->validated();

        $dataForm = new FormEditData;
        $dataForm->nama = $request->field_nama;
        $dataForm->nip = $request->field_nip;
        $dataForm->jabatan = $request->field_jabatan;
        $dataForm->departemen = $request->field_departemen;
        $dataForm->email = $request->field_email;
        $dataForm->no_hp = $request->field_nohp;
        $dataForm->bagian_data = $request->field_bagiandata;
        $dataForm->keterangan = $request->field_keterangan;
        $dataForm->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(FormEditData $formEditData, $id)
    {
        $dataForm = $formEditData->find($id);
        return view('layoutkaryawan.karyawanpengajuanedit')->with([
         'field_nama' => $dataForm->nama,
         'field_nip' => $dataForm->nip,
         'field_jabatan' => $dataForm->jabatan,
         'field_departemen' => $dataForm->departemen,
         'field_email' => $dataForm->email,
         'field_nohp' => $dataForm->no_hp,
         'field_bagiandata' => $dataForm->bagian_data,
         'field_keterangan' => $dataForm->keterangan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormEditData $formEditData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormEditData $formEditData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormEditData $formEditData, $id)
    {
        $formData = $formEditData->find($id);

        return view('layoutkaryawan.karyawanpengajuanedit')->with([
            'field_nama' => $formData->nama,
            'field_nip' => $formData->nip,
            'field_jabatan' => $formData->jabatan,
            'field_departemen' => $formData->departemen,
            'field_email' => $formData->email,
            'field_nohp' => $formData->no_hp,
            'field_bagiandata' => $formData->bagian_data,
            'field_keterangan' => $formData->keterangan,
        ]);
    }
}