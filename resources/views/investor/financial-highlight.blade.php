@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto text-center max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <div class="animate__fadeInDown animate__animated text-2xl font-bold text-mark-default lg:text-4xl">
        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('financial-highlight.financial')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('financial-highlight.kinerja')
        </p>
    </div>
    <div class="grid pt-12 sm:pt-24 md:pt-12 grid-cols-1 md:grid-cols-2 gap-12 sm:gap-24 md:gap-6 items-center justify-center">
        <div class="sm:px-24 md:p-12">
            @if(App::isLocale('id'))
            <img class="w-full h-full" src="{{ asset('img/graphic-1.png') }}" alt="Mark Dynamics Financial Highlight">
            @elseif(App::isLocale('en'))
            <img class="w-full h-full" src="{{ asset('img/graphic-1-en.png') }}" alt="Mark Dynamics Financial Highlight">
            @elseif(App::isLocale('cn'))
            <img class="w-full h-full" src="{{ asset('img/graphic-1-cn.png') }}" alt="Mark Dynamics Financial Highlight">
            @endif
        </div>
        <div class="sm:px-12 md:p-6">
            @if(App::isLocale('id'))
            <img class="w-full h-full" src="{{ asset('img/graphic-2.png') }}" alt="Mark Dynamics Financial Highlight">
            @elseif(App::isLocale('en'))
            <img class="w-full h-full" src="{{ asset('img/graphic-2-en.png') }}" alt="Mark Dynamics Financial Highlight">
            @elseif(App::isLocale('cn'))
            <img class="w-full h-full" src="{{ asset('img/graphic-2-cn.png') }}" alt="Mark Dynamics Financial Highlight">
            @endif
        </div>
    </div>
    <div class="pt-12 mb-5 text-2xl font-bold text-mark-default lg:pt-24 lg:text-4xl">
        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('financial-highlight.financial')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('financial-highlight.neraca')
        </p>
    </div>
    <div class="w-full pt-12 sm:pt-24 md:pt-12 pb-12 sm:pb-0 md:h-screen sm:p-10 md:p-20">
        @if(App::isLocale('id'))
        <img class="md:h-full mx-auto" src="{{ asset('img/graphic-3.png') }}" alt="Mark Dynamics Financial Highlight">
        @elseif(App::isLocale('en'))
        <img class="md:h-full mx-auto" src="{{ asset('img/graphic-3-en.png') }}" alt="Mark Dynamics Financial Highlight">
        @elseif(App::isLocale('cn'))
        <img class="md:h-full mx-auto" src="{{ asset('img/graphic-3-cn.png') }}" alt="Mark Dynamics Financial Highlight">
        @endif
    </div>
</div>
@endsection
