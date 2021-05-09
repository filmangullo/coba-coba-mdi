@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-auto relative pt-24">
    <img src="{{ asset('img/header-career.png') }}" alt="Mark Dynamics Career">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Career</div>
</div>

<div class="container mx-auto">
    <div class="grid grid-cols-1 px-5 mt-20 mb-10 md:grid-cols-2">
        <div>
            <div class="text-3xl font-bold truncate">
                Maintener Head
            </div>
            <span class="text-sm text-gray-500 font-semibold">Senin, 28 Januari 2020</span>
            <p class="my-5 text-justify">
                PT Mark Dynamics Indonesia Tbk membutuhkan seorang profesional untuk bergabung sebagai Maintenance Manager yang bertanggung jawab untuk memastikan instalasi, perbaikan, serta operasional seluruh mesin dan fasilitas perusahaan untuk mendukung operasional...
            </p>
            <a href="" class="px-5 py-2 my-4 font-semibold text-white rounded-md bg-mark hover:bg-bright">
            Read More
            </a>
        </div>
    </div>
</div>

<div class="text-center bg-mark-default">
    <div class="container py-12 mx-auto text-white">
        <h1 class="text-3xl mb-1 font-bold">Interested in working with us?</h1>
        <p>Press the button below and fill the form to get the chance to work with us.</p>
        <div class="pt-12">
            <a href="#"
                class="px-3 py-2 font-semibold text-sm border-2 border-white rounded-lg transition-all duration-300 hover:bg-white hover:text-mark-default">
                Career Form
            </a>
        </div>
    </div>
</div>

@endsection
