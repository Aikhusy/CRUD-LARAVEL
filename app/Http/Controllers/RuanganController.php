<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Ruangan::all();

        return view('ruangan.table_ruangan')->with('ruangan',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ruangan.form_tambah_ruangan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'apakah_ditempati' => 'required',
            'total_kursi' => 'required',
        ]);

        $ruangan=new Ruangan();

        $ruangan->fill($validatedData);

        $ruangan->save();

        return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil disimpan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangan $ruangan)
    {
        //
        return view('ruangan.show_ruangan', compact('ruangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruangan $ruangan)
    {
        //
        return view('ruangan.form_edit_ruangan',compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        $validatedData = $request->validate([
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'sedang_ditempati' => 'required',
            'total_kursi' => 'required',
        ]);
    
        $ruangan->update($validatedData);
    
        return redirect()->route('ruangan.index')
            ->with('success', 'Data ruangan berhasil diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruangan $ruangan)
    {
        //

        $ruangan->delete();
        
        return redirect()->route('ruangan.index')
            ->with('success', 'Data ruangan berhasil diperbarui');
    }
}
