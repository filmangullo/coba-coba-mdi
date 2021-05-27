@extends('layouts.master')

@section('content')
<div class="grid w-full grid-cols-2">
@forelse ($news as $key => $item)
    @if ($key == 0)
    <div class="relative h-screen col-span-2">
        <div class="absolute z-10 space-y-6 bottom-12 left-16">
            <div class="pr-48 text-6xl font-bold text-white">{{ $item->title_id }}</div>
            <div class="text-lg text-justify text-white pr-96">{{ Str::limit($item->brief_description_id, 250, '...') }}</div>
            <div>
                <a href={{ route('news.show', $item->slug )}} class="bottom-0 inline-block px-3 py-2 font-bold text-white transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
        <img class="object-cover w-full h-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
    </div>
    @elseif($key == 5)
    <div class="relative col-span-2 h-80">
        <img class="object-cover w-full h-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
        <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
        <div class="absolute top-0 grid content-between w-7/12 h-full grid-cols-1 p-12 text-white">
            <div class="space-y-4">
                <div class="text-4xl font-bold line-clamp-2">{{ $item->title_id }}</div>
                <div class="text-base font-light">{{ Str::limit($item->brief_description_id, 250, '...') }}</div>
            </div>
            <div>
                <a href={{ route('news.show', $item->slug )}} class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    @else
    <div class="gap-12 px-4 py-12 rounded-md max-w-7xl sm:px-6 lg:px-8">
        <div class="relative w-full mx-auto overflow-hidden rounded-md h-72 ">
            <img class="w-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
            <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
            <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                <div class="text-xl font-bold truncate">{{ $item->title_id }}</div>
                <div class="text-base font-light">{{ Str::limit($item->brief_description_id, 175, '...') }}</div>
                <div>
                    <a href={{ route('news.show', $item->slug )}} class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
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

<div class="w-full px-16 py-12">
    {{ $news->links() }}
</div>
@endsection
