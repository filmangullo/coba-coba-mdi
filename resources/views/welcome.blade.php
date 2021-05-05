@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-full">
    <div class="absolute left-0 right-0 z-20 w-full py-64 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">World’s Leading Hand-Former<br>Manufacturer</div>
        <div class="text-lg font-light">Serving 40% of global market share, we have been a<br>big player in helping the gloves industry.</div>
        <div class="px-6 py-1.5 cursor-pointer bg-transparent border font-semibold hover:bg-white hover:text-hitam transition-all duration-200 border-white rounded-full inline-block">Our Business</div>
    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
    <img class="w-full h-full" src='{{ asset('img/hero-1.png') }}'>
</div>

<div class="py-12 mt-24 mb-12 bg-mark-default">
    <div class="px-4 mx-auto text-white max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-12 text-4xl font-bold text-center">Our Products</div>
        <div class="flex content-between justify-center gap-40 text-center">
            <div>
                <img class="object-cover w-48 h-48 mb-6 rounded-full" src="{{ asset('img/our-products-1.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-xl font-bold">Hand Former</div>
            </div>
            <div>
                <img class="object-cover w-48 h-48 mb-6 rounded-full" src="{{ asset('img/our-products-2.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-xl font-bold">Sanitary Wares</div>
            </div>
            <div>
                <img class="object-cover w-48 h-48 mb-6 rounded-full" src="{{ asset('img/our-products-3.png') }}" alt="Mark Dynamics Hand Former">
                <div class="text-xl font-bold">Agriculture</div>
            </div>
        </div>
    </div>
</div>

<div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-4xl font-bold text-center text-mark-default">News & Updates</div>
    <div class="relative w-full h-full">
        <img class="w-full h-full" src="{{ asset('img/stock-price.png') }}" alt="Mark Dynamics Stock Price">
        <div class="absolute w-full text-3xl font-bold text-center text-white top-12">Stock Price</div>
    </div>
    <div class="grid grid-cols-2 gap-12 mt-12">
        <div class="relative w-full h-full">
            <img class="w-full h-full" src="{{ asset('img/news-1.png') }}" alt="Mark Dynamics News">
            <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
            <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                <div class="text-xl font-bold truncate">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-full">
            <img class="w-full h-full" src="{{ asset('img/news-1.png') }}" alt="Mark Dynamics News">
            <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
            <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                <div class="text-xl font-bold truncate">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-full">
            <img class="w-full h-full" src="{{ asset('img/news-2.png') }}" alt="Mark Dynamics News">
            <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
            <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                <div class="text-xl font-bold truncate">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-full">
            <img class="w-full h-full" src="{{ asset('img/news-2.png') }}" alt="Mark Dynamics News">
            <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
            <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                <div class="text-xl font-bold truncate">Porselen cetakan sarung tangan berkilap</div>
                <div class="text-base font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant faucibus pretium orci praesent. Mattis congue id mi nec turpis dictumst non...</div>
                <div>
                    <div class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <a class="mx-auto mt-12">
        <div class="px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">More News</div>
    </a>
=======
    <div class="mt-12 text-center">
        <a href="{{ route('news.list') }}   " class="px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">More News</a>
    </div>
>>>>>>> d00657513309156233b15e77e7f0774e9c412285
</div>

<div class="px-4 pt-12 pb-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-4xl font-bold text-center text-mark-default">Our Clients</div>
    <div class="grid content-between justify-center grid-cols-5 gap-32">
        <img class="w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
        <img class="w-full" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
    </div>
</div>

@endsection
