@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-auto relative pt-24">
    <img src="{{ asset('img/organization-structure.png') }}" alt="Mark Dynamics Organization Structure">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Organization Structure</div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
    <img class="mx-auto" src="{{ asset('img/Struktur-Perusahaan.png') }}" >
</div>

@endsection