@extends('layouts.app')

@section('content')
<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $vedute->name }}</h1>
                <p> Het verhaal | {{ $vedute->description }}</p>
                <p> Gemaakt op | {{ $vedute->date }}</p>
                <p> Maker | {{ $vedute->artist->name }}</p>
                <img src="{{ $vedute->image }}" alt="{{ $vedute->name }}">
            </div>
            @auth
                @if(Auth::user()->id === $vedute->user_id || Auth::user()-> is_admin == 1 )
                    <!-- edit button -->
                    <a href="{{ route('vedutes.edit', $vedute->id) }}" class="btn btn-primary">Edit</a>

                    <!-- delete button -->
                    <form action="{{ route('vedutes.destroy', $vedute->id) }}" method="POST">
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
