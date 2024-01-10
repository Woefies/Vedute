@extends('layouts.app')

@section('content')
<x-guest-layout>
    <div class="container">
        <div class="row object-center">
            <div class="col-12 align-middle justify-center object-center max-w-2xl">
                <h1 class="text-3xl">{{ $vedute->name }}</h1>
                <br>
                <p> Het verhaal | {{ $vedute->description }}</p>
                <br>
                <p> Gemaakt op | {{ $vedute->date }}</p>
                <p> Maker | <a href="{{ route('artists.show', ['id' => $vedute->artist->id]) }}" class="underline">{{ $vedute->artist->name }}</a></p>
                <img class="mx-auto"src="{{ $vedute->image }}" alt="{{ $vedute->name }}">
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
