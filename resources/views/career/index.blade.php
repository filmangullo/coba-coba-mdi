@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-24">
    <img class="2xl:w-full" src="{{ asset('img/header-career.png') }}" alt="Mark Dynamics Career">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-3xl sm:text-4xl font-bold text-center text-white top-1/2">Career</div>
</div>

<div class="px-4 py-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="px-5 flex items-center flex-wrap -mx-4 -my-12">

        @foreach ($career as $item)
            <div class="space-y-6 w-full sm:w-6/12 xl:w-4/12 px-4 py-12">
                <div class="text-3xl font-bold">
                    <div class="truncate md:text-3xl text-2xl">
                        {{ $item->job_position_id}}
                    </div>
                    <div class="text-sm font-semibold text-gray-500">{{ date('D, d F Y', strtotime($item->publish_date))}}</div>
                </div>
                <p class="text-sm line-clamp-4">
                    <p>{{ Str::limit($item->brief_description_id, 200) }}</p>
                </p>
                <div>
                    <a href="{{ route('career.show', $item->slug) }}">
                        <div  class="inline-block px-5 py-2 text-xs font-semibold text-white rounded-md hover:bg-mark-dark bg-mark-default hover:bg-bright">
                            Read More
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>

<div class="text-center bg-mark-default">
    <div class="container py-12 mx-auto text-white sm:px-0 px-4">
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
