@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <div class="divide-y divide-solid divide-black">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-black-100 dark:text-black">Create Artist</h1>
        <form action="{{ route('artists.store')  }}" method="POST">
            @csrf
            <div class="form-group m-2">
                <label for="name">Artist Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                       placeholder="Enter artist name">
            </div>
            <div class="form-group m-2">
                <label for="about">Artist About</label>
                <textarea class="form-control" id="about" name="about" rows="3">{{ old('about') }}</textarea>
            </div>
            <div class="form-group m-2">
                <label for="country">Country</label>
                <input type="text" class="form-control ml-7" id="country" name="country" value="{{ old('country') }}"
                       placeholder="Enter country">
            </div>
            <div class="form-group m-2">
                <label for="image">Artist Image</label>
                <input type="text" class="form-control ml-7" id="image" name="image" value="{{ old('image') }}" placeholder="Enter image url">
            </div>
            <button type="submit" class="btn btn-primary items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">Submit</button>
        </form>
        </div>
    </x-guest-layout>
@endsection
