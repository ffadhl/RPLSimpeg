<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Http\Requests\StoreCutiRequest;
use App\Http\Requests\UpdateCutiRequest;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cuti.data')->with([
            'cuti' => Cuti::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCutiRequest $request)
    {
        $validate = $request->validated();

        $ct = new Cuti;
        $ct->id_cuti = $request->id_ct;
        $ct->nip = $request->txtnip;
        $ct->nama = $request->txtnama;
        $ct->jenis_cuti = $request->jns_ct;
        $ct->mulai_cuti = $request->ml_ct;
        $ct->selesai_cuti = $request->sls_ct;
        
        $ct->save();

        return redirect('cuti')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuti $ct, $id_cuti)
    {
        $data = $ct->find($id_cuti);
        return view('cuti.formedit')->with([
            'id_gj' => $id_cuti,
            'txtnip' => $data->nip,
            'txtnama' => $data->nama,
            'jns_ct' => $data->jenis_cuti,
            'ml_ct' => $data->mulai_cuti,
            'sls_ct'=> $data->selesai_cuti
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCutiRequest $request, Cuti $ct, $id_cuti)
    {
        $data = $ct->find($id_cuti);
        $data->id_cuti = $request->id_ct;
        $data->nip = $request->txtnip;
        $data->nama = $request->txtnama;
        $data->jenis_cuti = $request->jns_ct;
        $data->mulai_cuti = $request->ml_ct;
        $data->selesai_cuti = $request->sls_ct;
        $data->save();

        return redirect('cuti')->with('msg', 'Data Cuti Untuk' . $data->nama . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuti $ct, $id_cuti)
    {
        $data = $ct->find($id_ct);
        $data->delete();
        return redirect('cuti')->with('msg', 'Data ' . $data->nama . ' Berhasil Dihapus');
    }
}
