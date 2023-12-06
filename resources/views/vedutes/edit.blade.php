@extends('layouts.app')

@section('content')

    <form action="{{ route('vedutes.update', $vedute->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Vedute Name</label>
            <input type="text" name="name" value="{{ $vedute->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Vedute Description</label>
            <textarea name="description"  class="form-control">{{ $vedute->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Vedute image</label>
            <input type="text" name="image" value="{{ $vedute->image }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="artist">Artist</label>
            <select name="artist_id" class="form-control">
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}" {{ $artist->id == $vedute->artist_id ? 'selected' : '' }}>{{ $artist->name }}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </form>
@endsection
