<?php

namespace App\Http\Controllers;
use App\Models\FormPengajuanCuti;
use App\Http\Requests\StoreFormPengajuanCutiRequest;
use App\Http\Requests\UpdateFormPengajuanCutiRequest;
use Illuminate\Http\Request;

class FormPengajuanCutiController extends Controller
{
    public function index()
    {
        return view('layoutkaryawan.karyawanpengajuancuti')->with([
            'pengajuancuti' => FormPengajuanCuti::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormPengajuanCutiRequest $request)
    {
        $validate = $request->validated();

        $form = new FormPengajuanCuti();
        $form->nama = $request->field_nama;
        $form->nip = $request->field_nip;
        $form->jabatan = $request->field_jabatan;
        $form->departemen = $request->field_departemen;
        $form->email = $request->field_email;
        $form->no_hp = $request->field_nohp;
        $form->tanggal_mulai = $request->field_tanggal_mulai;
        $form->tanggal_selesai = $request->field_tanggal_selesai;
        $form->jenis_cuti = $request->field_jenis_cuti;
        $form->keterangan = $request->field_keterangan;
        
        $form->save();

        return redirect('pengajuancuti')->with('msg', 'Data Berhasil Ditambahkan');
    }

    public function show(){

    }

    public function update(){

    }

    public function destroy(){

    }


}
