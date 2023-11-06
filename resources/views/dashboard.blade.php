@extends('layouts.app')

    @section('content')
        <x-slot name="header">
            <h2 class="font-bold text-grey-900 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <x-guest-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm">
                    <div class="p-6 text-black">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
            </x-guest-layout>
    @endsection

