@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/annual-report-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('annual-report.title')</div>
</div>
<div class="my-24 w-full mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-start md:flex-nowrap flex-wrap -mx-4 -my-6">
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
        <a href="{{ asset($ar) }}" download class="block space-y-6 w-6/12 md:w-3/12 px-4 py-6">
            <img class="w-1/2 h-full mx-auto" src="{{ asset('img/'.$val. '') }}" alt="Mark Dynamics Annual 2019">
            <div class="text-sm md:text-lg cursor-pointer font-bold text-center">Annual Report MARK {{$year[$key]}}</div>
        </a>
    @endforeach
    </div>
</div>
@endsection