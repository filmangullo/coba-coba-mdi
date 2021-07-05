@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-24 px-4 sm:px-6 pt-32 lg:px-8">
    <h2 class="text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('career.title')</h2>
    <p class="mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>

    <div class="pt-24">
        <div class="px-5 grid grid-cols-2 gap-12 items-center -mx-4">

            @foreach ($career as $item)
                <div class="w-full">
                    <div class="text-3xl font-bold mb-4">
                        <div class="truncate md:text-3xl text-2xl">
                            {{ $item->job_position_id}}
                        </div>
                        <div class="text-sm font-semibold text-gray-500">{{ date('D, d F Y', strtotime($item->publish_date))}}</div>
                    </div>
                    <p class="text-sm line-clamp-4">
                        <p>{{ Str::limit($item->brief_description_id, 200) }}</p>
                    </p>
                    <a class="block mt-10" href="{{ route('career.show', $item->slug) }}">
                        <div  class="inline-block px-5 py-2 text-xs font-semibold text-white rounded-md hover:bg-mark-dark bg-mark-default hover:bg-bright">
                            @lang('career.read')
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

</div>
<div class="text-center bg-mark-default">
    <div class="container py-12 mx-auto text-white sm:px-0 px-4">
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
