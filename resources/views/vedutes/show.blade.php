@extends('layouts.app')

@section('content')
<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $vedute->name }}</h1>
                <p>{{ $vedute->description }}</p>
                <p>{{ $vedute->date }}</p>
                <p>{{ $vedute->artist->name }}</p>
                <img src="{{ $vedute->image }}" alt="{{ $vedute->name }}">
            </div>
        </div>
    </div>
</x-guest-layout>
@endsection
