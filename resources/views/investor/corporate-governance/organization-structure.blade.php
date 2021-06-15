@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/organization-structure.png') }}" alt="Mark Dynamics Organization Structure">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('organization-structure.organization-structure')</div>
</div>

<div class="px-4 pt-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <img class="mx-auto" src="{{ asset('img/Struktur-Perusahaan.png') }}" >
</div>

@endsection
