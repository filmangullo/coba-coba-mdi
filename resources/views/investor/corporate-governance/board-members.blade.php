@extends('layouts.master')

@section('content')
{{-- Board Commissioner --}}
<div class="bg-white">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:pt-28 lg:pb-12">
        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <div class="text-center lg:col-span-3">
                <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('board-members.board_members')
                </h2>
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    @lang('board-members.board_of_commisioner')
                </p>
            </div>
            <div class="lg:col-span-3">
                <ul class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
                    <!-- Chin Kien Ping More people... -->
                    <li class="sm:py-8">
                        <div class="space-y-4 sm:grid sm:grid-cols-4 sm:items-start sm:gap-6 sm:space-y-0">
                            <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover rounded-lg shadow-lg"
                                    src="{{ asset('img/chin-kien-ping.png') }}" alt="">
                            </div>
                            <div class="sm:col-span-3">
                                <div class="space-y-4">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Chin Kien Ping</h3>
                                        <p class="text-indigo-600">@lang('board-members.president_commissioner')</p>
                                    </div>
                                    <div class="text-lg text-justify">
                                        <p class="text-gray-500">@lang('board-members.about_ridwan_goh')</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Dompak Pasaribu More people... -->
                    <li class="sm:py-8">
                        <div class="space-y-4 sm:grid sm:grid-cols-4 sm:items-start sm:gap-6 sm:space-y-0">
                            <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover rounded-lg shadow-lg"
                                    src="{{ asset('img/dompak-pasaribu.png') }}" alt="">
                            </div>
                            <div class="sm:col-span-3">
                                <div class="space-y-4">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Dompak Pasaribu</h3>
                                        <p class="text-indigo-600">@lang('board-members.independent_commissioner')</p>
                                    </div>
                                    <div class="text-lg text-justify">
                                        <p class="text-gray-500">@lang('board-members.about_dompak_pasaribu')</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>


{{-- Board Of Director --}}
<div class="bg-white">
    <div class="px-4 py-5 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-12">
        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <div class="text-center lg:col-span-3">
                <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">
                    @lang('board-members.board_members')</h2>
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    @lang('board-members.board_of_directors')
                </p>
            </div>
            <div class="lg:col-span-3">
                <ul class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
                    <!-- Ridwan Goh More people... -->
                    <li class="sm:py-8">
                        <div class="space-y-4 sm:grid sm:grid-cols-4 sm:items-start sm:gap-6 sm:space-y-0">
                            <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover rounded-lg shadow-lg"
                                    src="{{ asset('img/ridwan-goh.png') }}" alt="">
                            </div>
                            <div class="sm:col-span-3">
                                <div class="space-y-4">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Ridwan Goh</h3>
                                        <p class="text-indigo-600">@lang('board-members.president_director')</p>
                                    </div>
                                    <div class="text-lg text-justify">
                                        <p class="text-gray-500">@lang('board-members.about_ridwan_goh')</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Sutiyoso Bin Risman More people... -->
                    <li class="sm:py-8">
                        <div class="space-y-4 sm:grid sm:grid-cols-4 sm:items-start sm:gap-6 sm:space-y-0">
                            <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover rounded-lg shadow-lg"
                                    src="{{ asset('img/sutiyoso-bin-risman.png') }}" alt="">
                            </div>
                            <div class="sm:col-span-3">
                                <div class="space-y-4">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Sutiyoso Bin Risman</h3>
                                        <p class="text-indigo-600">@lang('board-members.direktur')</p>
                                    </div>
                                    <div class="text-lg text-justify">
                                        <p class="text-gray-500">@lang('board-members.about_sutiyoso_bin_risman')</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Cahaya Dewi Surbakti More people... -->
                    <li class="sm:py-8">
                        <div class="space-y-4 sm:grid sm:grid-cols-4 sm:items-start sm:gap-6 sm:space-y-0">
                            <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                <img class="object-cover rounded-lg shadow-lg"
                                    src="{{ asset('img/cahaya-dewi-surbakti.png') }}" alt="">
                            </div>
                            <div class="sm:col-span-3">
                                <div class="space-y-4">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Cahaya Dewi Surbakti</h3>
                                        <p class="text-indigo-600">@lang('board-members.independent_director')</p>
                                    </div>
                                    <div class="text-lg text-justify">
                                        <p class="text-gray-500">@lang('board-members.about_cahaya_dewi_surbakti')</p>
                                    </div>
                                    <ul class="flex space-x-5">
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
