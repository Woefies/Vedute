@extends('layouts.app')

@section('content')

    <form action="{{ route("tickets.store") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Ticket Type" value="Salon ticket" readonly>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">datum</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="date" value="10-10-2023" readonly>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" name="description" rows="6" cols="40">Betreed de betoverende wereld van kunst en cultuur met een exclusief ticket voor de Salon van Vedute. Deze unieke salon biedt een zinnenprikkelende ervaring waar kunst, muziek en gesprekken samenkomen in een elegante setting.</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">€</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Ticket Price" value="10" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endsection
