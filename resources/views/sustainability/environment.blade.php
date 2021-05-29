@extends('layouts.master')

@section('content')
<div class="px-4 pt-24 pb-12 lg:pt-48 lg:pb-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="pb-12 lg:pb-24 text-2xl lg:mb-0 -mb-2 lg:text-4xl font-bold text-center">Environment</div>
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-4">
        <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
            <img class="object-cover w-full rounded-md" src="{{ asset('img/envi-1.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md h-20 sm:h-28 w-full" src="{{ asset('img/envi-2.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div>
            <img class="object-cover rounded-md h-20 sm:h-28 w-full" src="{{ asset('img/envi-3.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div class="hidden sm:block">
            <img class="object-cover rounded-md h-28 w-full" src="{{ asset('img/envi-1.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div class="hidden sm:block">
            <img class="object-cover rounded-md h-28 w-full" src="{{ asset('img/envi-2.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div class="hidden lg:block">
            <img class="object-cover rounded-md h-28 w-full" src="{{ asset('img/envi-3.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        <div class="hidden lg:block">
            <img class="object-cover rounded-md h-28 w-full" src="{{ asset('img/envi-1.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
    </div>
</div>
@endsection