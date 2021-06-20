@extends('layouts.master')

@section('content')
<div class="relative w-full h-auto pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/csr-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">CSR</div>
</div>

<div>
    @livewire('web.sustainability.csrs')
</div>

@endsection
