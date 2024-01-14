<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genres=genre::all();
        return view('genre.table_genre',compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.form_create_genre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ValidatedData=$request->validate([
            'nama_genre'=>'required',
            'deskripsi_genre'=>'required'
        ]);

        $newGenres=new genre();
        $newGenres->fill($ValidatedData);
        $newGenres->save();

        return redirect()->route('genre.index')-> with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        //
        return view('genre.form_show_genre',compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        //
        return view('genre.form_edit_genre',compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, genre $genre)
    {
        //
        $validatedData=$request->validate([
            'nama_genre'=>'required',
            'deskripsi_genre'=>'required'
        ]);

        $genre->update($validatedData);

        return redirect()->route('genre.index')->with('success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        //
        $genre->delete();
        return redirect()->route('genre.index')->with('success');
    }
}
