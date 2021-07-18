@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">@lang('prospectus.title')</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        @lang('prospectus.title')
    </p>
    <p class="animate__fadeInDown animate__animated mx-auto mt-5 text-xl text-gray-500 max-w-prose">
        @lang('prospectus.word')
    </p>
    <a href="{{ asset('prospektus-pt-mdi-2017.pdf') }}" download class="animate__fadeInUp animate__animated flex justify-center mt-12">
        <div class="inline-block px-5 py-2 font-semibold text-white rounded-sm cursor-pointer bg-mark-default hover:bg-mark-dark">@lang('prospectus.title')</div>
    </a>
</div>
@endsection
