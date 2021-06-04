@extends('layouts.master')

@section('content')
<div class="px-4 pt-48 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="text-4xl font-bold text-center">@lang('prospectus.title')</div>
    <div class="py-24 text-center">
        <div>@lang('prospectus.word')</div>
        <a href="{{ asset('prospektus-pt-mdi-2017.pdf') }}" download class="flex justify-center mt-12">
            <div class="inline-block px-5 py-2 font-semibold text-white rounded-sm cursor-pointer bg-mark-default hover:bg-mark-dark">@lang('prospectus.title')</div>
        </a>
    </div>
</div>
@endsection
