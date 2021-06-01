@extends('layouts.master')

@section('content')
<div class="px-4 pt-24 pb-12 lg:pt-48 lg:pb-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <img src="{{ asset('img/shareholders.png') }}" alt="Mark Dynamics Shareholders">
    <div class="pt-12 lg:pt-24 space-y-12 lg:space-y-24">
        <div class="space-y-3">
            <div class="font-bold lg:text-base sm:text-sm text-xs">@lang('shareholders.title-1')</div>
            @if(App::isLocale('id'))
            <img src="{{ asset('img/shareholders-table-1.png') }}" alt="Mark Dynamics Shareholders">
            @elseif(App::isLocale('en'))
            <img src="{{ asset('img/shareholders-table-1-eng.png') }}" alt="Mark Dynamics Shareholders">
            @endif
        </div>
        <div class="space-y-3">
            <div class="font-bold lg:text-base sm:text-sm text-xs">@lang('shareholders.title-2')</div>
            @if(App::isLocale('id'))
            <img src="{{ asset('img/shareholders-table-2.png') }}" alt="Mark Dynamics Shareholders">
            @elseif(App::isLocale('en'))
            <img src="{{ asset('img/shareholders-table-2-eng.png') }}" alt="Mark Dynamics Shareholders">
            @endif
        </div>
    </div>
</div>
@endsection