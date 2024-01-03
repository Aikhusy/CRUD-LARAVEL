<?php

namespace App\Http\Controllers;

use App\Models\nama;
use Illuminate\Http\Request;

class NamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = nama::all();

        // Mengirim data post ke tampilan 'posts.index'
        return view('table', ['data' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inputString = $request->input('teks');
        $splitValues = explode(' ', $inputString);

        $nama = isset($splitValues[0]) ? ucfirst(strtolower($splitValues[0])) : null;
        $umur = isset($splitValues[1]) ? intval($splitValues[1]) : null;
        $kota = isset($splitValues[2]) ? ucfirst(strtolower($splitValues[2])) : null;
        
        nama::create([
            'nama'=> $nama,
            'umur'=> $umur,
            'kota'=> $kota,
        ]);
        return redirect()->route('showTable')->with('success', 'Post berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $record = nama::find($id);

        if ($record) {
            $record->delete();
            // You can also add a success message here if needed
        }

        return redirect()->route('showTable');
    }
}
