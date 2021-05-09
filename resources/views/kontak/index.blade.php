@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-auto relative pt-24">
    <img src="{{ asset('img/header-contact.png') }}" alt="Mark Dynamics Contact Us">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Contact Us</div>
</div>

<div class="grid grid-cols-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:grid-cols-2">
    <div>
        <div class="mx-8">
            <div class="text-4xl font-bold">
                Contact Us
            </div>
            <span class="text-xs text-gray-800">Feel free to ask us anything, we’ll try our best to answer your question as fast as we could.</span>
            @livewire('web.kontak.form')
        </div>
    </div>

    <div>
        <div class="p-10 mx-8 rounded-xl space-y-12 bg-mark-default">
            <div class="text-2xl font-bold text-white">
                Our Information
            </div>
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <img class="w-6" src="{{ asset('icon/message.svg') }}" alt="Mark Dynamics Email">
                    <div class="font-semibold text-white">mdcps@nusa.net.idmdcps@nusa.net.id</div>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-6" src="{{ asset('icon/fax.svg') }}" alt="Mark Dynamics Fax">
                    <div class="font-semibold text-white">(+62-61) 794-0747</div>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-6" src="{{ asset('icon/phone.svg') }}" alt="Mark Dynamics Phone">
                    <div class="font-semibold text-white">(+62-61) 794-0715</div>
                </div>
                <div class="flex items-start gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                    <div class="font-semibold text-white">Jl. Pelita Barat No. 2, Medan Star Industrial Estate, <br>
                        Jl. Raya Medan Lubuk Pakam Km. 19,5 <br>
                        North Sumatera – 20362, Indonesia</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
