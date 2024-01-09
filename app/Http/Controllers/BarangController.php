<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barang=Barang::all();

        return view('barang.table_barang')->with('barang',$barang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('barang.form_create_barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated_data=$request->validate([
            'nama_barang'=>'required',
            'id_rak'=>'required'
        ]);

        $barang=new Barang();

        $barang->fill($validated_data);

        $barang->save();

        return redirect()->route('barang.index')->with('success','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
        return view('barang.show_barang')->with('barang',$barang);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
        return view('barang.form_edit_barang')->with('barang',$barang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
