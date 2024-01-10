@extends('layouts.app')

@section('content')
    <x-guest-layout>
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-black-100 dark:text-black">Artiest | {{ $artist->name }}</h1>
    <p>Wie is het | {{ $artist->about }}</p>
        <br>
    <p>Land van herkomst | {{ $artist->country }}</p>
        <br>
    <img class="mx-auto" src="{{ $artist->image }}" alt="{{ $artist->name }}" class="w-1/4">
    <a href="{{ route('artists.index') }}" class="btn btn-primary items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">Back</a>
    @auth
    @if(Auth::user()->id === $artist->user_id || Auth::user()-> is_admin == 1 )
        <!-- edit button -->
        <a href="{{ route('artists.edit', $artist->id) }}" class="btn btn-primary items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">Edit</a>
        <!-- delete button -->
        <form action="{{ route('artists.destroy', $artist->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger  items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">Delete</button>
        </form>
    @endif
    @endauth
        </x-guest-layout>
@endsection
