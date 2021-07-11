@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.csr')</h2>
    <p class="mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>

    <div>
        @livewire('web.sustainability.csrs')
    </div>
</div>

@endsection
