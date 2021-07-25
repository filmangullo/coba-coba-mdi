@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="text-base font-semibold tracking-wider text-center uppercase animate__fadeInDown animate__animated text-mark-default">@lang('custom.csr')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 animate__fadeInDown animate__animated sm:text-4xl">
    Everything you need to deploy your app
    </p>

    <div>
        @livewire('web.sustainability.csrs')
    </div>
</div>

@endsection
