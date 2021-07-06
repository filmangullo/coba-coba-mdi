@extends('layouts.master')

@section('content')

<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="py-24 text-4xl font-bold text-center">Products</div>
    <div class="grid grid-cols-6 gap-4 pb-24 border-b border-gray-500">
        <div class="col-span-6 h-3/4">
            <img class="object-cover w-full rounded-md" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
    </div>
    <div class="py-24 text-4xl font-bold text-center">Gallery</div>
    <div class="grid grid-cols-4 gap-4 pb-24">
        @for($i = 0; $i < 20; $i++)
        <div>
            <img class="object-cover h-40 rounded-md" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endfor
    </div>
    <div class="flex items-center justify-center gap-6 pb-24">
        <div class="font-bold cursor-pointer hover:text-mark-dark text-mark-default">Previous Page</div>
        <input class="px-5 py-1 font-bold border-2 rounded-md outline-none w-14 text-mark-default border-mark" value="2">
        <div class="font-bold cursor-pointer hover:text-mark-dark text-mark-default">Next Page</div>
    </div>
</div>

@endsection
