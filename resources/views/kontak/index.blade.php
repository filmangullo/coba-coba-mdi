@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">Contact Us</div>

    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/header-contact.png') }}'>

</div>

<div class="grid grid-cols-1 px-5 mt-20 md:grid-cols-2">
    <div>
        <div class="mx-8">
            <div class="text-5xl font-bold">
                Contact Us
            </div>
            <span class="text-xs text-gray-800">Feel free to ask us anything, we’ll try our best to answer your question as fast as we could.</span>
            @livewire('web.kontak.form')
        </div>
    </div>

    <div>
        <div class="p-10 mx-8 rounded-lg bg-mark">
            <div class="text-3xl font-bold text-white">
                Our Information
            </div>
            <div class="mt-4 ml-6 font-semibold text-white">
                Jl. Pelita Barat No. 2, Medan Star Industrial Estate, <br>
                Jl. Raya Medan Lubuk Pakam Km. 19,5 <br>
                North Sumatera – 20362, Indonesia
            </div>
        </div>
    </div>
</div>

@endsection
