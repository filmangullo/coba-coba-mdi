@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-auto relative pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/organization-structure.png') }}" alt="Mark Dynamics Organization Structure">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('structure-organization.title')</div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
    <img class="mx-auto" src="{{ asset('img/Struktur-Perusahaan.png') }}" >
</div>

@endsection
