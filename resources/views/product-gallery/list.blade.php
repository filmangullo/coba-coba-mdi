@extends('layouts.master')

@section('content')

<div class="pt-24">
    @livewire('web.product-gallery.list-product')

    @livewire('web.product-gallery.list-gallery')
</div>


@push('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
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
    color: black;
    }
</style>
@endpush


@endsection
