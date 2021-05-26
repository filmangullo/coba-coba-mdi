@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-24">
    <img src="{{ asset('img/header-career.png') }}" alt="Mark Dynamics Career">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full mt-5 text-4xl font-bold text-center text-white top-1/2">Career Form</div>
</div>

<div class="container pt-12 mx-auto">
    @livewire('web.career.apply')
</div>

@endsection
