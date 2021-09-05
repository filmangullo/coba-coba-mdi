@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    @foreach ($dataEnv as $item)
        <h2 class="animate__fadeInDown animate__animated  text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.environment')</h2>
        <p class="animate__fadeInDown animate__animated  mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">

            @if(!empty($item))
                @if(App::isLocale('id'))
                    {!! $item->title_id !!}
                @elseif(App::isLocale('en'))
                    {!! $item->title_en !!}
                @elseif(App::isLocale('cn'))
                    {!! $item->title_cn !!}
                @endif
            @endif

        </p>
        <p class="mx-auto mt-5 text-lg text-center text-gray-500 animate__fadeInDown wow animate__animated">
            @if(!empty($item))
                @if(App::isLocale('id'))
                    {!! $item->description_id !!}
                @elseif(App::isLocale('en'))
                    {!! $item->description_en !!}
                @elseif(App::isLocale('cn'))
                    {!! $item->description_cn !!}
                @endif
            @endif
        </p>
        <div>
            @livewire('web.sustainability.environments', [
                'itemId'        => $item->id
            ])
        </div>
    @endforeach
</div>
@endsection
