@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-24">
    <img class="2xl:w-full" src="{{ asset('img/dividend-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">@lang('dividend.title')</div>
</div>
<div class="my-24 w-full space-y-4 mx-auto px-4 sm:px-6 lg:px-8">
    <img class="w-full" src="{{ asset('img/dividen.jpg') }}" alt="Mark Dynamics Dividend Information">
</div>
@endsection