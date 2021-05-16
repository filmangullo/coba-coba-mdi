@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-screen">
    <div class="absolute z-20 w-full mx-auto top-1/2 pt-16 lg:pt-24 transform -translate-y-1/2 space-y-3 sm:space-y-6 text-center text-white">
        <div class="text-xl sm:text-3xl lg:text-5xl font-bold">World’s Leading Hand-Former<br>Manufacturer</div>
        <div class="text-xs sm:text-sm lg:text-lg font-light">Serving 40% of global market share, we have been a<br>big player in helping the gloves industry.</div>
        <div class="text-xs lg:text-base px-6 py-1.5 cursor-pointer bg-transparent border font-semibold hover:bg-white hover:text-hitam transition-all duration-200 border-white rounded-full inline-block">Our Business</div>
    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
    <img class="w-full h-full object-cover" src='{{ asset('img/hero-1.png') }}'>
</div>

{{-- <div class="py-12 mt-24 mb-12 bg-mark-default">
    <div class="px-4 mx-auto text-white max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-12 text-2xl lg:text-4xl font-bold text-center">Our Products</div>
        <div class="flex content-between justify-center sm:gap-28 lg:gap-40 text-center">
            <div>
                <img class="object-cover sm:w-24 sm:h-24 lg:w-48 lg:h-48 mb-6 rounded-full mx-auto" src="{{ asset('img/our-products-1.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-lg lg:text-xl font-bold">Hand Former</div>
            </div>
            <div>
                <img class="object-cover sm:w-24 sm:h-24 lg:w-48 lg:h-48 mb-6 rounded-full mx-auto" src="{{ asset('img/our-products-2.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-lg lg:text-xl font-bold">Sanitary Wares</div>
            </div>
            <div>
                <img class="object-cover sm:w-24 sm:h-24 lg:w-48 lg:h-48 mb-6 rounded-full mx-auto" src="{{ asset('img/our-products-3.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-lg lg:text-xl font-bold">Agriculture</div>
            </div>
        </div>
    </div>
</div> --}}
<div class="py-12">
    <div class="mb-12 text-2xl lg:text-4xl font-bold text-center text-mark-default">Our Products</div>
    <div class="sm:grid grid-cols-3 space-y-12 lg:space-y-0 items-start justify-center">
        <div class="mx-auto">
            <div class="rounded-full mx-auto border-4 w-32 h-32 lg:w-52 lg:h-52 p-6 lg:p-10 border-mark">
                <img class="transform transition-all duration-500 hover:scale-125" src="{{ asset('img/agriculture.png') }}" alt="Mark Dynamics Agriculture">
            </div>
            <div class="text-center text-mark-default mt-6 text-lg lg:text-2xl font-bold">Agriculture</div>
        </div>
        <div class="mx-auto">
            <div class="rounded-full mx-auto border-4 w-32 h-32 lg:w-52 lg:h-52 p-6 lg:p-10 border-mark">
                <img class="transform transition-all duration-500 hover:scale-125 -mt-4 lg:-mt-7" src="{{ asset('img/handformer.png') }}" alt="Mark Dynamics Hand Former">
            </div>
            <div class="text-center text-mark-default mt-6 text-lg lg:text-2xl font-bold">Hand Former</div>
        </div>
        <div class="mx-auto">
            <div class="rounded-full mx-auto border-4 w-32 h-32 lg:w-52 lg:h-52 p-6 lg:p-10 border-mark">
                <img class="transform transition-all duration-500 hover:scale-125" src="{{ asset('img/toilet.png') }}" alt="Mark Dynamics Sanitary Wares">
            </div>
            <div class="text-center text-mark-default mt-6 text-lg lg:text-2xl font-bold">Sanitary Wares</div>
        </div>
    </div>
</div>

@livewire('web.welcome.short-list-news')

<div class="px-4 pt-12 pb-12 sm:pb-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-2xl lg:text-4xl font-bold text-center text-mark-default">Our Clients</div>
    <div class="grid content-between justify-center grid-cols-3 md:grid-cols-5 gap-12 md:gap-20 lg:gap-32">
        <img class="w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
        <img class="hidden md:block w-full" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
        <img class="hidden md:block w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
    </div>
</div>

@endsection
