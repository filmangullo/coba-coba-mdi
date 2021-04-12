@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">Career</div>

    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/header-career.png') }}'>

</div>

<div class="grid grid-cols-1 px-5 mt-20 md:grid-cols-2">

</div>

@endsection
