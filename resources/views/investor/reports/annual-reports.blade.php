@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-24">
    <img class="2xl:w-full" src="{{ asset('img/annual-report-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-3xl sm:text-4xl font-bold top-1/2 mt-5 h-full">Annual Report</div>
</div>
<div class="my-24 w-full mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-start md:flex-nowrap flex-wrap -mx-4 -my-6">
    @php $data = ['annual-2019.png', 'annual-2018.png', 'annual-2017.png']; $i = 9;@endphp
    @foreach($data as $key => $val)
        <div class="space-y-6 w-6/12 md:w-3/12 px-4 py-6">
            <img class="w-1/2 h-full mx-auto" src="{{ asset('img/'.$val. '') }}" alt="Mark Dynamics Annual 2019">
            <div class="text-sm md:text-lg cursor-pointer font-bold text-center">Annual Report MARK 201{{$i--}}</div>
        </div>
    @endforeach
    </div>
</div>
@endsection