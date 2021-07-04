@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('our-business.our-business')</h2>
    <p class="mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <div class="px-4 mx-auto max-w-7xl lg:grid gap-7 sm:px-6 lg:px-8 mt-12">
        <div>
            <img class="object-cover w-full h-48 rounded-md sm:h-96 lg:h-full" src="{{ asset('img/our-business-pic.png') }}" alt="Mark Dynamics Indonesia">
        </div>
        <div class="mt-12">
            <div class="mt-12 mb-6 lg:mt-0 lg:mb-12 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">PT. Mark Dynamics Indonesia Tbk</div>
            <div class="text-base text-justify lg:text-lg">@lang('our-business.section-business')</div>
        </div>
    </div>
</div>
@endsection
