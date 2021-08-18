@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('custom.csr')</h2>
    {{-- <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 animate__fadeInDown animate__animated sm:text-4xl">
    Everything you need to deploy your app
    </p> --}}

    <div>
        @livewire('web.sustainability.csrs')
    </div>
</div>

@endsection
