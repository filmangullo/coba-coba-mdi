@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-screen">
    <div class="absolute z-20 w-full pt-16 mx-auto space-y-3 text-center text-white transform -translate-y-1/2 top-1/2 lg:pt-24 sm:space-y-6">
        <div class="text-xl font-bold sm:text-3xl lg:text-5xl">World’s Leading Hand-Former<br>Manufacturer</div>
        <div class="text-xs font-light sm:text-sm lg:text-lg">Serving 40% of global market share, we have been a<br>big player in helping the gloves industry.</div>
        <div class="text-xs lg:text-base px-6 py-1.5 cursor-pointer bg-transparent border font-semibold hover:bg-white hover:text-hitam transition-all duration-200 border-white rounded-full inline-block">Our Business</div>
    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
    <img class="object-cover w-full h-full" src='{{ asset('img/hero-1.png') }}'>
</div>

{{-- <div class="py-12 mt-24 mb-12 bg-mark-default">
    <div class="px-4 mx-auto text-white max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-12 text-2xl font-bold text-center lg:text-4xl">Our Products</div>
        <div class="flex content-between justify-center text-center sm:gap-28 lg:gap-40">
            <div>
                <img class="object-cover mx-auto mb-6 rounded-full sm:w-24 sm:h-24 lg:w-48 lg:h-48" src="{{ asset('img/our-products-1.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-lg font-bold lg:text-xl">Hand Former</div>
            </div>
            <div>
                <img class="object-cover mx-auto mb-6 rounded-full sm:w-24 sm:h-24 lg:w-48 lg:h-48" src="{{ asset('img/our-products-2.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-lg font-bold lg:text-xl">Sanitary Wares</div>
            </div>
            <div>
                <img class="object-cover mx-auto mb-6 rounded-full sm:w-24 sm:h-24 lg:w-48 lg:h-48" src="{{ asset('img/our-products-3.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-lg font-bold lg:text-xl">Agriculture</div>
            </div>
        </div>
    </div>
</div> --}}
<div class="py-12">
    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default">Our Products</div>
    <div class="items-start justify-center grid-cols-3 space-y-12 sm:grid lg:space-y-0">
        <div class="mx-auto">
            <div class="w-32 h-32 p-6 mx-auto border-4 rounded-full lg:w-52 lg:h-52 lg:p-10 border-mark">
                <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/agriculture.png') }}" alt="Mark Dynamics Agriculture">
            </div>
            <div class="mt-6 text-lg font-bold text-center text-mark-default lg:text-2xl">Agriculture</div>
        </div>
        <div class="mx-auto">
            <div class="w-32 h-32 p-6 mx-auto border-4 rounded-full lg:w-52 lg:h-52 lg:p-10 border-mark">
                <img class="-mt-4 transition-all duration-500 transform hover:scale-125 lg:-mt-7" src="{{ asset('img/handformer.png') }}" alt="Mark Dynamics Hand Former">
            </div>
            <div class="mt-6 text-lg font-bold text-center text-mark-default lg:text-2xl">Hand Former</div>
        </div>
        <div class="mx-auto">
            <div class="w-32 h-32 p-6 mx-auto border-4 rounded-full lg:w-52 lg:h-52 lg:p-10 border-mark">
                <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/toilet.png') }}" alt="Mark Dynamics Sanitary Wares">
            </div>
            <div class="mt-6 text-lg font-bold text-center text-mark-default lg:text-2xl">Sanitary Wares</div>
        </div>
    </div>
</div>

<div class="px-4 py-6 mx-auto sm:py-12 max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default">News & Updates</div>
    <div class="relative w-full h-full">
        @livewire('web.welcome.chart')
    </div>



    @livewire('web.welcome.short-list-news')
    <div class="inline-flex items-center flex-1 w-full mt-1.5 lg:mt-3">
        <a href="{{ route('news.list') }}" class="text-xs lg:text-base px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">
            More News
        </a>
    </div>
</div>


<div class="px-4 pt-12 pb-12 mx-auto sm:pb-24 max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default">Our Clients</div>
    <div class="grid content-between justify-center grid-cols-3 gap-12 md:grid-cols-5 md:gap-20 lg:gap-32">
        <img class="w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
        <img class="hidden w-full md:block" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
        <img class="hidden w-full md:block" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
    </div>
</div>

@endsection
