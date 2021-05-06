@extends('layouts.master')

@section('content')

<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="text-4xl py-24 font-bold text-center">Products</div>
    <div class="grid grid-cols-6 gap-4 pb-24 border-b border-gray-500">
        <div class="col-span-6 h-3/4">
            <img class="rounded-md w-full object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="h-28 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="h-28 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="h-28 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="h-28 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="h-28 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="h-28 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
    </div>
    <div class="text-4xl py-24 font-bold text-center">Gallery</div>
    <div class="grid grid-cols-4 gap-4 pb-24">
        @for($i = 0; $i < 20; $i++)
        <div>
            <img class="h-40 rounded-md object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endfor
    </div>
    <div class="pb-24 flex items-center justify-center gap-6">
        <div class="font-bold cursor-pointer hover:text-mark-dark text-mark-default">Previous Page</div>
        <input class="border-2 font-bold w-14 outline-none text-mark-default border-mark rounded-md py-1 px-5" value="2">
        <div class="font-bold cursor-pointer hover:text-mark-dark text-mark-default">Next Page</div>
    </div>
</div>

@endsection