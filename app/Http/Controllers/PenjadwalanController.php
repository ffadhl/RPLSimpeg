<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use App\Http\Requests\StorePenjadwalanRequest;
use App\Http\Requests\UpdatePenjadwalanRequest;

class PenjadwalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penjadwalan.data')->with([
            'penjadwalan' => Penjadwalan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjadwalanRequest $request)
    {
        $validate = $request->validated();

        $pjwln = new Penjadwalan;
        $pjwln->kode_jadwal = $request->kd_jwl;
        $pjwln->nip = $request->txtnip;
        $pjwln->nama = $request->txtnama;
        $pjwln->id_jabatan = $request->id_jbtn;
        $pjwln->waktu_shift = $request->wkt_shft;
        $pjwln->tanggal_shift = $request->tgl_shft;
        
        $pjwln->save();

        return redirect('penjadwalan')->with('msg', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjadwalan $pjwln, $kode_jadwal)
    {
        $data = $pjwln->find($kode_jadwal);
        return view('penjadwalan.formedit')->with([
            'kd_jwl' => $kode_jadwal,
            'txtnip' => $data->nip,
            'txtnama' => $data->nama,
            'id_jbtn' => $data->id_jabatan,
            'wkt_shft' => $data->waktu_shift,
            'tgl_shft' => $data->tanggal_shift
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjadwalanRequest $request, Penjadwalan $pjwln, $kode_jadwal)
    {
        $data = $pjwln->find($kode_jadwal);
        $data->kode_jadwal = $request->kd_jwl;
        $data->nip = $request->txtnip;
        $data->nama = $request->txtnama;
        $data->id_jabatan = $request->id_jbtn;
        $data->waktu_shift = $request->wkt_shft;
        $data->tanggal_shift = $request->tgl_shft;
        $data->save();

        return redirect('penjadwalan')->with('msg', 'Data ' . $data->nama . ' Berhasil Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjadwalan $pjwln, $kode_jadwal)
    {
        $data = $pjwln->find($kode_jadwal);
        $data->delete();
        return redirect('penjadwalan')->with('msg', 'Data ' . $data->nama . ' Berhasil Dihapus');
    }
}
