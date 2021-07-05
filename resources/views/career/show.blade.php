@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <div>
        <div>
            <div class="">
                <div class="">
                    @if(App::isLocale('id'))
                    <h1 class="pb-4 lg:text-4xl text-2xl font-bold text-justify">{{ $career->job_position_id }}</h1>
                    @elseif(App::isLocale('en'))
                    <h1 class="pb-4 lg:text-4xl text-2xl font-bold text-justify">{{ $career->job_position_en }}</h1>
                    @endif
                    <div class="grid grid-cols-2 mb-4">
                        <div class="py-1 text-left text-gray-500 items-left">
                            <img class="inline-block w-5 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                            <span class="ml-2 text-xs font-semibold">{{ date("d M Y", strtotime($career->publish_date)) }}</span>
                        </div>
                        <div class="content-end text-right text-gray-500 items-right">
                            <img class="inline-block w-4 opacity-60" src="{{ asset('icon/user.svg') }}">
                            <span class="m-2 text-xs font-semibold">{{ $career->authors['name'] }}</span>
                        </div>
                    </div>
                    <div class="py-1 md:text-sm text-xs lg:text-base text-justify">
                        @if(App::isLocale('id'))
                        {!! $career->description_id !!}
                        @elseif(App::isLocale('en'))
                        {!! $career->description_en !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center bg-mark-default">
    <div class="container py-12 mx-auto text-white">
        <h1 class="mb-1 text-3xl font-bold">@lang('career.header')</h1>
        <p>@lang('career.sub-header')</p>
        <div class="pt-12">
            <a href="{{ route('career.form') }}"
                class="px-3 py-2 text-sm font-semibold transition-all duration-300 border-2 border-white rounded-lg hover:bg-white hover:text-mark-default">
                @lang('career.career-button')
            </a>
        </div>
    </div>
</div>
@endsection
