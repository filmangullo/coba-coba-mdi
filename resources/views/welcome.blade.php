@extends('layouts.master')

@section('content')
<div class="relative h-screen bg-gray-50 slider sm:h-auto">


    <main class="relative">
      <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
      <div class="absolute z-20 w-full py-48 mx-auto text-center lg:static max-w-7xl lg:text-left">
        <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">@lang('custom.home-title1')</span>
          </h1>
          <p class="max-w-md mx-auto mt-3 text-lg text-gray-900 lg:text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
            @lang('custom.home-subtitle1')
          </p>
          <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="{{ route('our-business') }}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
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
      <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Indonesia">
      </div>
    </main>

    <main class="relative" x-cloak>
        <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
        <div class="absolute z-20 w-full py-48 mx-auto text-center lg:static max-w-7xl lg:text-left">
          <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title2')</span>
            </h1>
            <p class="max-w-md mx-auto mt-3 text-lg text-gray-900 lg:text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
              @lang('custom.home-subtitle2')
            </p>
            <div class="gap-3 mt-10 space-y-3 sm:flex sm:justify-center sm:space-y-0 lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="{{ route('vision&mission') }}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                    @lang('custom.vision-mission')
                  </a>
                </div>
                <div class="rounded-md shadow">
                  <a href="{{ route('ceo-message') }}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
                    @lang('custom.ceo-message')
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('img/slider-2.png') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>

    <main class="relative" x-cloak>
        <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
        <div class="absolute z-20 w-full py-48 mx-auto text-center lg:static max-w-7xl lg:text-left">
          <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title3')</span>
            </h1>
            <p class="max-w-md mx-auto mt-3 text-lg text-gray-900 lg:text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
              @lang('custom.home-subtitle3')
            </p>
            <div class="gap-3 mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="{{ route('financial-highlight') }}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-4 md:text-lg md:px-10">
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
        <div class="absolute z-20 w-full py-48 mx-auto text-center lg:static max-w-7xl lg:text-left">
          <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
              <span class="block xl:inline">@lang('custom.home-title4')</span>
            </h1>
            <p class="max-w-md mx-auto mt-3 text-lg text-gray-900 lg:text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
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
        <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('img/slider-4.png') }}" alt="Mark Dynamics Indonesia">
        </div>
    </main>
</div>
<div class="relative py-16 bg-gray-100 sm:py-24 lg:py-32">
  <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('custom.our-products')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      Everything you need to deploy your app
    </p>
    <p class="mx-auto mt-5 text-xl text-gray-500 max-w-prose">
      Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
    </p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
            <div class="-mt-6">
              <div class="flex justify-center">
                  <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/agriculture.png') }}" alt="Mark Dynamics Agriculture">
              </div>
              <div>
                  <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.agriculture')</h3>
                  <p class="mt-5 text-base text-gray-500">
                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                  </p>
              </div>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
            <div class="-mt-6">
              <div class="flex justify-center">
                  <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/handformer.png') }}" alt="Mark Dynamics Hand Former">
              </div>
              <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.hand-former')</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
            <div class="grid content-between -mt-6">
              <div class="flex justify-center">
                  <img class="transition-all duration-500 transform hover:scale-125" src="{{ asset('img/toilet.png') }}" alt="Mark Dynamics Hand Former">
              </div>
              <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.sanitary')</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 text-center">
    <h2 class="text-base font-semibold tracking-wider text-mark-default uppercase">@lang('custom.stock_price')</h2>
    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
      Everything you need to deploy your app
    </p>
    <div class="relative h-auto my-12 bg-white max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl mx-auto wow animate__animated animate__fadeInUp">
        @livewire('web.welcome.chart')
    </div>
    <h2 class="text-base font-semibold tracking-wider text-mark-default uppercase">@lang('custom.news')</h2>
    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
      Everything you need to deploy your app
    </p>
    @livewire('web.welcome.short-list-news')
    <div class="inline-flex items-center flex-1 w-full mt-6 lg:mt-12">
        <a href="{{ route('news.list') }}" class="text-xs wow animate__animated animate__fadeInUp lg:text-base px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-md inline-block">
            @lang('custom.more-news')
        </a>
    </div>
</div>

<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      <p class="text-center text-base font-semibold uppercase text-mark-default tracking-wider">
        @lang('custom.client')
      </p>
      <div class="mt-6 grid grid-cols-2 gap-1 md:grid-cols-4 lg:mt-8">
        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 border border-gray-300 rounded-md">
          <img class="max-h-12 transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
        </div>
        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 border border-gray-300 rounded-md">
          <img class="max-h-12 transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
        </div>
        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 border border-gray-300 rounded-md">
          <img class="max-h-12 transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
        </div>
        <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50 border border-gray-300 rounded-md">
          <img class="max-h-12 transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
        </div>
      </div>
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
