@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <h1 class="text-center text-6xl mb-10">Oktober Showcase</h1>
        <p>Haal hier je <a href="{{ route('tickets.index') }}" class="font-bold underline text-1xl">tickets</a></p>
        <div id="custom-controls-gallery" class="relative w-full sm:max-w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://vedute.nl/wp-content/uploads/2018/09/0001_a.jpg"
                         class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://vedute.nl/wp-content/uploads/2018/09/0046_a.jpg"
                         class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://vedute.nl/wp-content/uploads/2018/09/0076_a.jpg"
                         class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://vedute.nl/wp-content/uploads/2018/09/0086_a.jpg"
                         class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://vedute.nl/wp-content/uploads/2018/09/0096_a.jpg"
                         class="absolute block max-w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="">
                </div>
            </div>
            <div class="flex justify-center items-center pt-4">
                <button type="button"
                        class="flex justify-center items-center mr-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
            <span
                class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
                </button>
                <button type="button"
                        class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
            <span
                class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
                </button>
            </div>
            <h1>
                Wil jij je eigen Vedute hebben? Ga dan nu naar <a href="{{route('products.index')}}" class="text-blue-600">onze webshop</a> en koop je eigen vedute shirt of mok!
            </h1>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
        </div>
        <p class="text-center mt-2">Vedute is opgericht met als doel een bibliotheek van ruimtelijke manuscripten op te bouwen: <br>
            een verzameling driedimensionale objecten, allen in gesloten vorm 44 x 32 x 7 cm, die als <br>
            gevisualiseerde gedachten het begrip ruimte zichtbaar en toegankelijk maken.</p>
    </x-guest-layout>
@endsection
