@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="animate__fadeInDown animate__animated  text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.environment')</h2>
    <p class="animate__fadeInDown animate__animated  mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <div>
        @livewire('web.sustainability.environments')
    </div>
</div>
@endsection
