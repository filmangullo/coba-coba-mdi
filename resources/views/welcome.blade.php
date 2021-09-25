@extends('layouts.master')

@section('content')

@php
    use App\Models\Slider;

    $slider = Slider::all();

    $sliderdata = [];

    foreach($slider as $key => $s){
        $sliderdata[$key]['title_id'] = $s['title_id'];
        $sliderdata[$key]['title_en'] = $s['title_en'];
        $sliderdata[$key]['title_cn'] = $s['title_cn'];
        $sliderdata[$key]['description_id'] = $s['description_id'];
        $sliderdata[$key]['description_en'] = $s['description_en'];
        $sliderdata[$key]['description_cn'] = $s['description_cn'];
        $sliderdata[$key]['button_id'] = $s['button_id'];
        $sliderdata[$key]['button_en'] = $s['button_en'];
        $sliderdata[$key]['button_cn'] = $s['button_cn'];
        $sliderdata[$key]['button1_id'] = $s['button1_id'];
        $sliderdata[$key]['button1_en'] = $s['button1_en'];
        $sliderdata[$key]['button1_cn'] = $s['button1_cn'];
        $sliderdata[$key]['url'] = $s['url'];
        $sliderdata[$key]['url1'] = $s['url1'];
        $sliderdata[$key]['img'] = $s['file'];
        $sliderdata[$key]['imgwidth'] = $s['imgwidth'];
    }

@endphp
{{-- @dump($sliderdata) --}}
<div class="relative h-screen bg-gray-50 slider sm:h-auto">
    @foreach($sliderdata as $s)
    <main class="relative h-full">
      <div class="absolute z-10 w-screen h-screen bg-gray-50 bg-opacity-70 lg:hidden"></div>
      <div class="absolute z-20 w-full mx-auto mt-12 text-center transform -translate-y-1/2 lg:left-12 top-1/2 xl:max-w-7xl lg:text-left">
        <div class="px-4 animate__fadeInDown wow animate__animated lg:w-4/12 lg:pr-6 2xl:w-1/2 sm:px-8 xl:pr-16">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
            @if(App::isLocale('id'))
            <span class="block xl:inline">{{ $s['title_id'] }}</span>
            @elseif(App::isLocale('en'))
            <span class="block xl:inline">{{ $s['title_en'] }}</span>
            @elseif(App::isLocale('cn'))
            <span class="block xl:inline">{{ $s['title_cn'] }}</span>
            @endif
          </h1>
          <p class="max-w-md mx-auto mt-3 text-base text-gray-900 lg:mx-0 lg:text-gray-500 sm:text-lg md:mt-5 md:max-w-2xl">
            @if(App::isLocale('id'))
            {{ $s['description_id'] }}
            @elseif(App::isLocale('en'))
            {{ $s['description_en'] }}
            @elseif(App::isLocale('cn'))
            {{ $s['description_cn'] }}
            @endif
          </p>
          <div class="gap-3 mt-10 space-y-3 sm:flex sm:justify-center sm:space-y-0 lg:justify-start">
            {{-- Button 1 --}}
            @if(!empty($s['button_id']))
            <div class="rounded-md shadow">
              <a href="{{ $s['url'] }}" class="flex items-center justify-center w-full px-4 py-1.5 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-3 md:text-lg md:px-8">
                @if(App::isLocale('id'))
                {{ $s['button_id'] }}
                @elseif(App::isLocale('en'))
                {{ $s['button_en'] }}
                @elseif(App::isLocale('cn'))
                {{ $s['button_cn'] }}
                @endif
              </a>
            </div>
            @endif
            {{-- Button 2 --}}
            @if(!empty($s['button1_id']))
            <div class="rounded-md shadow">
                <a href="{{ $s['url1'] }}" class="flex items-center justify-center w-full px-4 py-1.5 text-base font-medium text-white border border-transparent rounded-md bg-mark-default hover:bg-mark-dark md:py-3 md:text-lg md:px-8">
                  @if(App::isLocale('id'))
                  {{ $s['button1_id'] }}
                  @elseif(App::isLocale('en'))
                  {{ $s['button1_en'] }}
                  @elseif(App::isLocale('cn'))
                  {{ $s['button1_cn'] }}
                  @endif
                </a>
            </div>
            @endif
          </div>
        </div>
      </div>
      <div class="absolute top-0 w-screen h-screen lg:inset-y-0 lg:right-0 @if($s['imgwidth'] == 'half') lg:w-1/2 @elseif($s['imgwidth'] == 'full') lg:w-full @endif lg:h-full">
        <img class="absolute inset-0 object-cover w-full h-full " src="{{ asset($s['img']) }}" alt="Mark Dynamics Indonesia">
      </div>
    </main>
    @endforeach
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

        <a href="{{ route('gallery') }}" class="block pt-6">
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
    <h2 class="text-base font-semibold tracking-wider uppercase animate__fadeInDown wow animate__animated "></h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-mark-default animate__fadeInDown wow animate__animated sm:text-4xl">
        @lang('custom.news')
    </p>
    @livewire('web.welcome.short-list-news')
</div>

<div class="bg-gray-100">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
      <p class="text-2xl font-semibold tracking-wider text-center uppercase text-mark-default">
        @lang('custom.client')
      </p>
      <div class="grid items-center justify-center grid-cols-4 gap-1 mt-6 owl-carousel md:grid-cols-4 lg:mt-12">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-1.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-2.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-3.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-4.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-5.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-6.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-7.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-8.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-9.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-10.png') }}" alt="Mark Dynamics Client">
          <img class="h-16 p-2 mx-auto transition-all duration-200 transform hover:scale-110" src="{{ asset('img/client-11.png') }}" alt="Mark Dynamics Client">
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
