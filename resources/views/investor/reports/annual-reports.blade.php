@extends('layouts.master')

@section('content')
@php
    use App\Models\AnnualReport;

    $annual = AnnualReport::all();

        $annualdata = [];
        foreach($annual as $key => $r){
            $annualdata[$key]['title_id'] = $r->title_id;
            $annualdata[$key]['title_en'] = $r->title_en;
            $annualdata[$key]['title_cn'] = $r->title_cn;
            $annualdata[$key]['file'] = $r->file;
            $annualdata[$key]['img'] = $r->img;
        }

        rsort($annualdata);
@endphp
{{-- @dump($annualdata) --}}
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-24 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('annual-report.title')</h2>
    <div class="mt-24 w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
        @foreach($annualdata as $a)
            <a href="{{ asset($a['file']) }}" download class="text-center grid grid-cols-1 items-start w-full space-y-4 xsm:px-4 py-6 ">
                <img class="w-1/2 h-full mx-auto" src="{{ asset($a['img']) }}" alt="Mark Dynamics Annual 2019">
                @if(App::isLocale('id'))
                <div class="text-sm md:text-lg cursor-pointer font-bold text-center">{{ $a['title_id'] }}</div>
                @elseif(App::isLocale('en'))
                <div class="text-sm md:text-lg cursor-pointer font-bold text-center">{{ $a['title_en'] }}</div>
                @elseif(App::isLocale('cn'))
                <div class="text-sm md:text-lg cursor-pointer font-bold text-center">{{ $a['title_cn'] }}</div>
                @endif
            </a>
        @endforeach
        </div>
    </div>
</div>
@endsection

