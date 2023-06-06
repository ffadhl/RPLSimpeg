<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view ('fadhl.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('fadhl.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        mahasiswa::create($request->except(['_token']));
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($IDmahasiswa)
    {
        $mahasiswa = mahasiswa::find($IDmahasiswa);
        return view ('fadhl.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($IDmahasiswa, Request $request)
    {
        $mahasiswa = mahasiswa::find($IDmahasiswa);
        $mahasiswa->update($request->except(['_token']));
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($IDmahasiswa)
    {
        $mahasiswa = mahasiswa::find($IDmahasiswa);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
