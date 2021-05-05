@extends('layouts.master')

@section('content')

<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="text-4xl py-24 font-bold text-center">Products</div>
    <div class="grid grid-cols-6 gap-4">
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
</div>

@endsection