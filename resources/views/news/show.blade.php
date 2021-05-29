@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="w-full h-auto relative pt-12 lg:pt-24">
    <img src="{{ asset('img/audit-comittee.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-sm sm:text-2xl lg:text-4xl font-bold top-1/2 mt-5 h-full">News</div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
    <div class="lg:grid grid-cols-12 gap-6">
        <div class="col-span-8">
            <div class="mb-6">
                <h1 class="pb-4 text-lg lg:text-2xl font-bold text-justify">{{ $news->title_id }}</h1>
                <div class="grid grid-cols-2 mb-4">
                    <div class="py-1 text-left text-gray-500 items-left">
                        <img class="inline-block w-4 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                        <span class="ml-2 text-xs font-semibold">{{ date("d M Y", strtotime($news->news_date)) }}</span>
                    </div>
                    <div class="content-end text-right text-gray-500 items-right">
                        <img class="inline-block w-4 opacity-60" src="{{ asset('icon/user.svg') }}">
                        <span class="m-2 text-xs font-semibold">{{ $news->authors['name'] }}</span>
                    </div>
                </div>
                <div class="py-1 md:text-sm text-xs lg:text-base text-justify">
                    {!! $news->content_id !!}
                </div>
            </div>
        </div>
        <div class="w-full col-span-4">
            <div class="">
                <div class="text-lg xsm:text-xl pb-6 font-bold text-center uppercase">Latest news list</div>
                <div class="sm:grid smgrid-cols-2 lg:grid-cols-1 gap-6">
                    @foreach ($list as $item)
                    <div class="p-6 border border-gray-300 rounded-md mb-5 space-y-2">
                        <a href="{{ route('news.show', $item->slug )}}">
                            <h5 class="font-semibold cursor-pointer line-clamp-2">{{ $item->title_id }}</h5>
                        </a>
                        <p class="text-gray-600 text-sm">{{ Str::limit($item->brief_description_id, 100, '...') }}</p>
                        <div class="py-1 text-left text-gray-500 items-left">
                            <img class="inline-block w-4 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                            <span class="ml-2 text-xs font-semibold text-gray-500">{{ date("d M Y", strtotime($item->news_date)) }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
