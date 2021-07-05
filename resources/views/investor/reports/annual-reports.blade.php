@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('annual-report.title')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p>
    <div class="mt-24 w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
        @php $data = ['annual-2020.png','annual-2019.png', 'annual-2018.png', 'annual-2017.png']; $year = ['2020','2019','2018','2017'];@endphp
        @foreach($data as $key => $val)
            @php
                if($key === 0){
                    $ar = 'ar-mark-2020.pdf';
                } elseif($key === 1){
                    $ar = 'ar-mark-2019.pdf';
                } elseif($key === 2){
                    $ar = 'ar-mark-2018.pdf';
                } elseif($key === 3){
                    $ar = 'ar-mark-2017.pdf';
                }
            @endphp
            <a href="{{ asset($ar) }}" download class="text-center grid grid-cols-1 items-start w-full space-y-4 xsm:px-4 py-6 ">
                <img class="w-1/2 h-full mx-auto" src="{{ asset('img/'.$val. '') }}" alt="Mark Dynamics Annual 2019">
                <div class="text-sm md:text-lg cursor-pointer font-bold text-center">Annual Report MARK {{$year[$key]}}</div>
            </a>
        @endforeach
        </div>
    </div>
</div>
@endsection

