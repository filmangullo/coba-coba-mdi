@extends('layouts.master')

@section('content')
<div class="relative h-screen bg-gray-50 slider sm:h-auto">


    <main class="relative h-full">
      <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
      <div class="absolute z-20 w-full mx-auto mt-12 text-center transform -translate-y-1/2 lg:left-12 top-1/2 xl:max-w-7xl lg:text-left">
        <div class="px-4 animate__fadeInDown wow animate__animated lg:w-2/5 lg:pr-6 2xl:w-1/2 sm:px-8 xl:pr-16">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">@lang('custom.home-title1')</span>
          </h1>
          <p class="max-w-md mx-auto mt-3 text-base text-gray-900 lg:text-gray-500 sm:text-lg md:mt-5 md:max-w-2xl">
            @lang('custom.home-subtitle1')
          </p>
          <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="{{ route('our-business') }}" class="flex items-center justify-center w-full px-4 py-1.5 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-3 md:text-lg md:px-8">
                @lang('custom.our-business')
              </a>
            </div>
            {{-- <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
              <a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-indigo-600 bg-white border border-transparent rounded-md hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                Live demo
              </a>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:h-full">
        <img class="absolute inset-0 object-cover w-full h-full " src="{{ asset('img/slider-1.jpg') }}" alt="Mark Dynamics Indonesia">
      </div>
    </main>

    <main class="relative" x-cloak>
        <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
        <div class="absolute z-20 w-full mx-auto mt-12 text-center transform -translate-y-1/2 lg:left-12 top-1/2 xl:max-w-7xl lg:text-left">
          <div class="px-4 animate__fadeInDown wow animate__animated lg:w-1/2 2xl:w-2/3 sm:px-8 xl:pr-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <div class="block xl:inline">@lang('custom.home-title2')</div>
            </h1>
            <p class="max-w-md mt-3 text-base text-gray-900 lg:text-gray-500 sm:text-lg md:mt-5 md:max-w-xl pr-8">
              @lang('custom.home-subtitle2')
            </p>
            <div class="gap-3 mt-10 space-y-3 sm:flex sm:justify-center sm:space-y-0 lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="{{ route('vision&mission') }}" class="flex items-center justify-center w-full px-4 py-1.5 text-sm font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-3 md:text-base md:px-8">
                    @lang('custom.vision-mission')
                  </a>
                </div>
                <div class="rounded-md shadow">
                  <a href="{{ route('ceo-message') }}" class="flex items-center justify-center w-full px-4 py-1.5 text-sm font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-3 md:text-base md:px-8">
                    @lang('custom.ceo-message')
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('img/slider-2e.png') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>

    <main class="relative" x-cloak>
        <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
        <div class="absolute z-20 w-full mx-auto mt-12 text-center transform -translate-y-1/2 lg:left-12 top-1/2 xl:max-w-7xl lg:text-left">
          <div class="px-4 wow animate__fadeInDown animate__animated lg:w-1/3 2xl:w-2/3 sm:px-8 xl:pr-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title3')</span>
            </h1>
            <p class="max-w-md mx-auto mt-3 text-base text-gray-900 lg:text-gray-500 sm:text-lg md:mt-5 md:max-w-2xl">
              @lang('custom.home-subtitle3')
            </p>
            <div class="gap-3 mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="{{ route('financial-highlight') }}" class="flex items-center justify-center w-full px-4 py-1.5 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-3 md:text-lg md:px-8">
                    @lang('custom.financial-highlight')
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('img/slider-3.jpg') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>

    <main class="relative" x-cloak>
        <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
        <div class="absolute z-20 w-full mx-auto mt-12 text-center transform -translate-y-1/2 lg:left-12 top-1/2 xl:max-w-7xl lg:text-left">
          <div class="px-4 wow animate__fadeInDown animate__animated lg:w-1/3 2xl:w-2/3 sm:px-8 xl:pr-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title4')</span>
            </h1>
            <p class="max-w-md mx-auto mt-3 text-base text-gray-900 lg:text-gray-500 sm:text-lg md:mt-5 md:max-w-2xl">
              @lang('custom.home-subtitle4')
            </p>
            <div class="gap-3 mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="{{ route('awards') }}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                    @lang('custom.awards')
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:w-full lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('img/slider-4.png') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>
</div>
<div class="relative py-16 bg-gray-100 sm:py-24 lg:py-32">
  <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-base font-semibold tracking-wider uppercase wow animate__fadeInDown animate__animated text-mark-default">@lang('custom.our-products')</h2>
    <div class="mt-12 animate__fadeInUp wow animate__animated">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <a href="https://agrodynamicsindo.com/" class="block pt-6">
          <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
            <div class="-mt-6">
              <div class="flex justify-center">
                  <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/agriculture.png') }}" alt="Mark Dynamics Agriculture">
              </div>
              <div>
                  <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.agriculture')</h3>
                  <p class="mt-5 text-base text-gray-500">
                    @lang('custom.agriculture-desc')
                  </p>
              </div>
            </div>
          </div>
        </a>

        <a href="{{ route('gallery') }}" class="pt-6 block">
          <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
            <div class="-mt-6">
              <div class="flex justify-center">
                  <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/handformer.png') }}" alt="Mark Dynamics Hand Former">
              </div>
              <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.hand-former')</h3>
              <p class="mt-5 text-base text-gray-500">
                @lang('custom.hand-former-desc')
              </p>
            </div>
          </div>
        </a>

        <a href="https://berjayadynamicsindonesia.web.indotrading.com/" class="block pt-6">
          <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
            <div class="grid content-between -mt-6">
              <div class="flex justify-center">
                  <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/toilet.png') }}" alt="Mark Dynamics Hand Former">
              </div>
              <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.sanitary')</h3>
              <p class="mt-5 text-base text-gray-500">
                @lang('custom.sanitary-desc')
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="px-4 py-12 mx-auto text-center max-w-7xl sm:px-6 lg:py-16 lg:px-8">
    {{-- <h2 class="text-base font-semibold tracking-wider uppercase animate__fadeInDown wow animate__animated text-mark-default">@lang('custom.stock_price')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 animate__fadeInDown wow animate__animated sm:text-4xl">
      Everything you need to deploy your app
    </p> --}}
    {{-- <div class="relative h-auto max-w-md px-4 mx-auto my-12 bg-white animate__fadeInUp wow animate__animated sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        @livewire('web.welcome.chart')
    </div> --}}
    <h2 class="text-base font-semibold tracking-wider uppercase animate__fadeInDown wow animate__animated text-mark-default">@lang('custom.news')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 animate__fadeInDown wow animate__animated sm:text-4xl">
      Everything you need to deploy your app
    </p>
    @livewire('web.welcome.short-list-news')
</div>

<div class="bg-hitam animate__fadeInUp wow animate__animated">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
      <p class="text-2xl font-semibold tracking-wider text-center uppercase text-green-500">
        @lang('custom.client')
      </p>
      <div class="grid items-center owl-carousel justify-center grid-cols-4 gap-1 mt-6 md:grid-cols-4 lg:mt-12">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-5.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-6.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-7.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-8.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-9.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-10.png') }}" alt="Mark Dynamics Client">
          <img class="mx-auto transition-all duration-200 transform h-16 p-2 hover:scale-110" src="{{ asset('img/client-11.png') }}" alt="Mark Dynamics Client">
      </div>
    </div>
</div>

@push('scripts')

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
    margin:0,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    autowidth:true,
    responsive:{
        0:{
            items:1,
            dots:false,
        },
        400:{
            items:2,
            dots:false,
        },
        // Ourclient
        600:{
            items:3,
            dots:true,
        },
        1000:{
            items:4,
            dots:true,
        }
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
    z-index:1000;
    }

    .slick-list, .slick-track {
        height:100vh;
    }

    .slick-prev {
    left: 25px;
    z-index: 1000;
    }

    .slick-next {
    right: 25px;
    z-index: 1000;
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
