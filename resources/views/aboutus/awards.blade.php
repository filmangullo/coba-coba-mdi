@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto animate__animated animate__fadeInDown max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="text-base font-semibold tracking-wider text-center uppercase text-mark-default">@lang('custom.awards')
    </h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p>
    <p class="mx-auto mt-5 text-xl text-center text-gray-500 max-w-prose">
        Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper
        malesuada. Eleifend condimentum id viverra nulla.
    </p>
    <div class="px-4 mx-auto divide-y lg:my-24 max-w-7xl sm:px-6 lg:px-8 divide-hitam">
        {{-- @forelse ($ac as $key => $item)
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

        @endforelse --}}
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-0 lg:py-2">
            <div class="space-y-2">
                <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-4 lg:gap-8">
                    @forelse ($ac as $key => $item)
                        <li class="px-1 py-10 text-center bg-white rounded-t-lg shadow-lg xl:px-1 xl:text-left">
                            <div x-data="{ tab: 'foo' }" class="h-96 animate__animated animate__backInUp">
                                <div x-show="tab === 'foo'" class="h-80">
                                    <div class="h-40 overflow-hidden">
                                    <img class="w-auto mx-auto rounded-t-md min-h-40"
                                        src="{{ asset($item->img) }}"
                                        alt="">
                                    </div>
                                    <div class="px-2 space-y-4">
                                        <div class="h-48 space-y-1 text-lg font-medium leading-6">
                                            <h3 class="font-bold text-blue-700">{!! $item->year !!}</h3>
                                            <p class="text-gray-700">{!! (__('custom.lang') == 'id') ? $item->title_id : $item->title_en!!}</p>
                                        </div>
                                    </div>
                                    <div class="px-2 space-y-4">
                                        <button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'"
                                            class="px-2 font-bold text-green-600 border-2 border-green-600 rounded-md text-1xl hover:bg-green-700 hover:text-white">+</button>
                                    </div>
                                </div>

                                <div x-show="tab === 'bar'" class="h-96 animate__animated animate__backInUp">
                                    <button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'"
                                            class="px-2 font-bold text-green-600 border-2 border-green-600 rounded-md text-1xl hover:bg-green-700 hover:text-white">-</button>
                                    <p>{!! (__('custom.lang') == 'id') ? $item->description_id : $item->description_en!!}</p>
                                </div>

                            </div>
                        </li>
                    @empty

                    @endforelse

                    <!-- More people... -->
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
