@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('career.career-form')</h2>
    {{-- <p class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p> --}}

    <div class="pt-24 mx-auto">
        @livewire('web.career.apply')
    </div>
</div>

@endsection
