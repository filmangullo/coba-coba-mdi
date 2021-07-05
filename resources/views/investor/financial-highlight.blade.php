@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 pt-32 sm:px-6 lg:pb-16 lg:px-8 text-center">
    <div class="text-mark-default font-bold text-2xl lg:text-4xl">
        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('financial-highlight.financial')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('financial-highlight.kinerja')
        </p>
    </div>
    @if(App::isLocale('id'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/graph-1.png') }}" alt="Mark Dynamics Financial Highlight">
    @elseif(App::isLocale('en'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/graph-1-eng.png') }}" alt="Mark Dynamics Financial Highlight">
    @endif
    @if(App::isLocale('id'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/financial-highlight-table.png') }}" alt="Mark Dynamics Financial Highlight">
    @elseif(App::isLocale('en'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/financial-highlight-table-eng.png') }}" alt="Mark Dynamics Financial Highlight">
    @endif
    <div class="text-mark-default font-bold text-2xl pt-12 lg:pt-24 lg:text-4xl">
        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('financial-highlight.financial')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('financial-highlight.neraca')
        </p>
    </div>
    @if(App::isLocale('id'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/graph-2.png') }}" alt="Mark Dynamics Financial Highlight">
    @elseif(App::isLocale('en'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/graph-2-eng.png') }}" alt="Mark Dynamics Financial Highlight">
    @endif
</div>
@endsection

