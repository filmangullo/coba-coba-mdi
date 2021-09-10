@extends('layouts.master')

@section('content')
<div class="pt-32">
    <h2 class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('career.title')</h2>
    {{-- <p class="ax-w-7xl px-4 sm:px-6 lg:px-8 mx-auto animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p> --}}

    <div class="px-4 sm:px-6 lg:px-8 mx-auto py-12 mt-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center justify-center mx-auto">

            @foreach ($career as $item)
                <div class="w-full rounded-md p-6 bg-white">
                    <div class="text-3xl font-bold mb-4">
                        <div class="lg:truncate md:text-3xl text-2xl">
                            {{ $item->job_position_id}}
                        </div>
                        <div class="text-sm font-semibold text-gray-500">{{ date('D, d F Y', strtotime($item->publish_date))}}</div>
                    </div>
                    <p class="text-sm line-clamp-4">
                        @if(App::isLocale('id'))
                        <p>{{ Str::limit($item->brief_description_id, 200) }}</p>
                        @elseif(App::isLocale('en'))
                        <p>{{ Str::limit($item->brief_description_en, 200) }}</p>
                        @endif
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
<div class="animate__fadeInUp animate__animated bottom-0  text-center bg-mark-default">
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
