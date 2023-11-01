@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- create new workout button -->
                <a href="{{ route('artists.create') }}" class="btn btn-primary">Create Artist</a>
            </div>
        </div>
    </div>

    <!-- show all workouts -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($artists as $artist)
                    <div class="card">
                        <div class="card-header">{{ $artist->name }}</div>

                        <div class="card-body">
                            <p>{{ $artist->about }}</p>
                            <a href="{{ route('artists.show', $artist->id) }}" class="btn btn-primary">View</a>
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
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
