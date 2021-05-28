@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">News</div>
    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/audit-comittee.png') }}'>
</div>

<div class="pt-12">
    <div class="flex items-start flex-wrap md:flex-nowrap space-x-0 space-y-6 mb-6 md:space-y-0 md:space-x-8">
        <div class="w-full md:w-8/12">
            <div class="px-5 mx-3 shadow-md mb-7 py-2">
                <h1 class="pb-4 text-2xl font-bold text-justify">{{ $news->title_id }}</h1>
                <div class="grid grid-cols-2 mb-4">
                    <div class="py-1 text-left text-gray-500 items-left">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                        <span class="ml-2 text-xs font-semibold">{{ date("d M Y", strtotime($news->news_date)) }}</span>
                    </div>
                    <div class="content-end text-right text-gray-500 items-right">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/user.svg') }}">
                        <span class="m-2 text-xs font-semibold">{{ $news->authors['name'] }}</span>
                    </div>
                </div>
                <div class="py-1 text-justify">
                    {!! $news->content_id !!}
                </div>
            </div>
        </div>
        <div class="w-full md:w-4/12">
            <div class="px-4 mx-4 shadow-md py-2">
                <div class="text-lg xsm:text-xl py-4 font-bold text-center uppercase">Latest news list</div>
                @foreach ($list as $item)
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
@endsection
