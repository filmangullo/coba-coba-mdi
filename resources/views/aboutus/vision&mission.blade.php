@extends('layouts.master')

@section('content')
    <div class='pt-24 lg:pt-48 '>
        <div class="pt-6 text-2xl font-bold text-center lg:pt-0 lg:text-4xl">@lang('vision-mission-valuesvision.vision-mission')</div>
        <div class="my-12 lg:my-24">
            <div class="relative w-full h-auto lg:h-full">
                <img class="absolute object-cover w-full h-full" src="{{ asset('img/vision.png') }}" alt="Mark Dynamics Vision">
                <div class="w-full py-12 text-center transform">
                    <div class="mb-6 text-2xl font-bold lg:mb-10 lg:text-4xl text-mark-default">@lang('vision-mission-valuesvision.vision')</div>
                    <div class="mx-12 text-xs font-semibold text-white sm:text-sm lg:text-base">@lang('vision-mission-valuesvision.section-vision')</div>
                </div>
            </div>
        </div>
        <div class="mb-12 lg:mb-24">
            <div class="relative w-full h-auto lg:h-full">
                <img class="absolute object-cover w-full h-full" src="{{ asset('img/mission.png') }}" alt="Mark Dynamics Mission">
                <div class="w-full py-12 text-center transform">
                    <div class="mb-12 text-2xl font-bold lg:text-4xl text-mark-default">@lang('vision-mission-valuesvision.mission')</div>
                    <div class="space-y-12 text-sm font-semibold text-white lg:space-y-24">
                        <div class="grid-cols-2 mx-12 space-y-12 lg:grid lg:mx-48 lg:space-y-0">
                            <div class="mx-auto space-y-4 text-center lg:space-y-8">
                                <div class="relative flex items-center justify-center w-full transform scale-75 lg:scale-100">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">1</div>
                                </div>
                                <div class="px-4 text-xs sm:text-sm lg:text-base">@lang('vision-mission-valuesvision.section-mission-1')</div>
                            </div>
                            <div class="mx-auto space-y-4 text-center lg:space-y-8">
                                <div class="relative flex items-center justify-center w-full transform scale-75 lg:scale-100">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">2</div>
                                </div>
                                <div class="px-4 text-xs sm:text-sm lg:text-base">@lang('vision-mission-valuesvision.section-mission-2')</div>
                            </div>
                        </div>
                        <div class="grid-cols-3 space-y-12 lg:grid lg:space-y-0">
                            <div class="mx-auto space-y-4 text-center lg:space-y-8">
                                <div class="relative flex items-center justify-center w-full transform scale-75 lg:scale-100">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">3</div>
                                </div>
                                <div class="px-4 text-xs sm:text-sm lg:text-base">@lang('vision-mission-valuesvision.section-mission-3')</div>
                            </div>
                            <div class="mx-auto space-y-4 text-center lg:space-y-8">
                                <div class="relative flex items-center justify-center w-full transform scale-75 lg:scale-100">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">4</div>
                                </div>
                                <div class="px-4 text-xs sm:text-sm lg:text-base">@lang('vision-mission-valuesvision.section-mission-4')</div>
                            </div>
                            <div class="mx-auto space-y-4 text-center lg:space-y-8">
                                <div class="relative flex items-center justify-center w-full transform scale-75 lg:scale-100">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">5</div>
                                </div>
                                <div class="px-4 text-xs sm:text-sm lg:text-base">@lang('vision-mission-valuesvision.section-mission-5')</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
