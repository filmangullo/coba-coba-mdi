@extends('layouts.master')

@section('content')
@php
    use App\Models\PublicExpose;
    use App\Models\PublicExposeYear;

    $public = PublicExpose::all();
    $year = PublicExposeYear::all();

        $publicdata = [];
        foreach($year as $y){
            foreach($public as $key => $p){
                if($y->id == $p->year_id){
                    $publicdata[$y->year][$key]['title_id'] = $p->title_id;
                    $publicdata[$y->year][$key]['title_en'] = $p->title_en;
                    $publicdata[$y->year][$key]['title_cn'] = $p->title_cn;
                    $publicdata[$y->year][$key]['file'] = $p->file;
                }
            }
        }

        krsort($publicdata);
@endphp
{{-- @dump($publicdata) --}}
<div class="max-w-7xl mx-auto px-4 sm:px-6 pt-32 lg:px-8 text-center">
    <h2 class="animate__fadeInDown text-center animate__animated mt-2 mb-12 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('public-expose.title')</h2>
    <div class="divide-y divide-hitam">
        @foreach($publicdata as $year => $p)
        <div class="space-y-24 py-24 @if($year%2 == 1) bg-gray-100 @endif">
            <div class="text-center">
                <div class="font-bold text-4xl">{{ $year }}</div>
                <div class="mx-auto bg-mark-default w-28 h-1"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($p as $sp)
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($sp['file']) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    @if(App::isLocale('id'))
                    <div class="text-sm sm:text-lg font-bold">{{ $sp['title_id'] }}</div>
                    @elseif(App::isLocale('en'))
                    <div class="text-sm sm:text-lg font-bold">{{ $sp['title_en'] }}</div>
                    @elseif(App::isLocale('cn'))
                    <div class="text-sm sm:text-lg font-bold">{{ $sp['title_cn'] }}</div>
                    @endif
                </div>
            @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
