@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">@lang('audit-committee.audit_committee')</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        @lang('audit-committee.audit_committee')
    </p>

    <div class="pt-24 mx-auto">
        <div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/dompak-pasaribu.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
                    <p class="italic font-semibold text-mark-default">@lang('audit-committee.independent_commissioner')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('audit-committee.about_dompak_pasaribu')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/daulat-sihombing.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Daulat Sihombing</h1>
                    <p class="italic font-semibold text-mark-default">@lang('audit-committee.members')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('audit-committee.about_daulat_sihombing')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-4 md:gap-4 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/septony-b.-siahaan.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Septony B. Siahaan</h1>
                    <p class="italic font-semibold text-mark-default">@lang('audit-committee.members')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('audit-committee.about_septony_b_siahaan')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
