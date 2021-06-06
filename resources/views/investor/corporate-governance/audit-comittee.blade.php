@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="relative w-full h-auto pt-12 lg:pt-24">
    <img class="2xl:w-full" src="{{ asset('img/audit-comittee.png') }}" alt="Mark Dynamics Audit Comittee">
    <div class="absolute top-0 w-full h-full bg-opacity-50 bg-mark-default"></div>
    <div class="absolute w-full h-full mt-5 text-sm font-bold text-center text-white sm:text-2xl lg:text-4xl top-1/2">@lang('audit-committee.audit_committee')</div>
</div>

<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/dompak-pasaribu.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
                <p class="italic font-semibold ">@lang('audit-committee.independent_commissioner')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('audit-committee.about_dompak_pasaribu')
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/daulat-sihombing.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Daulat Sihombing</h1>
                <p class="italic font-semibold ">@lang('audit-committee.members')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('audit-committee.about_daulat_sihombing')
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 px-12 mb-24 md:grid-flow-col md:grid-cols-3">
        <div class="col-span-1 md:row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/septony-b.-siahaan.png') }}'>
        </div>
        <div class="col-span-2">
            <div class="col-span-1 mb-6 ml-5 md:col-span-4">
                <h1 class="text-2xl font-bold">Septony B. Siahaan</h1>
                <p class="italic font-semibold ">@lang('audit-committee.members')</p>
            </div>
            <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                @lang('audit-committee.about_septony_b_siahaan')
            </div>
        </div>
    </div>
</div>
@endsection
