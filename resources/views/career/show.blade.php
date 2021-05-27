@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-24">
    <img src="{{ asset('img/header-career.png') }}" alt="Mark Dynamics Career">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-4xl font-bold text-center text-white top-1/2">Career</div>
</div>

<div class="sm:container pt-12 sm:mx-auto sm:px-0 ">
    <div class="flex items-start lg:flex-nowrap flex-wrap">
        <div class="w-full md:w-8/12">
            <div class="px-5 mx-3 shadow-md mb-7">
                <h1 class="pb-4 text-2xl font-bold text-justify">{{ $career->job_position_id }}</h1>
                <div class="grid grid-cols-2 mb-4">
                    <div class="py-1 text-left text-gray-500 items-left">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                        <span class="ml-2 text-xs font-semibold">{{ date("d M Y", strtotime($career->publish_date)) }}</span>
                    </div>
                    <div class="content-end text-right text-gray-500 items-right">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/user.svg') }}">
                        <span class="m-2 text-xs font-semibold">{{ $career->authors['name'] }}</span>
                    </div>
                </div>
                <div class="py-1 text-justify">
                    {!! $career->description_id !!}
                </div>
            </div>
        </div>
        <div class="w-full md:w-4/12 mx-4 md:mx-0 mb-12 mt-8">
            <div class="md:ml-10 shadow-md md:mr-4">
                <div class="py-2 text-xl font-bold text-center uppercase">Latest news list</div>
                @foreach ($news as $item)
                <div class="px-4 mb-5 text-justify">
                    <a href="{{ route('news.show', $item->slug )}}">
                        <h5 class="font-semibold cursor-pointer">{{ $item->title_id }}</h5>
                    </a>
                    <p class="ml-5 text-gray-600">{{ Str::limit($item->brief_description_id, 50, '...') }}</p>
                    <div class="py-1 text-left text-gray-500 items-left">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                        <span class="ml-2 text-xs font-semibold">{{ date("d M Y", strtotime($item->news_date)) }}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<div class="text-center bg-mark-default">
    <div class="container py-12 mx-auto text-white">
        <h1 class="mb-1 text-3xl font-bold">Interested in working with us?</h1>
        <p>Press the button below and fill the form to get the chance to work with us.</p>
        <div class="pt-12">
            <a href="{{ route('career.form') }}"
                class="px-3 py-2 text-sm font-semibold transition-all duration-300 border-2 border-white rounded-lg hover:bg-white hover:text-mark-default">
                Career Form
            </a>
        </div>
    </div>
</div>
@endsection
