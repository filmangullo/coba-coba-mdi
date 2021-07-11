@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <div>
        <div class="lg:grid grid-cols-12 gap-12">
            <div class="col-span-8">
                <div class="mb-6 lg:mb-0">
                    @if(App::isLocale('id'))
                    <h1 class="pb-4 text-2xl lg:text-4xl font-bold">{{ $news->title_id }}</h1>
                    @elseif(App::isLocale('en'))
                    <h1 class="pb-4 text-2xl lg:text-4xl font-bold">{{ $news->title_en }}</h1>
                    @endif
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
                    <div class="py-1 lg:text-lg text-justify">
                        @if(App::isLocale('id'))
                        {!! $news->content_id !!}
                        @elseif(App::isLocale('en'))
                        {!! $news->content_en !!}
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full col-span-4">
                <div class="">
                    <div class="text-lg xsm:text-xl pb-6 font-bold text-center uppercase">@lang('custom.other-news')</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-3">
                        @foreach ($list as $item)
                        <a href="{{ route('news.show', $item->slug )}}">
                            <div class="p-6 border border-gray-300 rounded-xl space-y-2">
                                @if(App::isLocale('id'))
                                <h5 class="font-semibold cursor-pointer line-clamp-2">{{ $item->title_id }}</h5>
                                @elseif(App::isLocale('en'))
                                <h5 class="font-semibold cursor-pointer line-clamp-2">{{ $item->title_en }}</h5>
                                @endif
                                @if(App::isLocale('id'))
                                <p class="text-gray-600 text-sm">{{ Str::limit($item->brief_description_id, 100, '...') }}</p>
                                @elseif(App::isLocale('en'))
                                <p class="text-gray-600 text-sm">{{ Str::limit($item->brief_description_en, 100, '...') }}</p>
                                @endif
                                <div class="py-1 text-left text-gray-500 items-left">
                                    <img class="inline-block w-4 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                                    <span class="ml-2 text-xs font-semibold text-gray-500">{{ date("d M Y", strtotime($item->news_date)) }}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
