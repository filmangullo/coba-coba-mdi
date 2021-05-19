@extends('layouts.master')

@section('content')
    <div class='pt-24 lg:pt-48 '>
        <div class="text-2xl pt-6 lg:pt-0 lg:text-4xl font-bold text-center">Vision & Mission</div>
        <div class="my-12 lg:my-24">
            <div class="relative w-full h-auto lg:h-full">
                <img class="absolute w-full h-full object-cover" src="{{ asset('img/vision.png') }}" alt="Mark Dynamics Vision">
                <div class="w-full transform text-center py-12">
                    <div class="mb-6 lg:mb-10 text-2xl lg:text-4xl font-bold text-mark-default">Vision</div>
                    <div class="mx-12 text-xs sm:text-sm lg:text-base font-semibold text-white">To sustain our lead in the global market of hand formers and deliver economic value to our stakeholders.</div>
                </div>
            </div>
        </div>
        <div class="mb-12 lg:mb-24">
            <div class="relative w-full h-auto lg:h-full">
                <img class="absolute h-full w-full object-cover" src="{{ asset('img/mission.png') }}" alt="Mark Dynamics Mission">
                <div class="w-full transform text-center py-12">
                    <div class="mb-12 text-2xl lg:text-4xl font-bold text-mark-default">Mission</div>
                    <div class="space-y-12 lg:space-y-24 text-sm font-semibold text-white">
                        <div class="lg:grid grid-cols-2 space-y-12 mx-12 lg:mx-48 lg:space-y-0">
                            <div class="mx-auto space-y-4 lg:space-y-8 text-center">
                                <div class="lg:scale-100 transform scale-75 relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">1</div>
                                </div>
                                <div class="text-xs sm:text-sm lg:text-base">Striving to manufacture products of<br> the highest quality,</div>
                            </div>
                            <div class="mx-auto space-y-4 lg:space-y-8 text-center">
                                <div class="lg:scale-100 transform scale-75 relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">2</div>
                                </div>
                                <div class="text-xs sm:text-sm lg:text-base">Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>
                        </div>
                        <div class="lg:grid grid-cols-3 space-y-12 lg:space-y-0">
                            <div class="mx-auto space-y-4 lg:space-y-8 text-center">
                                <div class="lg:scale-100 transform scale-75 relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">3</div>
                                </div>
                                <div class="text-xs sm:text-sm lg:text-base">Striving to manufacture products of<br> the highest quality,</div>
                            </div>
                            <div class="mx-auto space-y-4 lg:space-y-8 text-center">
                                <div class="lg:scale-100 transform scale-75 relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">4</div>
                                </div>
                                <div class="text-xs sm:text-sm lg:text-base">Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>
                            <div class="mx-auto space-y-4 lg:space-y-8 text-center">
                                <div class="lg:scale-100 transform scale-75 relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">5</div>
                                </div>
                                <div class="text-xs sm:text-sm lg:text-base">Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
