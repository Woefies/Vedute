@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- create new workout button -->
                    <x-primary-button class="ml-4">
                    <a href="{{ route('categories.create') }}"
                       class=>Create
                        Category</a>
                        </x-primary-button>
                </div>
            </div>
        </div>

        <!-- show all workouts -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($categories as $category)
                        <div class="card">
                            <div
                                class="m-2 max-w-sm bg-white border border-gray-200 shadow dark:bg-off-white dark:border-gray-700 align-middle">
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-100 dark:text-black">{{ $category->name }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-black">{{ $category->description }}</p>
                                    <x-primary-button class="ml-4">
                                    <a href="{{ route('categories.show', $category->id) }}"
                                       class="inline-flex">
                                        Read more
                                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                        </x-primary-button>
                                    @auth
                                        @if(Auth::user()->id === $category->user_id || Auth::user()-> is_admin == 1 )
                                            <x-primary-button class="ml-4">
                                            <a href="{{ route('categories.edit', $category->id) }}"
                                               class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">
                                                Edit
                                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </a>
                                                </x-primary-button>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-danger inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800 ">
                                                    Delete
                                                </button>
                                            </form>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
@endsection
