<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $mahasiswas = mahasiswa::latest()->paginate(5);
        
        return view('mahasiswas.index',compact('mahasiswas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('mahasiswas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'idmhs' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'mahasiswa_kelamin' => 'required',
            'prodi' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'no_telepon' => 'required',
        ]);
        
        mahasiswa::create($request->all());
         
        return redirect()->route('mahasiswas.index')
                        ->with('success','mahasiswa created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa): View
    {
        return view('mahasiswas.show',compact('mahasiswa'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa): View
    {
        return view('mahasiswas.edit',compact('mahasiswa'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa): RedirectResponse
    {
        $request->validate([
            'idmhs' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'mahasiswa_kelamin' => 'required',
            'prodi' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'no_telepon' => 'required',
        ]);
        
        $mahasiswa->update($request->all());
        
        return redirect()->route('mahasiswas.index')
                        ->with('success','mahasiswa updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->delete();
         
        return redirect()->route('mahasiswas.index')
                        ->with('success','mahasiswa deleted successfully');
    }


}
