@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">News</div>
    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/audit-comittee.png') }}'>
</div>

<div class="container pt-12 mx-auto">
    <div class="grid grid-cols-12">
        <div class="col-span-8">
            <div class="px-5 mx-3 shadow-md mb-7">
                <h1 class="pb-4 text-2xl font-bold text-justify">Saham Mark dinamic ditawar lebih mahal karena kualitas yang lebih agus</h1>
                <div class="grid grid-cols-2">
                    <div class="py-1 text-left text-gray-500 items-left">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/calendar-interface-symbol-tool.svg') }}">
                        <span class="ml-2 text-xs font-semibold">12 Jan 2021</span>
                    </div>
                    <div class="content-end text-right text-gray-500 items-right">
                        <img class="inline-block w-5 opacity-60" src="{{ asset('icon/user.svg') }}">
                        <span class="m-2 text-xs font-semibold">12 Jan 2021</span>
                    </div>
                </div>
                <div class="py-1 text-justify">
                    Consequat incididunt cupidatat quis quis duis ad laboris proident. Ea officia excepteur sit aliqua aliquip sint Lorem sunt. Ipsum non ea ullamco cupidatat ullamco occaecat quis in nisi dolore. Officia in laboris esse eu ad non minim commodo duis exercitation id dolor sunt. Labore excepteur veniam exercitation et ad elit anim magna labore enim ipsum. Ullamco culpa ad irure ex ea tempor amet ea voluptate fugiat cupidatat non. Laboris commodo pariatur sunt enim Lorem sit commodo minim.
                </div>
            </div>
        </div>
        <div class="col-span-4">
            <div class="mx-2 shadow-md">
                <div class="my-3 text-xl font-bold text-center uppercase">Latest news list</div>
                <div class="mb-2 text-justify">
                    <h5 class="font-semibold">Lorem Ipsum Terbaru</h5>
                    <p class="ml-1">Mollit voluptate aute adipisicing aliqua veniam irure et nisi quis laboris exercitation dolor eiusmod ut.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
