@extends('layouts.app')

@section('content')
    <form action="{{ route('vedutes.store') }}" method="POST">
        @csrf
        <div class="form-group m-2">
            <label for="name">Vedute Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                   placeholder="Enter vedute name">
        </div>
        <div class="form-group m-2">
            <label for="description">Vedute description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-group m-2">
            <label for="image">Vedute Image</label>
            <input type="text" class="form-control ml-7" id="image" name="image" value="{{ old('image') }}" placeholder="Enter image url">
        </div>
        <div class="form-group m-2">
            <label for="date">Vedute date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" placeholder="Enter vedute date">
        </div>
        <div class="form-group m-2">
            <label for="artist_id">Artist</label>
            <select class="form-control" id="artist_id" name="artist_id">
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">Submit</button>
    </form>
@endsection
