@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/financial-highlight-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-sm sm:text-2xl lg:text-4xl font-bold top-1/2 mt-5 h-full">@lang('financial-highlight.financial')</div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-12 lg:my-24">
    <div>
        <div class="text-mark-default font-bold text-2xl lg:text-4xl">@lang('financial-highlight.kinerja')</div>
        @if(App::isLocale('id'))
        <img class="py-12 lg:py-24" src="{{ asset('img/graph-1.png') }}" alt="Mark Dynamics Financial Highlight">
        @elseif(App::isLocale('en'))
        <img class="py-12 lg:py-24" src="{{ asset('img/graph-1-eng.png') }}" alt="Mark Dynamics Financial Highlight">
        @endif
        @if(App::isLocale('id'))
        <img class="py-12 lg:py-24" src="{{ asset('img/financial-highlight-table.png') }}" alt="Mark Dynamics Financial Highlight">
        @elseif(App::isLocale('en'))
        <img class="py-12 lg:py-24" src="{{ asset('img/financial-highlight-table-eng.png') }}" alt="Mark Dynamics Financial Highlight">
        @endif
        <div class="text-mark-default font-bold text-2xl lg:text-4xl">@lang('financial-highlight.neraca')</div>
        @if(App::isLocale('id'))
        <img class="pt-12 lg:pt-24" src="{{ asset('img/graph-2.png') }}" alt="Mark Dynamics Financial Highlight">
        @elseif(App::isLocale('en'))
        <img class="py-12 lg:py-24" src="{{ asset('img/graph-2-eng.png') }}" alt="Mark Dynamics Financial Highlight">
        @endif
    </div>
</div>
@endsection