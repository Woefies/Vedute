@extends('layouts.app')

@section('content')

    <h1>Edit Artist</h1>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
