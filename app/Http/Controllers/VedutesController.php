<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Vedute;
use Illuminate\Http\Request;

class VedutesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

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
    public function create()
    {
        return view('vedutes.create', [
            'vedutes' => new Vedute(),
            'artists' => Artist::all()
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
            'date' => 'required',
            'artist_id' => 'required'
        ]);

        $vedute = new Vedute();
        $vedute->name = $request->input('name');
        $vedute->description = $request->input('description');
        $vedute->image = $request->input('image');
        $vedute->date = $request->input('date');
        $vedute->artist_id = $request->input('artist_id');
        $vedute->save();

        return redirect()->route('vedutes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vedute $vedute , Artist $artist)
    {
        return view('vedutes.show', [
            'vedute' => $vedute,
            'artist' => $artist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        // Fetch the Vedute record
        $vedute = Vedute::findOrFail($id);

        // Fetch all available artists
        $artists = Artist::all();

        // Pass data to the view for editing
        return view('vedutes.edit', compact('vedute', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'artist_id' => 'required'
        ]);

        $vedute = Vedute::findOrFail($id);
        $vedute->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'artist_id' => $request->artist_id
        ]);

        return redirect()->route('vedutes.show', $vedute);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vedutes = Vedute::findOrFail($id);
        $vedutes->delete();
        return redirect()->route('vedutes.index');
    }
}
