@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-screen slider wow animate__animated animate__fadeInDown">
    <div class="relative w-full h-screen">
        <div class="absolute z-20 w-full pt-16 mx-auto space-y-3 text-center text-white transform -translate-y-1/2 top-1/2 lg:pt-24 sm:space-y-6">
            <div class="text-xl font-bold sm:text-3xl lg:text-5xl">@lang('custom.home-title1')</div>
            <div class="text-xs font-light sm:text-sm lg:text-lg">@lang('custom.home-subtitle1')</div>
            <a href="{{ route('our-business') }}" class="text-xs lg:text-base px-6 py-1.5 cursor-pointer bg-transparent border font-semibold hover:bg-white hover:text-hitam transition-all duration-200 border-white rounded-full inline-block">@lang('custom.our-business')</a>
        </div>
        <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
        <img class="object-cover w-full h-full" src='{{ asset('img/hero-1.png') }}'>
    </div>
    <div class="relative w-full h-screen">
        <div class="absolute z-20 w-full pt-16 mx-auto space-y-3 text-center text-white transform -translate-y-1/2 top-1/2 lg:pt-24 sm:space-y-6">
            <div class="text-xl font-bold sm:text-3xl lg:text-5xl">@lang('custom.home-title1')</div>
            <div class="text-xs font-light sm:text-sm lg:text-lg">@lang('custom.home-subtitle1')</div>
            <a href="{{ route('our-business') }}" class="text-xs lg:text-base px-6 py-1.5 cursor-pointer bg-transparent border font-semibold hover:bg-white hover:text-hitam transition-all duration-200 border-white rounded-full inline-block">@lang('custom.our-business')</a>
        </div>
        <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
        <img class="object-cover w-full h-full" src='{{ asset('img/hero-1.png') }}'>
    </div>
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
<div class="py-12 lg:py-24">
    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default wow animate__animated animate__fadeInDown">@lang('custom.our-products')</div>
    <div class="items-start justify-center grid-cols-3 space-y-12 sm:grid lg:space-y-0">
        <div class="mx-auto wow animate__animated animate__fadeInLeft">
            <div class="w-32 h-32 p-6 mx-auto border-4 rounded-full lg:w-52 lg:h-52 lg:p-10 border-mark">
                <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/agriculture.png') }}" alt="Mark Dynamics Agriculture">
            </div>
            <div class="mt-6 text-lg font-bold text-center text-mark-default lg:text-2xl">@lang('custom.agriculture')</div>
        </div>
        <div class="mx-auto wow animate__animated animate__fadeInUp">
            <div class="w-32 h-32 p-6 mx-auto border-4 rounded-full lg:w-52 lg:h-52 lg:p-10 border-mark">
                <img class="-mt-4 transition-all duration-500 transform hover:scale-125 lg:-mt-7" src="{{ asset('img/handformer.png') }}" alt="Mark Dynamics Hand Former">
            </div>
            <div class="mt-6 text-lg font-bold text-center text-mark-default lg:text-2xl">@lang('custom.hand-former')</div>
        </div>
        <div class="mx-auto wow animate__animated animate__fadeInRight">
            <div class="w-32 h-32 p-6 mx-auto border-4 rounded-full lg:w-52 lg:h-52 lg:p-10 border-mark">
                <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/toilet.png') }}" alt="Mark Dynamics Sanitary Wares">
            </div>
            <div class="mt-6 text-lg font-bold text-center text-mark-default lg:text-2xl">@lang('custom.sanitary')</div>
        </div>
    </div>
</div>

<div class="px-4 pb-6 mx-auto sm:pb-12 lg:pb-24 max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default wow animate__animated animate__fadeInDown">@lang('custom.news')</div>
    <div class="relative w-full h-full bg-chart-default wow animate__animated animate__fadeInUp">
        @livewire('web.welcome.chart')
    </div>



    @livewire('web.welcome.short-list-news')
    <div class="inline-flex items-center flex-1 w-full mt-6 lg:mt-12">
        <a href="{{ route('news.list') }}" class="text-xs wow animate__animated animate__fadeInUp lg:text-base px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">
            @lang('custom.more-news')
        </a>
    </div>
</div>


<div class="px-4 pb-12 mx-auto sm:pb-24 max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-2xl font-bold text-center wow animate__animated animate__fadeInDown lg:text-4xl text-mark-default">@lang('custom.client')</div>
    <div class="grid content-between justify-center grid-cols-3 gap-12 md:grid-cols-5 md:gap-20 lg:gap-32">
        <img class="w-full transition-all duration-300 transform hover:scale-110 wow animate__animated animate__fadeIn" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
        <img class="w-full transition-all duration-300 transform hover:scale-110 wow animate__animated animate__fadeIn" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
        <img class="w-full transition-all duration-300 transform hover:scale-110 wow animate__animated animate__fadeIn" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
        <img class="hidden w-full transition-all duration-300 transform hover:scale-110 md:block wow animate__animated animate__fadeIn" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
        <img class="hidden w-full transition-all duration-300 transform hover:scale-110 md:block wow animate__animated animate__fadeIn" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
    </div>
</div>

@push('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
});
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<style>
    .slick-prev:before,
    .slick-next:before {
    color: white;
    z-index:9999;
    font-family: 'slick';
    font-size: 40px;
    line-height: 1;

    opacity: .75;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
    left: 50px;
    z-index: 9999;
    height:40px;
    width:40px;
    }

    .slick-next {
    right: 50px;
    z-index: 9999;
    height:40px;
    width:40px;
    }
</style>
@endpush

@endsection
