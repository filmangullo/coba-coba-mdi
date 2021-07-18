@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">@lang('board-members.board_members')</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        @lang('board-members.board_of_commisioner')
    </p>
    <div class="pt-24 mx-auto">

        <div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/chin-kien-ping.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Chin Kien Ping</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.president_commissioner')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_chin_kien_ping')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-12 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/dompak-pasaribu.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.independent_commissioner')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_dompak_pasaribu')
                </div>
            </div>
        </div>

        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('board-members.board_members')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('board-members.board_of_directors')
        </p>
        <div class="grid grid-cols-1 gap-4 my-12 lg:my-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/ridwan-goh.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Ridwan Goh</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.president_director')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_ridwan_goh')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/sutiyoso-bin-risman.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.direktur')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_sutiyoso_bin_risman')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/cahaya-dewi-surbakti.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.independent_director')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_cahaya_dewi_surbakti')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
