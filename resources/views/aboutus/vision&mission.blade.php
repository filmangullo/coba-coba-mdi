@extends('layouts.master')

@section('content')
    <div class='pt-48 '>
        <div class="text-4xl font-bold text-center">Vision & Mission</div>
        <div class="my-24">
            <div class="relative w-full h-full">
                <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
                <img src="{{ asset('img/vision.png') }}" alt="">
                <div class="absolute top-0 w-full py-12 text-center">
                    <div class="mb-10 text-4xl font-bold text-mark-default">Vision</div>
                    <div class="text-sm font-semibold text-white">To sustain our lead in the global market of hand formers and deliver<br> economic value to our stakeholders.</div>
                </div>
            </div>
        </div>
        <div class="mb-24">
            <div class="relative w-full h-full">
                <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
                <img src="{{ asset('img/mission.png') }}" alt="">
                <div class="absolute top-0 w-full py-24 -mt-4 text-center">
                    <div class="mb-12 text-4xl font-bold text-mark-default">Mission</div>
                    <div class="space-y-24 text-sm font-semibold text-white">
                        <div class="grid grid-cols-2 mx-48">
                            <div class="mx-auto space-y-8 text-center">
                                <div class="relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">1</div>
                                </div>
                                <div>Striving to manufacture products of<br> the highest quality,</div>
                            </div>
                            <div class="mx-auto space-y-8 text-center">
                                <div class="relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">2</div>
                                </div>
                                <div>Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="mx-auto space-y-8 text-center">
                                <div class="relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">3</div>
                                </div>
                                <div>Striving to manufacture products of<br> the highest quality,</div>
                            </div>
                            <div class="mx-auto space-y-8 text-center">
                                <div class="relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
                                        <img src="{{ asset('img/circle.png') }}" alt="Mark Dynamics">
                                    </div>
                                    <div class="text-3xl text-mark-default">4</div>
                                </div>
                                <div>Committing to reduce production<br> costs in order to achieve efficiency,</div>
                            </div>
                            <div class="mx-auto space-y-8 text-center">
                                <div class="relative flex items-center justify-center w-full">
                                    <div class="absolute flex items-center justify-center w-full">
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
