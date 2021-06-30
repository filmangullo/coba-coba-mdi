@extends('layouts.master')

@section('content')
<div class="relative bg-gray-50 slider">


    <main class="lg:relative">
      <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
        <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">@lang('custom.home-title1')</span>
          </h1>
          <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
            @lang('custom.home-subtitle1')
          </p>
          <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="{{ route('our-business') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                @lang('custom.our-business')
              </a>
            </div>
            {{-- <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                Live demo
              </a>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Indonesia">
      </div>
    </main>

    <main class="lg:relative">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
          <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title2')</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
              @lang('custom.home-subtitle2')
            </p>
            <div class="mt-10 sm:flex sm:justify-center gap-3 lg:justify-start">
              <div class="rounded-md shadow">
                <a href="{{ route('vision&mission') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                  @lang('custom.vision-mission')
                </a>
              </div>
              <div class="rounded-md shadow">
                <a href="{{ route('ceo-message') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                  @lang('custom.ceo-message')
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('img/slider-2.png') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>

    <main class="lg:relative">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
          <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title3')</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
              @lang('custom.home-subtitle3')
            </p>
            <div class="mt-10 sm:flex sm:justify-center gap-3 lg:justify-start">
              <div class="rounded-md shadow">
                <a href="{{ route('financial-highlight') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                  @lang('custom.financial-highlight')
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('img/slider-3.jpg') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>

    <main class="lg:relative">
        <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
          <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title4')</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
              @lang('custom.home-subtitle4')
            </p>
            <div class="mt-10 sm:flex sm:justify-center gap-3 lg:justify-start">
              <div class="rounded-md shadow">
                <a href="{{ route('awards') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                  @lang('custom.awards')
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('img/slider-4.png') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>
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
    <div class="mb-6 text-2xl font-bold text-center lg:text-4xl text-mark-default wow animate__animated animate__fadeInDown">@lang('custom.our-products')</div>
    <div class="items-end justify-center grid-cols-3 space-y-12 sm:grid sm:space-y-0">
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

<div class="px-6 pb-6 mx-auto sm:pb-12 lg:pb-24 max-w-7xl xl:px-0">
    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default wow animate__animated animate__fadeInDown">@lang('custom.stock_price')</div>
    <div class="relative h-auto mb-12 bg-white max-w-7xl wow animate__animated animate__fadeInUp">
        @livewire('web.welcome.chart')
    </div>


    <div class="mb-12 text-2xl font-bold text-center lg:text-4xl text-mark-default wow animate__animated animate__fadeInDown">@lang('custom.news')</div>
    @livewire('web.welcome.short-list-news')
    <div class="inline-flex items-center flex-1 w-full mt-6 lg:mt-12">
        <a href="{{ route('news.list') }}" class="text-xs wow animate__animated animate__fadeInUp lg:text-base px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">
            @lang('custom.more-news')
        </a>
    </div>
</div>


<div class="w-3/6 px-4 pb-12 mx-auto sm:pb-24 sm:px-6 lg:px-24">
    <div class="mb-12 text-2xl font-bold text-center wow animate__animated animate__fadeInDown lg:text-4xl text-mark-default">@lang('custom.client')</div>
    <div class="justify-center owl-carousel owl-theme wow animate__animated animate__fadeIn">
        <div><img class="w-full transition-all duration-300 transform hover:scale-110" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client"></div>
        <div><img class="w-full transition-all duration-300 transform hover:scale-110" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client"></div>
        <div><img class="w-full transition-all duration-300 transform hover:scale-110" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client"></div>
        <div><img class="hidden w-full transition-all duration-300 transform hover:scale-110 md:block" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client"></div>
    </div>
</div>

@push('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script>
$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    mobileFirst:true,
  });
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:50,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:4,
            dots:true,
        },
        // Ourclient
        // 600:{
        //     items:5,
        //     dots:true,
        // },
        // 1000:{
        //     items:6,
        //     dots:true,
        // }
    }
});
});
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/css/owl.carousel.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/css/owl.theme.default.min.css')}}"/>
<style>
    .slick-prev:before,
    .slick-next:before {
    color: white;
    z-index:9999;
    }

    .slick-list, .slick-track {
        height:100vh;
    }

    .slick-prev {
    left: 25px;
    z-index: 9999;
    }

    .slick-next {
    right: 25px;
    z-index: 9999;
    }

    #tradingview_c56b2 {
    height: 610px !important;
    }

    .slider2 {
        display: none !important;
    }

    @media (min-width: 1024px){
        .slider2 {
            display: block !important;
        }

        .slider2-back {
            display: none !important;
        }
    }

    @media only screen and (max-width: 600px)  {
    #tradingview_c56b2 {
    height: 410px !important;
    }
    }

    @media only screen and (max-width: 450px)  {
    #tradingview_c56b2 {
    height: 330px !important;
    }
    }

</style>
@endpush

@endsection
