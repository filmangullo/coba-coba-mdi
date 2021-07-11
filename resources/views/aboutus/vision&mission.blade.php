@extends('layouts.master')

@section('content')
    <div class='max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8'>
        <h2 class="text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.vision-mission')</h2>
        <p class="mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
        </p>
        <p class="mx-auto text-center mt-5 text-xl text-gray-500 max-w-prose">
          Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
        </p>
        <div class="p-6 mt-12 relative">
            <div class="h-52 md:h-96">
                <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('img/vision.png') }}" alt="Mark Dynamics Vision">
            </div>
            <div class="bg-mark-default rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 lg:mx-36 text-white">
                <div class="max-w-7xl mx-auto py-6 px-4 text-center sm:py-12 sm:px-6 lg:px-8">
                    <h2 class="text-2xl md:text-4xl font-extrabold">@lang('vision-mission-valuesvision.vision')</h2>
                    <p class="mt-6 text-xs md:text-sm lg:text-lg">@lang('vision-mission-valuesvision.section-vision')</p>
                </div>
            </div>

        </div>

        <div class="p-6 mt-12 relative">
            <div class="h-52 md:h-96">
                <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('img/mission.png') }}" alt="Mark Dynamics Mission">
            </div>
            <div class="bg-mark-default rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 text-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:py-12 sm:px-6 lg:px-8">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-center">@lang('vision-mission-valuesvision.mission')</h2>
                    <div class="mt-10 grid text-center grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">
                        <div>
                            <h3 class="text-xl md:text-2xl font-black">1</h3>
                            <p class="mt-2 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-1')
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-black">2</h3>
                            <p class="mt-2 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-2')
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-black">3</h3>
                            <p class="mt-2 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-3')
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-black">4</h3>
                            <p class="mt-2 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-4')
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-black">5</h3>
                            <p class="mt-2 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-5')
                            </p>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        {{-- <div class="bg-white">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:py-12 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-center text-mark-default">@lang('vision-mission-valuesvision.mission')</h2>
            <div class="mt-10 grid text-center grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">
                <div>
                    <h3 class="text-2xl font-black text-gray-900">1</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        @lang('vision-mission-valuesvision.section-mission-1')
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-900">2</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        @lang('vision-mission-valuesvision.section-mission-2')
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-900">3</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        @lang('vision-mission-valuesvision.section-mission-3')
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-900">4</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        @lang('vision-mission-valuesvision.section-mission-4')
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-gray-900">5</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        @lang('vision-mission-valuesvision.section-mission-5')
                    </p>
                </div>
            </div>
            </div>
        </div> --}}
    </div>
@endsection
