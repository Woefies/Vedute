@extends('layouts.app')

@section('content')
    <x-guest-layout>
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-black-100 dark:text-black">Edit Artist</h1>
    <form action="{{ route('artists.update', $artist->id)  }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Artist Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $artist->name }}" placeholder="Enter artist name">
        </div>
        <div class="form-group">
            <label for="about">Artist About</label>
            <textarea class="form-control" id="about" name="about" rows="3">{{ $artist->about }}</textarea>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ $artist->country }}" placeholder="Enter country">
        </div>
        <button type="submit" class="btn btn-primary items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">Submit</button>
    </form>
        </x-guest-layout>
@endsection
