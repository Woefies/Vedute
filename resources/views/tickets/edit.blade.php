@extends('layouts.app')

@section('content')

    <form action="{{ route("tickets.update", ['ticket' => $ticket]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Ticket Type" value="{{ $ticket->type }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">datum</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="date" value="{{ $ticket->date }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" name="description" rows="6" cols="40">{{ $ticket->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">€</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Ticket Price" value="{{ $ticket->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
