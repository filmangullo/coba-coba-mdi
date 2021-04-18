@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">Career</div>

    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/header-career.png') }}'>

</div>

<div class="container mx-auto">
    <div class="grid grid-cols-1 px-5 mt-20 mb-10 md:grid-cols-2">
        <div class="mx-12">
            <div class="text-2xl font-bold">
                Maintener Head
            </div>
            <span class="text-xs">Senin, 28 Januari 2020</span>
            <p class="my-5 text-justify">
                PT Mark Dynamics Indonesia Tbk membutuhkan seorang profesional untuk bergabung sebagai Maintenance Manager yang bertanggung jawab untuk memastikan instalasi, perbaikan, serta operasional seluruh mesin dan fasilitas perusahaan untuk mendukung operasional...
            </p>
            <a href="" class="px-5 py-2 my-4 font-semibold text-white rounded-md bg-mark hover:bg-bright">
            Read More
            </a>
        </div>
    </div>
</div>

<div class="text-center bg-mark">
    <div class="container py-20 mx-auto text-white">
        <h1 class="text-4xl font-bold">Interested in working with us?</h1>
        <p>Press the button below and fill the form to get the chance to work with us.</p>
        <div class="py-4">
            <a href="#"
                class="p-2 font-semibold border-2 border-white rounded-lg">
                Career Form
            </a>
        </div>
    </div>
</div>

@endsection
