<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswacheva;
use Illuminate\Http\Request;

class MahasiswaControllerC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswacheva::latest()->paginate(5);
        return view('mahasiswaC.index', compact('mahasiswa'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswaC.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'agama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswacheva::create($request->all());
        return redirect()->route('mahasiswaC.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswacheva $mahasiswa)
    {
        return view('mahasiswaC.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswacheva $mahasiswa)
    {
        return view('mahasiswaC.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswacheva $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'agama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            ]);
        return redirect()->route('mahasiswaC.index')->with('success', 'Mahasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswacheva $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswaC.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
