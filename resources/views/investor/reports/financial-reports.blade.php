@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-24">
    <img class="2xl:w-full" src="{{ asset('img/financial-report-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-3xl sm:text-4xl font-bold top-1/2 mt-5 h-full">Financial Report</div>
</div>
<div class="sm:mx-auto px-4 sm:px-6 lg:px-8 divide-y divide-hitam">
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2020</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        
        @php $data = ['March', 'June', 'September']; @endphp
        <div class="flex w-full items-start  flex-wrap md:flex-nowrap  -my-6 ">
        @foreach($data as $key => $val)
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </div>
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
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </div>
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
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+1}}</div>
                </div>
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
            <div class="text-center w-full xsm:w-6/12 md:w-3/12 space-y-4 xsm:px-4 py-6 ">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <div class="text-4xl font-bold text-white">Q{{$key+2}}</div>
                </div>
                <div class="text-lg font-bold">{{$val}} 2017</div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection