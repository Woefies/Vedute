<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
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
        // get tickets from user
        $tickets = auth()->check() ? auth()->user()->tickets : null;

        // return view with tickets
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'date' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $ticket = new Ticket();
        $ticket->type = $request->input('type');
        $ticket->date = $request->input('date');
        $ticket->description = $request->input('description');
        $ticket->price = $request->input('price');
        $ticket->save();

        // attach ticket to user
        $ticket->users()->attach(auth()->user()->id);

        // redirect to tickets index
        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $tickets)
    {
        $request->validate([
            'type' => 'required',
            'date' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $tickets = Ticket::find($tickets->id);
        $tickets->update($request->all());

        $tickets->users()->sync($request->input('users'));

        return redirect()->route('tickets.show', $tickets);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $tickets)
    {
        $tickets->delete();

        return redirect()->route('tickets.index');
    }
}
