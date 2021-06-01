@extends('layouts.master')

@section('content')
    <div class="relative w-full h-auto pt-12 lg:pt-24">
        <img class="2xl:w-full" src="{{ asset('img/our-business-hero.png') }}" alt="Mark Dynamics Our Business">
        <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
        <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('custom.our-business')</div>
    </div>
    <div class="grid-cols-2 px-4 mx-auto my-12 max-w-7xl lg:grid gap-7 sm:px-6 lg:px-8 lg:my-24">
        <div>
            <img class="object-cover w-full h-48 rounded-md sm:h-96 lg:h-full" src="{{ asset('img/our-business-pic.png') }}" alt="Mark Dynamics Indonesia">
        </div>
        <div>
            <div class="mt-12 mb-6 text-xl font-bold lg:mt-0 lg:text-2xl lg:mb-12">PT. Mark Dynamics Indonesia Tbk</div>
            <div class="text-xs text-justify lg:text-sm">@lang('our-business.section-business')</div>
        </div>
    </div>
@endsection
