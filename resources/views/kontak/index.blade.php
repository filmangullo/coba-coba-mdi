@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-center animate__fadeInDown animate__animated text-mark-default sm:text-4xl">@lang('contact.title')</h2>
    {{-- <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 animate__fadeInDown animate__animated sm:text-4xl">
    Everything you need to deploy your app
    </p> --}}

    <div class="items-start w-full grid-cols-2 mt-12 space-y-6 border border-gray-300 lg:grid lg:space-y-0 rounded-xl">
        <div class="p-10 animate__fadeInLeft animate__animated">
            <div class="h-full">
                <div class="text-4xl font-bold">
                    @lang('contact.header')
                </div>
                <span class="text-xs text-gray-800">@lang('contact.sub-header')</span>
                @livewire('web.kontak.forms')
            </div>
        </div>
        <div class="h-full animate__fadeInRight animate__animated">
            <div class="h-full p-10 space-y-12 bg-mark-default rounded-r-xl">
                <div class="text-2xl font-bold text-white">
                    @lang('contact.our-information')
                </div>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <img class="w-6" src="{{ asset('icon/message.svg') }}" alt="Mark Dynamics Email">
                        <p class="flex-wrap font-semibold text-white">mdcps@nusa.net.id</p>
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                        <p class="font-semibold text-white">Jl. Utama Dusun I, Desa Dalu Sepuluh - A
                            Tanjung Morawa,<br> Deli Serdang, Sumatera Utara,
                            Indonesia – 20362</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
