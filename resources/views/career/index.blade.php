@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-auto relative pt-24">
    <img src="{{ asset('img/header-career.png') }}" alt="Mark Dynamics Career">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Career</div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    <div class="grid grid-cols-1 gap-x-12 gap-y-24 px-5 md:grid-cols-2">
        <div class="space-y-6">
            <div class="text-3xl font-bold">
                <div class="truncate">
                    Maintenance Head
                </div>
                <div class="text-sm text-gray-500 font-semibold">Senin, 28 Januari 2020</div>
            </div>
            <p class="text-sm line-clamp-4">
                PT Mark Dynamics Indonesia Tbk membutuhkan seorang profesional untuk bergabung sebagai Maintenance Manager yang bertanggung jawab untuk memastikan instalasi, perbaikan, serta operasional seluruh mesin dan fasilitas perusahaan untuk mendukung operasional...
            </p>
            <div>
                <a href="">
                    <div  class="px-5 py-2 inline-block text-xs font-semibold text-white rounded-md hover:bg-mark-dark bg-mark-default hover:bg-bright">
                        Read More
                    </div>
                </a>
            </div>
        </div>
        <div class="space-y-6">
            <div class="text-3xl font-bold">
                <div class="truncate">
                    Maintenance Head
                </div>
                <div class="text-sm text-gray-500 font-semibold">Senin, 28 Januari 2020</div>
            </div>
            <p class="text-sm line-clamp-4">
                PT Mark Dynamics Indonesia Tbk membutuhkan seorang profesional untuk bergabung sebagai Maintenance Manager yang bertanggung jawab untuk memastikan instalasi, perbaikan, serta operasional seluruh mesin dan fasilitas perusahaan untuk mendukung operasional...
            </p>
            <div>
                <a href="">
                    <div  class="px-5 py-2 inline-block text-xs font-semibold text-white rounded-md hover:bg-mark-dark bg-mark-default hover:bg-bright">
                        Read More
                    </div>
                </a>
            </div>
        </div>
        <div class="space-y-6">
            <div class="text-3xl font-bold">
                <div class="truncate">
                    Maintenance Head
                </div>
                <div class="text-sm text-gray-500 font-semibold">Senin, 28 Januari 2020</div>
            </div>
            <p class="text-sm line-clamp-4">
                PT Mark Dynamics Indonesia Tbk membutuhkan seorang profesional untuk bergabung sebagai Maintenance Manager yang bertanggung jawab untuk memastikan instalasi, perbaikan, serta operasional seluruh mesin dan fasilitas perusahaan untuk mendukung operasional...
            </p>
            <div>
                <a href="">
                    <div  class="px-5 py-2 inline-block text-xs font-semibold text-white rounded-md hover:bg-mark-dark bg-mark-default hover:bg-bright">
                        Read More
                    </div>
                </a>
            </div>
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
