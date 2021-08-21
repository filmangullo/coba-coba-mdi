@extends('layouts.master')

@section('content')
    <div class='max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8'>
        <h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('custom.vision-mission')</h2>
        {{-- <p class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
        </p>
        <p class="animate__fadeInDown animate__animated mx-auto text-center mt-5 text-xl text-gray-500 max-w-prose">
          Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
        </p> --}}
        <div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
            <div class="h-52 md:h-96">
                <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('img/vision.png') }}" alt="Mark Dynamics Vision">
            </div>
            <div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 lg:mx-36 text-black">
                <div class="max-w-7xl mx-auto py-6 px-4 text-center sm:py-12 sm:px-6 lg:px-8">
                    <h2 class="text-2xl md:text-4xl font-extrabold">@lang('vision-mission-valuesvision.vision')</h2>
                    <p class="mt-6 text-xs md:text-sm lg:text-lg">@lang('vision-mission-valuesvision.section-vision')</p>
                </div>
            </div>

        </div>

        <div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
            <div class="h-52 md:h-96">
                <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('img/mission.png') }}" alt="Mark Dynamics Mission">
            </div>
            <div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 text-black">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:py-12 sm:px-6 lg:px-8">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-center">@lang('vision-mission-valuesvision.mission')</h2>
                    <div class="mt-10 grid text-center grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">
                        <div>
                            <svg class="h-8 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 477.62"><path d="M472.3 248.21V15.06A15.06 15.06 0 00457.24 0H53.72a15.06 15.06 0 00-15.06 15.06v251.75A45.69 45.69 0 0018 275.34c-19.8 14.05-24.49 45.47-7.9 64.87l67.84 82.24c42 49.15 86.6 55.17 152.92 55.17 56.91 0 82.35.25 132-11.05l48.29-11.55a42.16 42.16 0 0034.24 18h23.79c23.64 0 42.87-20.26 42.87-45.16V293.24c-.05-23.78-17.59-43.31-39.75-45.03zm-67.7 31l-20.06-10.2a119.35 119.35 0 00-104.66-1.69c-9.15 3.6-29.09 15.67-39.44 15.26h-69.63a41.94 41.94 0 00-41.89 41.89v11c-.13-.14-.27-.27-.39-.41l-49.73-54a46 46 0 00-10-8.2V123.45H192v55.21a15.07 15.07 0 0015.07 15.06h95a15.06 15.06 0 0015.06-15.06v-55.21h125v124.76c-17.6 1.36-32.27 14-37.58 31zM222.16 123.45h64.91v40.15h-64.91zm220-30.12h-125V30.12h125v63.21zM287.07 30.12v63.21h-64.91V30.12zm-95 0v63.21H68.78V30.12zm163.75 407.15c-45.82 10.54-73.41 10.07-124.42 10.07-62.25 0-92.33-1-130.22-44.06l-67.84-82.24c-11.8-15.37 9.57-33.5 23.3-19.57l49.73 54c13.14 13.87 29.68 21.5 50.07 21.95H294.3a15.06 15.06 0 100-30.12H159v-22.84a11.78 11.78 0 0111.77-11.77h69.63c15.69 1.13 38.33-12 52.14-18.06a89.37 89.37 0 0178.35 1.24l31.54 16v114.24zm126.06-9.4c0 8.3-5.72 15-12.75 15h-23.79c-7 0-12.75-6.74-12.75-15V293.24c0-8.29 5.72-15 12.75-15h23.79c7 0 12.75 6.75 12.75 15z"/></svg>
                            <p class="mt-3 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-1')
                            </p>
                        </div>
                        <div>
                            <svg class="h-8 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330"><path d="M315 120h-22.69a135.36 135.36 0 00-5.47-13.2l16.05-16a15 15 0 000-21.21l-42.43-42.48a15 15 0 00-21.21 0l-16.05 16a135.36 135.36 0 00-13.2-5.42V15a15 15 0 00-15-15h-60a15 15 0 00-15 15v22.69a134.17 134.17 0 00-13.19 5.47l-16.06-16a15 15 0 00-21.21 0L27.11 69.54a15 15 0 000 21.21l16 16.06A134.17 134.17 0 0037.69 120H15a15 15 0 00-15 15v60a15 15 0 0015 15h22.69a135.36 135.36 0 005.47 13.2l-16 16.05a15 15 0 000 21.21l42.43 42.43a15 15 0 0021.21 0l16.06-16.05a134.17 134.17 0 0013.14 5.47V315a15 15 0 0015 15h60a15 15 0 0015-15v-22.69a133 133 0 0013.2-5.48l16.05 16.05a15 15 0 0021.21 0l42.43-42.42a15 15 0 000-21.22l-16.05-16.05a131.77 131.77 0 005.47-13.19H315a15 15 0 0015-15v-60a15 15 0 00-15-15zm-15 60h-18.78a15 15 0 00-14.53 11.26 103.75 103.75 0 01-11.23 27.06 15 15 0 002.31 18.24l13.3 13.29-21.22 21.22-13.29-13.3a15 15 0 00-18.24-2.3 104.07 104.07 0 01-27.06 11.22A15 15 0 00180 281.22V300h-30v-18.78a15 15 0 00-11.26-14.53 103.75 103.75 0 01-27.06-11.23 15 15 0 00-18.24 2.31l-13.29 13.3-21.22-21.22 13.3-13.29a15 15 0 002.31-18.24 104.09 104.09 0 01-11.23-27.06A15 15 0 0048.78 180H30v-30h18.78a15 15 0 0014.53-11.26 104.27 104.27 0 0111.22-27.06 15 15 0 00-2.3-18.24l-13.3-13.29 21.22-21.22 13.29 13.3a15 15 0 0018.24 2.31 104.09 104.09 0 0127.06-11.23A15 15 0 00150 48.78V30h30v18.78a15 15 0 0011.26 14.53 104 104 0 0127.06 11.23 15 15 0 0018.24-2.31l13.29-13.3 21.22 21.22-13.3 13.29a15 15 0 00-2.3 18.24 104.07 104.07 0 0111.22 27.06A15 15 0 00281.22 150H300z"/><path d="M186.39 132.39L152 166.79l-9.39-9.4a15 15 0 10-21.22 21.22l20 20a15 15 0 0021.22 0l45-45a15 15 0 00-21.22-21.22z"/></svg>
                            <p class="mt-3 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-2')
                            </p>
                        </div>
                        <div>
                            <svg class="h-8 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 511.98"><path d="M512 374a15 15 0 00-2.31-8l-39.29-86.35c-14.4-31.65-49.09-52.18-88.3-52.18h-35.44v-20.18a25 25 0 00-17.54-23.86c14.74-26.7 26.26-56.41 26.26-84.05a99.39 99.39 0 00-198.77 0c0 27.25 11.2 56.5 25.64 82.91H15a15 15 0 000 30h33.73v30H36a15 15 0 100 30h12.73V301H15a15 15 0 000 30h33.73v118.52a15 15 0 0015 15h42.62a50 50 0 0099.87 0l165.88.5a50 50 0 0099.8 0H497a15 15 0 0015-15v-75.68-.18-.16zm-61.53-65.7l23.07 50.7h-66.88v-40.29c0-5.55 7-10.41 15-10.41zM256 30a69.47 69.47 0 0169.38 69.38c0 28.52-16.27 61.46-34.15 89.06a14.16 14.16 0 00-1 1.52 475 475 0 01-34.23 45.6 471.82 471.82 0 01-34.28-45.65 15.54 15.54 0 00-.93-1.45c-17.9-27.6-34.18-60.55-34.18-89.08A69.47 69.47 0 01256 30zM78.73 331h42.56a15 15 0 000-30H78.73v-28.71h91.73a15 15 0 000-30H78.73v-30h121.88a476.29 476.29 0 0044.5 56.24 15 15 0 0021.77 0 475.12 475.12 0 0044.5-56.24h5.28v222.23H198a49.95 49.95 0 00-83.51 0H78.73zm77.56 151a20 20 0 1120-20 20 20 0 01-20 20zM422 482a20 20 0 01-19.25-25.38 14.46 14.46 0 001.07-2.91 20 20 0 0136.36 0 15.07 15.07 0 001.06 2.91A19.48 19.48 0 01442 462a20 20 0 01-20 20zm42.07-47a49.93 49.93 0 00-84.14 0h-33.27V257.47h35.44c20.49 0 39.5 8 51.63 20.83h-12.06c-24.82 0-45 18.13-45 40.41V374a15 15 0 0015 15H482v46z"/><path d="M256 128.8a30 30 0 10-30-30 30 30 0 0030 30z"/></svg>
                            <p class="mt-3 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-3')
                            </p>
                        </div>
                        <div>
                            <svg class="h-8 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 510"><path d="M443.73 198.23A84.78 84.78 0 00472 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00402 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 00293.19 100H287a15 15 0 000 30h15v5a84.77 84.77 0 0029.58 64.36 115.09 115.09 0 00-32.43 21 94.38 94.38 0 00-28.15-9.17V205a15 15 0 00-30 0v6.19a93.94 93.94 0 00-28.14 9.19 115.23 115.23 0 00-32.43-21A84.79 84.79 0 00210 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00140 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 0031.19 100H25a15 15 0 000 30h15v5a84.78 84.78 0 0028.27 63.23A110.17 110.17 0 000 300v95a15 15 0 0015 15h153.62A114.73 114.73 0 00131 495a15 15 0 0015 15h220a15 15 0 0015-15 114.73 114.73 0 00-37.62-85H497a15 15 0 0015-15v-95a110.17 110.17 0 00-68.27-101.77zM323.75 100A65.19 65.19 0 01372 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01450.25 100zM442 130v5a55 55 0 01-110 0v-5zM256 260a15 15 0 0015-15v-3.24A65.19 65.19 0 01319.25 290h-126.5A65.19 65.19 0 01241 241.76V245a15 15 0 0015 15zm55 65a55 55 0 01-110 0v-5h110zM61.75 100A65.19 65.19 0 01110 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01188.25 100zM180 130v5a55 55 0 01-110 0v-5zM30 300a80.09 80.09 0 0180-80h25a85 85 0 0153.09 18.64 94.84 94.84 0 00-25.9 51.36H156a15 15 0 000 30h15v5a84.59 84.59 0 0020.27 55H30zm319.67 180H162.32A85.15 85.15 0 01246 410h20a85.13 85.13 0 0183.67 70zM482 380H320.73A84.59 84.59 0 00341 325v-5h15a15 15 0 000-30h-6.19a94.84 94.84 0 00-25.9-51.36A85 85 0 01377 220h25a80.09 80.09 0 0180 80z"/></svg>
                            <p class="mt-3 text-xs md:text-sm">
                                @lang('vision-mission-valuesvision.section-mission-4')
                            </p>
                        </div>
                        <div>
                            <svg class="h-8 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 92.89h-1.08A164.53 164.53 0 00152.13 385a38.76 38.76 0 0114.42 30.13V497a15 15 0 0015 15h.09l148.9-.93a15 15 0 0014.91-15v-80.62A39.28 39.28 0 01360 384.92a164.52 164.52 0 00-104-292zm-59.46 389v-44h118.9v43.23zM341 361.68a69.16 69.16 0 00-25.15 46.25H196.16a68.67 68.67 0 00-25.07-46.17 134.52 134.52 0 0184-238.86h.91a134.53 134.53 0 0185 238.79z"/><path d="M331.71 202.27l-69-34.5a15 15 0 00-13.42 0l-69 34.5a15 15 0 00-8.29 13.41v80.5a15 15 0 008.29 13.42l69 34.5a15.11 15.11 0 0013.24.09l69-33.35a15 15 0 008.47-13.51V215.9a15 15 0 00-8.29-13.63zM256 198l36.12 18L257 234.45l-36.72-18.66zm-54 42.18l40 20.34-.67 46.11L202 286.91zm69.35 66.47l.67-46.14 38-19.95v47.41zM46 240.93H15a15 15 0 000 30h31a15 15 0 000-30zM497 240.93h-31a15 15 0 000 30h31a15 15 0 000-30zM256 61a15 15 0 0015-15V15a15 15 0 00-30 0v31a15 15 0 0015 15zM96.9 118.05a15 15 0 0021.21-21.22L96.19 74.91A15 15 0 0075 96.13zM415.1 393.82A15 15 0 10393.89 415l21.92 22A15 15 0 00437 415.74zM96.9 393.82L75 415.74A15 15 0 1096.19 437l21.92-22a15 15 0 10-21.21-21.18zM415.81 74.91l-21.92 21.92A15 15 0 00415.1 118L437 96.13a15 15 0 00-21.21-21.22z"/></svg>
                            <p class="mt-3 text-xs md:text-sm">
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
