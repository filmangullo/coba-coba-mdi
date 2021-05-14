@extends('layouts.master')

@section('content')

<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    @livewire('web.product-gallery.list-product')

    @livewire('web.product-gallery.list-gallery')
</div>

@endsection
