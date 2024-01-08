@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <div class="container">
            <div class="">
                <h1>Tickets</h1>
                <p>Locatie: nog onbekend</p>
                <p>prijs: €10</p>
                <p>datum: 10-10-2020</p>
                <p>details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem exercitationem harum
                    praesentium reprehenderit sequi similique tempora voluptatibus. Accusamus animi dignissimos
                    distinctio
                    itaque mollitia nihil qui repellendus tenetur vero voluptates.</p>
                <x-primary-button class="ml-4">
                    <a href="{{ route('tickets.create') }}" class="btn btn-primary">Koop Ticket</a>
                </x-primary-button>
            </div>
        </div>
        <div class="container">
            <h1>jouw tickets</h1>
            @foreach($tickets as $ticket)
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $ticket->type}}</h2>
                    </div>
                    <div class="card-body">
                        <p>Datum: {{ $ticket->date }}</p>
                        <p>details {{ $ticket->description }}</p>
                        <p>Prijs: €{{ $ticket->price }}</p>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-primary">Bekijk Ticket</a>
                    </div>
                </div>
            @endforeach
        </div>
    </x-guest-layout>

@endsection
