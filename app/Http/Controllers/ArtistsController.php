<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('artists.index', [
            'artists' => Artist::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create', [
            'artists' => new Artist()
        ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'about' => 'required',
            'country' => 'required'
        ]);

        $artist = new Artist();
        $artist->name = $request->input('name');
        $artist->about = $request->input('about');
        $artist->country = $request->input('country');
        $artist->save();

        return redirect()->route('artists.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('artists.show', [
            'artist' => $artist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', [
            'artist' => $artist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required',
            'about' => 'required',
            'country' => 'required'
        ]);

        $artist = Artist::find($artist->id);
        $artist->update($request->all());


        return redirect()->route('artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artists.index');
    }
}
