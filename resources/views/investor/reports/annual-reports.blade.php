@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-24">
    <img src="{{ asset('img/annual-report-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Annual Report</div>
</div>
<div class="my-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-4 justify-center items-start">
        <div class="space-y-6">
            <img class="w-1/2 h-full mx-auto" src="{{ asset('img/annual-2019.png') }}" alt="Mark Dynamics Annual 2019">
            <div class="text-lg cursor-pointer font-bold text-center">Annual Report MARK 2019</div>
        </div>
        <div class="space-y-6">
            <img class="w-1/2 h-full mx-auto" src="{{ asset('img/annual-2018.png') }}" alt="Mark Dynamics Annual 2018">
            <div class="text-lg cursor-pointer font-bold text-center">Annual Report MARK 2018</div>
        </div>
        <div class="space-y-6">
            <img class="w-1/2 h-full mx-auto" src="{{ asset('img/annual-2017.png') }}" alt="Mark Dynamics Annual 2017">
            <div class="text-lg cursor-pointer font-bold text-center">Annual Report MARK 2017</div>
        </div>
    </div>
</div>
@endsection