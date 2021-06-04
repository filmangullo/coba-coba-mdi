@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-24">
    <img class="2xl:w-full" src="{{ asset('img/annual-meeting-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-3xl sm:text-4xl font-bold top-1/2 mt-5 h-full">@lang('annual-meeting.title')</div>
</div>
<div class="w-full mx-auto px-4 sm:px-6 lg:px-8 divide-y divide-hitam">
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2021</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Annual General Meeting of Shareholders on MAY 2021 - Announcement to Shareholders', 'Annual General Meeting of Shareholders on MAY 2021 - Invitation to Shareholders']; @endphp
        <div class="flex w-full items-start  sm:justify-start justify-center  flex-wrap  -my-8 ">
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $am = 'Announcement-to-Shareholders-2021.pdf';
                } elseif($key === 1){
                    $am = 'Pemanggilan-RUPS-2021.pdf';
                }
            @endphp
            <div class="text-center sm:w-6/12 lg:w-3/12 space-y-6 xsm:px-4 py-8">
                <a href="{{ asset($am) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class="text-sm sm:text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2020</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Annual General Meeting of Shareholders on AUG 2020 - Announcement to Shareholders', 'Annual General Meeting of Shareholders on AUG 2020 - Invitation to Shareholders']; @endphp
        <div class="flex w-full items-start  sm:justify-start justify-center  flex-wrap  -my-8 ">
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $am = 'Announcement-Aug-2020.pdf';
                } elseif($key === 1){
                    $am = 'PEMANGGILAN-RUPS-MARK-2020.pdf';
                }
            @endphp
            <div class="text-center sm:w-6/12 lg:w-3/12 space-y-6 xsm:px-4 py-8">
                <a href="{{ asset($am) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class="text-sm sm:text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2019</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Annual General Meeting of Shareholders on MAY 2019 - Notice to Shareholders', 'Annual General Meeting of Shareholders on MAY 2019 - Invitation to Shareholders']; @endphp
        <div class="flex w-full items-start  sm:justify-start justify-center  flex-wrap  -my-8 ">
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $am = 'NOTICE-RUPS-2019.pdf';
                } elseif($key === 1){
                    $am = 'PEMANGGILAN-RUPS-MAY-EN-2019.pdf';
                }
            @endphp
            <div class="text-center sm:w-6/12 lg:w-3/12 space-y-4 xsm:px-4 py-8">
                <a href="{{ asset($am) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class="text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2018</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Annual General Meeting of Shareholders on APRIL 2018 - Invitation to Shareholders', 'Annual General Meeting of Shareholders on APRIL 2018 - Notice to Shareholders', 'Annual General Meeting of Shareholders on DECEMBER 2018 - Invitation to Shareholders', ]; @endphp
        <div class="flex w-full items-start sm:justify-start justify-center  flex-wrap -my-8 ">
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $am = 'panggilan-RUPSEng-768x2086.jpg';
                } elseif($key === 1){
                    $am = 'PEMBERITAHUAN-RUPSeng-724x1024.jpg';
                } elseif($key === 2){
                    $am = 'NOTICE-RUPS-2018.pdf';
                } elseif($key === 3){
                    $am = 'PEMANGGILAN-RUPS-EN-2018.pdf';
                }
            @endphp
            <div class="text-center  sm:w-6/12 lg:w-3/12 space-y-4 xsm:px-4 py-8">
                <a href="{{ asset($am) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class="text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection