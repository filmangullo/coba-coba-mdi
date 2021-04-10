@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-full relative">
    <div class="text-center text-white absolute right-0 left-0 my-auto mx-auto py-64 z-20 w-full space-y-6">
        <div class="text-5xl font-bold">World’s Leading Hand-Former<br>Manufacturer</div>
        <div class="text-lg font-light">Serving 40% of global market share, we have been a<br>big player in helping the gloves industry.</div>
        <div class="px-6 py-1.5 cursor-pointer bg-transparent border font-semibold hover:bg-white hover:text-hitam transition-all duration-200 border-white rounded-full inline-block">Our Business</div>
    </div>
    <div class="bg-hitam bg-opacity-50 w-full h-full absolute"></div>
    <img class="w-full h-full" src='{{ asset('img/hero-1.png') }}'>
</div>

<div class="mt-24 mb-12 py-12 bg-mark-default">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
        <div class="text-center font-bold text-4xl mb-12">Our Products</div>
        <div class="flex content-between gap-40 justify-center text-center">
            <div>
                <img class="object-cover rounded-full w-48 h-48 mb-6" src="{{ asset('img/our-products-1.png') }}" alt="Mark Dynamics Hand Former">
                <div class="font-bold text-xl">Hand Former</div>
            </div>
            <div>
                <img class="object-cover rounded-full w-48 h-48 mb-6" src="{{ asset('img/our-products-2.png') }}" alt="Mark Dynamics Hand Former">
                <div class="font-bold text-xl">Sanitary Wares</div>
            </div>
            <div>
                <img class="object-cover rounded-full w-48 h-48 mb-6" src="{{ asset('img/our-products-3.png') }}" alt="Mark Dynamics Hand Former">
                <div class="font-bold text-xl">Agriculture</div>
            </div>
        </div>
    </div>
</div>

<div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-mark-default mb-12 text-4xl text-center font-bold">News & Updates</div>  
    <div class="relative w-full h-full">
        <img class="w-full h-full" src="{{ asset('img/stock-price.png') }}" alt="Mark Dynamics Stock Price">
        <div class="absolute font-bold text-3xl top-12 text-center w-full text-white">Stock Price</div>
    </div>
    <div class="grid grid-cols-2 gap-12 mt-12">
        <div class="w-full h-full relative">
            <img class="w-full h-full" src="{{ asset('img/news-1.png') }}" alt="Mark Dynamics News">
            <div class="absolute w-full h-full top-0 rounded-md bg-hitam bg-opacity-50"></div>
            <div class="absolute w-full grid grid-cols-1 content-between h-full p-6 top-0 text-white">
                <div class="truncate text-xl font-bold">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="px-3 hover:bg-gray-50 hover:text-hitam transition-all duration-200 cursor-pointer py-2 bottom-0 font-bold inline-block rounded-md border border-white">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
        <div class="w-full h-full relative">
            <img class="w-full h-full" src="{{ asset('img/news-1.png') }}" alt="Mark Dynamics News">
            <div class="absolute w-full h-full top-0 rounded-md bg-hitam bg-opacity-50"></div>
            <div class="absolute w-full grid grid-cols-1 content-between h-full p-6 top-0 text-white">
                <div class="truncate text-xl font-bold">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="px-3 hover:bg-gray-50 hover:text-hitam transition-all duration-200 cursor-pointer py-2 bottom-0 font-bold inline-block rounded-md border border-white">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
        <div class="w-full h-full relative">
            <img class="w-full h-full" src="{{ asset('img/news-2.png') }}" alt="Mark Dynamics News">
            <div class="absolute w-full h-full top-0 rounded-md bg-hitam bg-opacity-50"></div>
            <div class="absolute w-full grid grid-cols-1 content-between h-full p-6 top-0 text-white">
                <div class="truncate text-xl font-bold">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="px-3 hover:bg-gray-50 hover:text-hitam transition-all duration-200 cursor-pointer py-2 bottom-0 font-bold inline-block rounded-md border border-white">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
        <div class="w-full h-full relative">
            <img class="w-full h-full" src="{{ asset('img/news-2.png') }}" alt="Mark Dynamics News">
            <div class="absolute w-full h-full top-0 rounded-md bg-hitam bg-opacity-50"></div>
            <div class="absolute w-full grid grid-cols-1 content-between h-full p-6 top-0 text-white">
                <div class="truncate text-xl font-bold">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="px-3 hover:bg-gray-50 hover:text-hitam transition-all duration-200 cursor-pointer py-2 bottom-0 font-bold inline-block rounded-md border border-white">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-12">
        <div class="px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">More News</div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-24">
    <div class="text-mark-default mb-12 text-4xl text-center font-bold">Our Clients</div>
    <div class="grid grid-cols-5 gap-32 justify-center content-between">
        <img class="w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
    </div>
</div>

@endsection