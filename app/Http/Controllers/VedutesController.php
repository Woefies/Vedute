<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Vedute;
use Illuminate\Http\Request;

class VedutesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vedutes.index', [
            'vedutes' => Vedute::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Artist $artist)
    {
        return view('vedutes.create', [
            'artist' => $artist,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'artist_id' => 'required'
        ]);

        $vedute = new Vedute();
        $vedute->name = $request->input('name');
        $vedute->description = $request->input('description');
        $vedute->image = $request->input('image');
        $vedute->artist_id = $request->input('artist_id');
        $vedute->save();

        return redirect()->route('vedutes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vedute $vedutes)
    {
        return view('vedutes.show', [
            'vedute' => $vedutes,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vedute $vedutes)
    {
        return view('vedutes.edit', [
            'vedute' => $vedutes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vedute $vedute)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'artist_id' => 'required'
        ]);

        $vedute = Vedute::find($vedute->id);
        $vedute->update($request->all());

        return redirect()->route('vedutes.show', $vedute);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vedute $vedutes)
    {
        $vedutes->delete();
        return redirect()->route('vedutes.index');
    }
}
