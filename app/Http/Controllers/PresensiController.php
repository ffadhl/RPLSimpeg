<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Http\Requests\StorePresensiRequest;
use App\Http\Requests\UpdatePresensiRequest;
use Illuminate\Support\Facades\Storage;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('presensi.data')->with([
            'presensi' => Presensi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePresensiRequest $request)
    {
        $validate = $request->validated();
        $image = $request->file('img_foto');
        $image->storeAs('public/presensi', $image->hashName());
        $prsns = new Presensi;
        $prsns->id_presensi = $request->id_prsns;
        $prsns->nip = $request->txtnip;
        $prsns->nama = $request->txtnama;
        $prsns->status_presensi = $request->sts_prsns;
        $prsns->foto = $image->hashName();
        
        $prsns->save();

        return redirect('presensi')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presensi $prsns, $id_presensi)
    {
        $data = $prsns->find($id_presensi);
        return view('presensi.formedit')->with([
            'id_prsns' => $id_presensi,
            'txtnip' => $data->nip,
            'txtnama' => $data->nama,
            'sts_prsns' => $data->status_presensi,
            'img_foto' => $data->foto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePresensiRequest $request, Presensi $prsns, $id_presensi)
    {
        $data = $prsns->find($id_presensi);
        $image = $request->file('img_foto');
        $image->storeAs('public/presensi', $image->hashName());
        Storage::delete('public/presensi/'.$data->foto);
        $data->id_presensi = $request->id_prsns;
        $data->nip = $request->txtnip;
        $data->nama = $request->txtnama;
        $data->status_presensi = $request->sts_prsns;
        $data->foto = $image->hashName();
        $data->save();

        return redirect('presensi')->with('msg', 'Data ' . $data->nama . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presensi $prsns, $id_presensi)
    {
        $data = $prsns->find($id_presensi);
        Storage::delete('public/presensi/'. $data->foto);
        $data->delete();
        return redirect('presensi')->with('msg', 'Data ' . $data->nama . ' Berhasil Dihapus');
    }
}
