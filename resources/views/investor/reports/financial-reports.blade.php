@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/financial-report-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('financial-reports.title')</div>
</div>
<div class="sm:mx-auto px-4 sm:px-6 lg:px-8 divide-y divide-hitam">
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2021</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        
        @php $data = ['March']; @endphp
        <div class="flex w-full items-start  flex-wrap md:flex-nowrap  -my-6 ">
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $_2021 = 'fs-mark-1q21.pdf';
                }
            @endphp
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <a href="{{ asset($_2021) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </a>
                <div class="text-lg font-bold">{{$val}} 2020</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2020</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        
        @php $data = ['March', 'June', 'September', 'December']; @endphp
        <div class="flex w-full items-start  flex-wrap md:flex-nowrap  -my-6 ">
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $_2020 = 'fs-mark-1q20.pdf';
                } elseif($key === 1){
                    $_2020 = 'fs-mark-2q20.pdf';
                } elseif($key === 2){
                    $_2020 = 'fs-mark-3q20.pdf';
                } elseif($key === 3){
                    $_2020 = 'fs-mark-4q20.pdf';
                }
            @endphp
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <a href="{{ asset($_2020) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </a>
                <div class="text-lg font-bold">{{$val}} 2020</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2019</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data2 = ['March', 'June', 'September', 'December']; @endphp
        <div class="flex w-full items-start flex-wrap md:flex-nowrap  -my-6 ">
        @foreach($data2 as $key => $val)
            @php
                if($key === 0){
                    $_2019 = 'fs-mark-1q19.pdf';
                } elseif($key === 1){
                    $_2019 = 'fs-mark-2q19.pdf';
                } elseif($key === 2){
                    $_2019 = 'fs-mark-3q19.pdf';
                } elseif($key === 3){
                    $_2019 = 'fs-mark-4q19.pdf';
                }
            @endphp
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <a href="{{ asset($_2019) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </a>
                <div class="text-lg font-bold">{{$val}} 2019</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2018</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data3 = ['March', 'June', 'September', 'December']; @endphp
        <div class="flex w-full items-start flex-wrap md:flex-nowrap  -my-6 ">
        @foreach($data3 as $key => $val)
            @php
                if($key === 0){
                    $_2018 = 'fs-mark-1q18.pdf';
                } elseif($key === 1){
                    $_2018 = 'fs-mark-2q18.pdf';
                } elseif($key === 2){
                    $_2018 = 'fs-mark-3q18.pdf';
                } elseif($key === 3){
                    $_2018 = 'fs-mark-4q18.pdf';
                }
            @endphp
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <a href="{{ asset($_2018) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </a>
                <div class="text-lg font-bold">{{$val}} 2018</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2017</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data4 = ['June', 'September', 'December']; @endphp
        <div class="flex w-full items-start flex-wrap md:flex-nowrap  -my-6 ">
        @foreach($data4 as $key => $val)
            @php
                if($key === 0){
                    // return Storage::disk('public')->download(public_path('fs-mark-2q17.pdf'), 'FS Mark 2Q17.pdf');
                    $_2017 = 'fs-mark-2q17.pdf';
                } elseif($key === 1){
                    $_2017 = 'fs-mark-3q17.pdf';
                } elseif($key === 2){
                    $_2017 = 'fs-mark-4q17.pdf';
                }
            @endphp
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <a href="{{ asset($_2017) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+2}}</div>
                </a>
                <div class="text-lg font-bold">{{$val}} 2017</div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection