@extends('layouts.app')

@section('content')

    <h1>Create Artist</h1>
    <form action="{{ route('artists.store')  }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Artist Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter artist name">
        </div>
        <div class="form-group">
            <label for="about">Artist About</label>
            <textarea class="form-control" id="about" name="about" rows="3">{{ old('about') }}</textarea>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" placeholder="Enter country">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
