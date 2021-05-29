@extends('layouts.master')

@section('content')

<div class="pt-24">
    @livewire('web.product-gallery.list-product')

    @livewire('web.product-gallery.list-gallery')
</div>

@endsection
