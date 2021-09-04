@extends('layouts.master')

@section('content')

<div class="bg-white">
    <div class="relative overflow-hidden">
        <main>
            <!-- CTA Section -->
            <div class="relative mt-20 bg-gray-800">
                <div class="relative bg-gray-100 sm:h-96 md:absolute md:left-0 md:h-full md:w-1/2">
                    <div class="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                        @foreach ($product as $item)
                        <div class="mx-2">
                            <img class="z-30 object-cover w-full h-full" src="{{asset($item->img)}}" alt="">
                        </div>
                        @endforeach


                    </div>

                </div>
                <div
                    class="max-w-md px-4 py-12 mx-auto sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-10 xl:py-25">
                    <div class="md:ml-auto md:w-1/2 md:pl-10">
                        <p class="pb-6 mt-2 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            @lang('product-gallery.high-quality')
                        </p>
                        <p class="mt-3 text-lg text-gray-300">
                            @lang('product-gallery.equipped_with')
                        </p>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>


<div class="pt-8">
    @livewire('web.product-gallery.list-product')

    @livewire('web.product-gallery.list-gallery')
</div>



@push('scripts')

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        arrows: false,
        autoplay: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css"
    href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<style>
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
</style>
@endpush


@endsection
