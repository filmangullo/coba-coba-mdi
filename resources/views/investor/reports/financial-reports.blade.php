@extends('layouts.master')

@section('content')
@php
    use App\Models\FinancialReport;
    use App\Models\FinancialReportYear;

    $report = FinancialReport::all();
    $year = FinancialReportYear::all();

        $reportdata = [];
        foreach($year as $y){
            foreach($report as $key => $r){
                if($y->id == $r->year_id){
                    $reportdata[$y->year][$key]['title_id'] = $r->title_id;
                    $reportdata[$y->year][$key]['title_en'] = $r->title_en;
                    $reportdata[$y->year][$key]['title_cn'] = $r->title_cn;
                    $reportdata[$y->year][$key]['file'] = $r->file;
                    $reportdata[$y->year][$key]['month'] = $r->month;
                }
            }
        }

        krsort($reportdata);
@endphp
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown text-center animate__animated mt-2 mb-12 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('financial-reports.title')</h2>
    {{-- <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p> --}}
    <div class="divide-y divide-hitam">
        @foreach($reportdata as $year => $r)
        <div class="space-y-24 py-24 @if($year%2 == 1) bg-gray-100 @endif">
            <div class="text-center">
                <div class="font-bold text-4xl">{{ $year }}</div>
                <div class="mx-auto bg-mark-default w-28 h-1"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($r as $sr)
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset( $sr['file'] ) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                        @if(App::isLocale('id'))
                        <div class="text-4xl font-bold text-white">{{ $sr['title_id'] }}</div>
                        @elseif(App::isLocale('en'))
                        <div class="text-4xl font-bold text-white">{{ $sr['title_en'] }}</div>
                        @elseif(App::isLocale('cn'))
                        <div class="text-4xl font-bold text-white">{{ $sr['title_cn'] }}</div>
                        @endif
                    </a>
                    <div class="text-lg font-bold">{{ date('F', strtotime($sr['month'])) }} {{ $year }}</div>
                </div>
            @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
