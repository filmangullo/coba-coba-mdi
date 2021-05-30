@extends('layouts.master')

@section('content')
<div class="relative w-full h-auto pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/csr-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">CSR</div>
</div>
<div class="px-4 py-6 mx-auto divide-y-2 divide-gray-200 lg:py-12 max-w-7xl sm:px-6 lg:px-8">
    @foreach ($csr as $item)
        <div class="py-6 lg:py-12">
            <div class="text-sm font-bold uppercase text-mark-default sm:text-xl lg:text-3xl">{{ $item->title_id }}</div>
            <div class="mt-1 text-xs italic font-bold text-gray-600 sm:mt-3 sm:text-sm lg:text-base uppecase">{{ $item->title_en }}</div>
            <div class="mt-6 text-xs tracking-wide lg:mt-12 lg:text-sm">{!! $item->description_id !!}</div>
            <div class="mt-6 text-xs italic tracking-wide text-right lg:mt-12 lg:text-sm">{!! $item->description_en !!}</div>
            <img class="object-cover h-48 mx-auto mt-6 sm:h-96 lg:h-screen lg:mt-12" src="{{ asset($item->img) }}" alt="Mark Dynamics CSR">
        </div>
    @endforeach


</div>
@endsection
