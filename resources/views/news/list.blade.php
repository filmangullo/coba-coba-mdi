@extends('layouts.master')

@section('content')
<div class="w-full flex items-start flex-wrap ">
@forelse ($news as $key => $item)
    @if ($key == 0)
    <div class="relative h-screen w-full">
        <div class="absolute z-10 space-y-6 bottom-12 pl-8 xsm:pl-16 w-11/12">
            <div class=" text-4xl xsm:text-6xl font-bold text-white">{{ $item->title_id }}</div>
            <div class="text-lg text-justify text-white ">{{ Str::limit($item->brief_description_id, 250, '...') }}</div>
            <div>
                <a href="{{ route('news.show', $item->slug )}}" class="bottom-0 inline-block px-3 py-2 font-bold text-white transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
        <img class="object-cover w-full h-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
    </div>
    @elseif($key == 5)
    <div class="relative h-80">
        <img class="object-cover w-full h-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
        <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
        <div class="absolute top-0 content-between w-11/12 h-full  space-y-6 p-12 text-white">
            <div class="space-y-4">
                <div class="text-4xl font-bold line-clamp-2">{{ $item->title_id }}</div>
                <div class="text-base font-light">{{ Str::limit($item->brief_description_id, 250, '...') }}</div>
            </div>
            <div>
                <a href="{{ route('news.show', $item->slug )}}" class="absolute bottom-12 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white w-max-content rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    @else
    <div class="lg:container lg:mx-auto px-4 py-12 rounded-md  w-full xsm:w-6/12 sm:px-6 lg:px-8">
        <div class="relative w-full mx-auto overflow-hidden rounded-md h-72 ">
            <img class="w-full h-full object-cover" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
            <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
            <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                <div class="text-xl font-bold truncate">{{ $item->title_id }}</div>
                <div class="text-base font-light">{{ Str::limit($item->brief_description_id, 175, '...') }}</div>
                <div>
                    <a href="{{ route('news.show', $item->slug )}}" class="bottom-0 inline-block px-3 py-2 font-bold transition-all truncate duration-200 border border-white sm:text-lg xsm:text-sm text-md rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    @endif
@empty
<div class="relative w-full">

</div>
@endforelse
</div>

<div class="w-full space-x-8 py-12 px-4 sm:px-8">
    {{ $news->links() }}
</div>
@endsection
