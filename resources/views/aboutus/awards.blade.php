@extends('layouts.master')

@section('content')
<div class="animate__animated animate__fadeInDown max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.awards')</h2>
    <p class="mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <p class="mx-auto mt-5 text-xl text-gray-500 max-w-prose text-center">
      Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
    </p>
    <div class="px-4 mx-auto my-12 divide-y lg:my-24 max-w-7xl sm:px-6 lg:px-8 divide-hitam">
        @forelse ($ac as $key => $item)
            @if ($key % 2 == 0)
                <div class="grid grid-cols-3 gap-8 pb-12 lg:pb-24 animate__animated animate__slideInLeft">
                    <div class="flex items-center justify-center col-span-1">
                        <img src="{{ asset($item->img) }}" alt="Mark Dynamics Awards">
                    </div>
                    <div class="col-span-2 my-auto space-y-3 align-middle">
                        <div class="text-2xl font-bold">{!! $item->title_id !!}</div>
                        <div class="italic font-bold text-gray-500 text-md">{!! $item->title_en !!}</div>
                        <div class="text-sm">{!! $item->description_id !!}</div>
                        <div class="text-sm italic text-right">{!! $item->description_en !!}</div>
                    </div>
                </div>
            @else
            <div class="grid grid-cols-3 gap-8 py-12 lg:py-24 wow animate__animated animate__slideInRight">
                <div class="col-span-2 my-auto space-y-3 align-middle">
                    <div class="text-2xl font-bold">{!! $item->title_id !!}</div>
                    <div class="italic font-bold text-gray-500 text-md">{!! $item->title_en !!}</div>
                    <div class="text-sm">{!! $item->description_id !!}</div>
                    <div class="text-sm italic text-right">{!! $item->description_en !!}</div>
                </div>
                <div class="flex items-center justify-center col-span-1">
                    <img src="{{ asset($item->img) }}" alt="Mark Dynamics Awards">
                </div>
            </div>
            @endif


        @empty

        @endforelse


    </div>
</div>
@endsection
