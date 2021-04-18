@extends('layouts.master')

@section('content')
    <div class=' pt-48'>
        <div class="text-4xl font-bold text-center">Vision & Mission</div>
        <div class="my-24">
            <div class="w-full h-full relative">
                <div class="bg-hitam bg-opacity-50 absolute w-full h-full"></div>
                <img src="{{ asset('img/vision.png') }}" alt="">
                <div class="absolute text-center w-full py-12 top-0">
                    <div class="text-mark-default font-bold text-4xl mb-10">Vision</div>
                    <div class="text-white text-sm font-semibold">To sustain our lead in the global market of hand formers and deliver<br> economic value to our stakeholders.</div>
                </div>
            </div>
        </div>
        <div class="mb-24">
            <div class="w-full h-full relative">
                <div class="bg-hitam bg-opacity-50 absolute w-full h-full"></div>
                <img src="{{ asset('img/mission.png') }}" alt="">
                <div class="absolute text-center w-full py-24 top-0 -mt-4">
                    <div class="text-mark-default font-bold text-4xl mb-12">Mission</div>
                    <div class="text-white text-sm font-semibold space-y-24">
                        <div class="grid grid-cols-2 mx-48">
                            <div class="text-center mx-auto space-y-8">
                                <div class="relative w-full flex items-center justify-center">
                                    <div class="absolute flex w-full items-center justify-center">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">1</div>
                                </div>
                                <div>Striving to manufacture products of<br> the highest quality,</div>
                            </div>
                            <div class="text-center mx-auto space-y-8">
                                <div class="relative w-full flex items-center justify-center">
                                    <div class="absolute flex w-full items-center justify-center">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">2</div>
                                </div>
                                <div>Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>                          
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="text-center mx-auto space-y-8">
                                <div class="relative w-full flex items-center justify-center">
                                    <div class="absolute flex w-full items-center justify-center">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">3</div>
                                </div>
                                <div>Striving to manufacture products of<br> the highest quality,</div>
                            </div>
                            <div class="text-center mx-auto space-y-8">
                                <div class="relative w-full flex items-center justify-center">
                                    <div class="absolute flex w-full items-center justify-center">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">4</div>
                                </div>
                                <div>Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>                          
                            <div class="text-center mx-auto space-y-8">
                                <div class="relative w-full flex items-center justify-center">
                                    <div class="absolute flex w-full items-center justify-center">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">5</div>
                                </div>
                                <div>Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection