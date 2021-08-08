@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="text-base font-semibold tracking-wider text-center uppercase animate__fadeInDown animate__animated text-mark-default">@lang('custom.environment')</h2>

    @foreach ($dataEnv as $item)
        <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 animate__fadeInDown animate__animated sm:text-4xl">
            {!! !empty($item) ? (__('custom.lang') == 'id') ? $item->title_id : $item->title_en : '' !!}
        </h1>
        <p class="mt-3 font-medium">
            {!! !empty($item) ? (__('custom.lang') == 'id') ? $item->description_id : $item->description_en : '' !!}
        </p>
        <div>
            @livewire('web.sustainability.environments', [
                'itemId'        => $item->id
            ])
        </div>
    @endforeach

</div>
@endsection
