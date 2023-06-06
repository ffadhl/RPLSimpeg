<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaimkController extends Controller
{
    
    public function index(): View
    {
        $nilaimks = nilaimk::latest()->paginate(5);
        
        return view('nilaimks.index',compact('nilaimks'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('nilaimks.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'idmhs' => 'required',
            'nama_mk' => 'required',
            'kode_mk' => 'required',
            'nilai' => 'required',
        ]);
        
        nilaimk::create($request->all());
         
        return redirect()->route('nilaimks.index')
                        ->with('success','nilaimk created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(nilaimk $nilaimk): View
    {
        return view('nilaimks.show',compact('nilaimk'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nilaimk $nilaimk): View
    {
        return view('nilaimks.edit',compact('nilaimk'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nilaimk $nilaimk): RedirectResponse
    {
        $request->validate([
            'idmhs' => 'required',
            'nama_mk' => 'required',
            'kode_mk' => 'required',
            'nilai' => 'required',
        ]);
        
        $nilaimk->update($request->all());
        
        return redirect()->route('nilaimks.index')
                        ->with('success','nilaimk updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nilaimk $nilaimk): RedirectResponse
    {
        $nilaimk->delete();
         
        return redirect()->route('nilaimks.index')
                        ->with('success','nilaimk deleted successfully');
    }
}
