@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-24">
    <img src="{{ asset('img/header-contact.png') }}" alt="Mark Dynamics Career">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-3xl sm:text-4xl font-bold text-center text-white top-1/2">Contact</div>
</div>

<div class="flex items-start lg:flex-nowrap flex-wrap w-full sm:mx-auto px-4 sm:px-6 lg:px-8 py-24 ">
    <div class="w-full lg:w-6/12">
        <div class="sm:mx-8">
            <div class="text-4xl font-bold">
                Contact Us
            </div>
            <span class="text-xs text-gray-800">Feel free to ask us anything, we’ll try our best to answer your question as fast as we could.</span>
            @livewire('web.kontak.form')
        </div>
    </div>

    <div class="w-full lg:w-6/12">
        <div class="p-10 sm:mx-8 rounded-xl space-y-12 bg-mark-default">
            <div class="text-2xl font-bold text-white">
                Our Information
            </div>
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <img class="w-6" src="{{ asset('icon/message.svg') }}" alt="Mark Dynamics Email">
                    <p class="font-semibold text-white flex-wrap">mdcps@nusa.net.id</p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-6" src="{{ asset('icon/fax.svg') }}" alt="Mark Dynamics Fax">
                    <p class="font-semibold text-white">(+62-61) 794-0747</p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-6" src="{{ asset('icon/phone.svg') }}" alt="Mark Dynamics Phone">
                    <p class="font-semibold text-white">(+62-61) 794-0715</p>
                </div>
                <div class="flex items-start gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                    <p class="font-semibold text-white">Jl. Pelita Barat No. 2, Medan Star Industrial Estate, <br>
                        Jl. Raya Medan Lubuk Pakam Km. 19,5 <br>
                        North Sumatera – 20362, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
