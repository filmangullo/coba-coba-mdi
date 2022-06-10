@extends('layouts.master')

@section('content')

@php
    use App\Models\ShareholderInformation;

    $shareholder = ShareholderInformation::all();
@endphp

<div class="px-4 pt-32 pb-12 mx-auto text-center max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-center animate__fadeInDown animate__animated text-mark-default sm:text-4xl">@lang('custom.shareholders')</h2>
    @if(App::isLocale('id'))
    <img class="mx-auto mt-12 lg:mt-24" src="{{ asset('img/shareholders.png') }}" alt="Mark Dynamics Shareholders">
    @elseif(App::isLocale('en'))
    <img class="mx-auto mt-12 lg:mt-24" src="{{ asset('img/shareholders.png') }}" alt="Mark Dynamics Shareholders">
    @elseif(App::isLocale('cn'))
    <img class="mx-auto mt-12 lg:mt-24" src="{{ asset('img/shareholders-cn.png') }}" alt="Mark Dynamics Shareholders">
    @endif
    <div class="pt-6 mt-6 space-y-12 text-left border-t lg:pt-12 lg:mt-12 lg:space-y-24 border-hitam">
        <div>
            <div class="space-y-24">
                <div class="grid items-start w-full grid-cols-1 sm:grid-cols-2 md:grid-cols-4 ">
                @foreach($shareholder as $s)
                    <div class="w-full py-6 space-y-4 text-center xsm:px-4 ">
                        <a href="{{ $s->file }}" download class="flex items-center justify-center mx-auto rounded-full cursor-pointer w-28 h-28 bg-mark-default hover:bg-mark-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-white h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <div class="px-4 text-sm font-bold sm:text-lg">{{ json_decode($s->title, true)[App::currentLocale()] }}</div>
                        {{-- @if(App::isLocale('id'))
                        <div class="text-sm font-bold sm:text-lg">{{ $sp['title_id'] }}</div>
                        @elseif(App::isLocale('en'))
                        <div class="text-sm font-bold sm:text-lg">{{ $sp['title_en'] }}</div>
                        @elseif(App::isLocale('cn'))
                        <div class="text-sm font-bold sm:text-lg">{{ $sp['title_cn'] }}</div>
                        @endif --}}
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
