@extends('layouts.app')
<x-guest-layout>
    @section('content')
        <!-- create new products button -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <x-primary-button class="ml-4">
                        <a href="{{ route('products.create') }}"
                           class="">Create
                            Product</a>
                    </x-primary-button>
                </div>
            </div>
        </div>

        <!-- show all products -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($products as $product)
                <div
                    class="m-2 h-auto w-[400px] bg-white border border-gray-200 shadow dark:bg-off-white dark:border-gray-700 items-center text-center">
                    <div class="p-5">
                        <a href="#">
                            <img class="" src="{{ $product->image }}" alt="Placeholder"/>
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-100 dark:text-black">{{ $product->name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-black">{{ $product->description }}</p>
                            <a href="{{ route('products.show', $product->id)
                                    }}"
                               class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                            @auth
                                @if(Auth::user()->id === $product->user_id || Auth::user()-> is_admin == 1 )
                                    <a href="{{ route('products.edit', $product->id) }}"
                                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800">
                                        Edit
                                        <svg class="w-3
                                                .5 h-3.5 ml-2" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
                </div>
        @endforeach
</x-guest-layout>
@endsection
