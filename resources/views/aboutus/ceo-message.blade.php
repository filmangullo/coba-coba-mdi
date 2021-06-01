@extends('layouts.master')

@section('content')
<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:pt-48">
    <div class="text-2xl font-bold text-center animate__animated animate__fadeInUp lg:text-4xl">@lang("ceo-message.ceo-message")</div>
    <div class="my-12 animate__animated animate__fadeInUp lg:my-24">
        <img class="w-1/3 mx-auto" src="{{ asset('img/ceo-message.png') }}" alt="Mark Dynamics Ceo Message">
    </div>
    <div class="relative w-full px-10 py-16 mb-12 rounded-md bg-mark-default sm:py-24 lg:mb-24 sm:px-16 md:px-40 lg:px-52">
        <div class="text-xs font-semibold text-justify text-white sm:text-sm lg:text-lg">
            @lang("ceo-message.message")
        </div>
        <div class="mt-12 text-xs font-semibold text-right text-white sm:text-sm lg:text-lg">
            @lang('ceo-message.january-2021')<br>
            @lang('ceo-message.president-director-CEO')<br>
            @lang('ceo-message.ridwan-goh')
        </div>
        <svg class="absolute w-10 top-6 left-6 lg:top-12 lg:left-12 sm:w-16 md:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 94"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"/></svg>
        <svg class="absolute w-10 transform rotate-180 bottom-6 right-6 lg:bottom-12 lg:right-12 sm:w-16 md:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 94"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"/></svg>    </div>
    </div>
</div>
@endsection
