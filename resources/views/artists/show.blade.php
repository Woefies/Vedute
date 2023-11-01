@extends('layouts.app')

@section('content')

    <h1>Artist: {{ $artist->name }}</h1>
    <p>{{ $artist->about }}</p>
    <p>{{ $artist->country }}</p>
    <a href="{{ route('artists.index') }}" class="btn btn-primary">Back</a>
    @auth
    @if(Auth::user()->id === $artist->user_id || Auth::user()-> is_admin == 1 )
        <!-- edit button -->
        <a href="{{ route('artists.edit', $artist->id) }}" class="btn btn-primary">Edit</a>
        <!-- delete button -->
        <form action="{{ route('artists.destroy', $artist->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    @endif
    @endauth

@endsection
