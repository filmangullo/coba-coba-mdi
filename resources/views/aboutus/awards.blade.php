@extends('layouts.master')

@section('content')
    <div class="relative w-full h-auto pt-12 lg:pt-24">
        <img class="2xl:w-full" src="{{ asset('img/awards-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
        <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
        <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">Awards & Certificates</div>
    </div>
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
            <div class="grid grid-cols-3 gap-8 py-12 lg:py-24 animate__animated animate__slideInRight">
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

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    @endpush
@endsection
