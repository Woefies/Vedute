@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <div class="">
            <div class="justify-center">
                <h1 class="text-6xl my-4">Tickets</h1>
                <p>Locatie: nog onbekend</p>
                <p>prijs: €10</p>
                <p>datum: 10-10-2020</p>
                <p>details: Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Amet autem exercitationem harum
                    praesentium reprehenderit sequi similique tempora voluptatibus. Accusamus animi dignissimos <br>
                    distinctio
                    itaque mollitia nihil qui repellendus tenetur vero voluptates.</p>
                <x-primary-button class="ml-4">
                    <a href="{{ route('tickets.create') }}" class="btn btn-primary">Koop Ticket</a>
                </x-primary-button>
            </div>
        </div>
        <h1 class="my-2 inline-flex items-center px-3 py-2 text-xl font-medium text-center text-black bg-blue-700 focus:ring-black-300 dark:bg-french-grey dark:focus:ring-black-800">Jouw tickets:</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <br>
            @if($tickets)
                @foreach($tickets as $ticket)
                    <div class="m-2 h-auto w-[400px] bg-white border border-gray-200 shadow dark:bg-off-white dark:border-gray-700 items-center text-center">
                        <div>
                            <h2 class="text-2xl">{{ $ticket->type}}</h2>
                        </div>
                        <div>
                            <p>Datum: {{ $ticket->date }}</p>
                            <p>Details: {{ $ticket->description }}</p>
                            <p>Prijs: €{{ $ticket->price }}</p>
                            <a href="{{ route('tickets.show', $ticket->id) }}" class="my-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring"></a>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">log in om gekochte tickets te zien</p>
            @endif

        </div>
    </x-guest-layout>
@endsection
