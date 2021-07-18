@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">@lang('organization-structure.organization-structure')</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p>

    <div class="mt-12 animate__fadeInUp animate__animated">
        <img class="mx-auto" src="{{ asset('img/Struktur-Perusahaan.png') }}" >
    </div>
</div>

@endsection
