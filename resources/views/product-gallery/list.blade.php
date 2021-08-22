@extends('layouts.master')

@section('content')

<div class="bg-white">
    <div class="relative overflow-hidden">

            <!-- CTA Section -->
            <div class="relative bg-gray-900">
                <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                    <img class="object-cover w-full h-full"
                        src="{{asset('img/prod_gall.jpg')}}"
                        alt="">
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-600 mix-blend-multiply"></div>
                </div>
                <div
                    class="relative max-w-md px-4 py-12 mx-auto sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
                    <div class="md:ml-auto md:w-1/2 md:pl-10">
                        <p class="mt-2 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
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
    $(document).ready(function () {
        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 440,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
        });
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
