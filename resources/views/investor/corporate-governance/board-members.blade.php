@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/board-member.png') }}" alt="Mark Dynamics Board Members">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('board-members.board_members')</div>
</div>

<div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="py-24 text-4xl font-bold text-center text-black">
        <h1>@lang('board-members.board_of_commisioner')</h1>
    </div>

    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3 wow animate__animated animate__bounceInDown">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/chin-kien-ping.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Chin Kien Ping</h1>
                <p class="italic font-semibold ">@lang('board-members.president_commissioner')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('board-members.about_chin_kien_ping')
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 px-12 mb-12 md:grid-flow-col md:grid-cols-3 wow animate__animated animate__bounceInDown">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/dompak-pasaribu.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
                <p class="italic font-semibold ">@lang('board-members.independent_commissioner')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('board-members.about_dompak_pasaribu')
            </div>
        </div>
    </div>
    <div class="py-24 text-4xl font-bold text-center text-black">
        <h1>@lang('board-members.board_of_directors')</h1>
    </div>
    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3 wow animate__animated animate__bounceInDown">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/ridwan-goh.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Ridwan Goh</h1>
                <p class="italic font-semibold ">@lang('board-members.president_director')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('board-members.about_ridwan_goh')
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3 wow animate__animated animate__bounceInDown">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/sutiyoso-bin-risman.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>
                <p class="italic font-semibold ">@lang('board-members.direktur')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('board-members.about_sutiyoso_bin_risman')
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3 wow animate__animated animate__bounceInDown">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/cahaya-dewi-surbakti.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>
                <p class="italic font-semibold ">@lang('board-members.independent_director')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('board-members.about_cahaya_dewi_surbakti')
            </div>
        </div>
    </div>
</div>
@endsection
