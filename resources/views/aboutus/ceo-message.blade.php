@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">@lang('ceo-message.ceo-message')</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      Everything you need to deploy your app
    </p>
    <div class="my-12 animate__animated animate__fadeInUp lg:my-24">
        <img class="w-4/6 sm:w-1/2 md:w-1/3  mx-auto rounded-full" src="{{ asset('img/ceo-message.jpg') }}" alt="Mark Dynamics Ceo Message">
    </div>
    <div class="relative w-full px-10 py-20 animate__fadeInUp animate__animated rounded-lg bg-mark-default sm:py-24 sm:px-16 md:px-40 lg:px-52">
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
