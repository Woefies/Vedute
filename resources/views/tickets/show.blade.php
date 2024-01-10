@extends('layouts.app')

@section('content')

<x-guest-layout>
<div class="container">
    <div class="row">
        <div class="col-12 align-middle justify-center max-w-3xl">
            <h1 class="text-2xl">{{ $ticket->type }}</h1>
            <br>
            <p>{{ $ticket->date }}</p>
            <p>{{ $ticket->description }}</p>
            <br>
            <p>Ticket prijs: €{{ $ticket->price }}</p>
        </div>
        @auth
            @if(Auth::user()-> is_admin == 1 )
                <!-- edit button -->
                <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-primary">Edit</a>

                <!-- delete button -->
                <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endif
        @endauth
    </div>
</div>
</x-guest-layout>

@endsection
