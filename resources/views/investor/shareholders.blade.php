@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('custom.shareholders')</h2>
    {{-- <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      Everything you need to deploy your app
    </p> --}}
    @if(App::isLocale('id'))
    <img class="mt-12 lg:mt-24" src="{{ asset('img/shareholders.png') }}" alt="Mark Dynamics Shareholders">
    @elseif(App::isLocale('en'))
    <img class="mt-12 lg:mt-24" src="{{ asset('img/shareholders.png') }}" alt="Mark Dynamics Shareholders">
    @elseif(App::isLocale('cn'))
    <img class="mt-12 lg:mt-24" src="{{ asset('img/shareholders-cn.png') }}" alt="Mark Dynamics Shareholders">
    @endif
    <div class="pt-12 lg:pt-24 space-y-12 text-left lg:space-y-24">
        <div class="space-y-3">
            <div class="font-bold lg:text-base sm:text-sm text-xs">@lang('shareholders.title-1')</div>
            @if(App::isLocale('id'))
            <img src="{{ asset('img/shareholders-table-1.png') }}" alt="Mark Dynamics Shareholders">
            @elseif(App::isLocale('en'))
            <img src="{{ asset('img/shareholders-table-1-eng.png') }}" alt="Mark Dynamics Shareholders">
            @elseif(App::isLocale('cn'))
            <img src="{{ asset('img/shareholders-table-1-cn.png') }}" alt="Mark Dynamics Shareholders">
            @endif
        </div>
        <div class="space-y-3">
            <div class="font-bold lg:text-base sm:text-sm text-xs">@lang('shareholders.title-2')</div>
            @if(App::isLocale('id'))
            <img src="{{ asset('img/shareholders-table-2.png') }}" alt="Mark Dynamics Shareholders">
            @elseif(App::isLocale('en'))
            <img src="{{ asset('img/shareholders-table-2-eng.png') }}" alt="Mark Dynamics Shareholders">
            @elseif(App::isLocale('cn'))
            <img src="{{ asset('img/shareholders-table-2-cn.png') }}" alt="Mark Dynamics Shareholders">
            @endif
        </div>
    </div>
</div>
@endsection
