<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mark Dynamics Indonesia</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            [x-cloak] { display: none; }
        </style>
        @stack('styles')
    </head>
    <body x-data="{ about: false, investor: false, sustain: false, corporate: false, reports : false, menu : false, aboutmob : false, investormob : false, corporatemob : false, publicmob : false, sustainmob : false }">
        <div class="font-sans antialiased text-hitam">

            {{-- Header --}}
            <div class="fixed z-50 w-full border-b bg-hitam lg:border-0 border-mark">
                <div class="flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <img
                        onclick="location.href='/';"
                        src="{{ asset('logo.svg') }}"
                        alt="Mark Dynamics Indonesia"
                        class="w-32 py-4 cursor-pointer lg:py-0 lg:w-40">
                    <div class="hidden text-xs font-medium text-white lg:flex">
                        <div @mouseover="about = true" @mouseleave="about = false" class="relative w-auto px-6 py-10 cursor-pointer">
                            <a href="">{{ __('custom.about-us') }}</a>
                            <div
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-cloak x-show="about === true" @click.away="about = false" class="absolute w-56 mt-10 left-1/2 -ml-28 bg-hitam bg-opacity-90">
                                <a href="{{ route('ceo-message') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.ceo-message')</a>
                                <a href="{{ route('our-business') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.our-business')</a>
                                <a href="{{ route('vision&mission') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.vision-mission')</a>
                                <a href="{{ route('milestones') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.milestones')</a>
                                <a href="{{ route('awards') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.awards')</a>
                            </div>
                        </div>
                        <a href="{{ route('gallery')}}"class="px-6 py-10" href="#">@lang('custom.products-gallery')</a>
                        <div @mouseover="investor = true" @mouseleave="investor = false" class="relative w-auto px-6 py-10 cursor-pointer">
                            <a href="#">@lang('custom.investor')</a>
                            <div
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-cloak x-show="investor === true" @click.away="investor = false" class="absolute w-56 mt-10 left-1/2 -ml-28 bg-hitam bg-opacity-90">
                                <div @mouseover="corporate = true" @mouseleave="corporate = false" class="relative w-auto cursor-pointer text-center hover:bg-hitam py-3.5">
                                    <a href="#">@lang('custom.corporate')</a>
                                    <div
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-cloak x-show="corporate === true" @click.away="corporate = false" class="absolute top-0 w-56 left-full bg-hitam bg-opacity-90">
                                        <a href="{{ route('corporate-governanc.board-members') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.board-members')</a>
                                        <a href="{{ route('corporate-governanc.organization-structure') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.organization')</a>
                                        <a href="{{ route('corporate-governanc.audit-comittee') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.audit')</a>
                                    </div>
                                    <svg class="absolute w-2 h-2 -mt-3 text-white fill-current right-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                </div>
                                <a href="{{ route('shareholders') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.shareholders')</a>
                                <a href="{{ route('financial-highlight') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.financial-highlight')</a>
                                <div @mouseover="reports = true" @mouseleave="reports = false" class="relative w-auto cursor-pointer text-center hover:bg-hitam py-3.5">
                                    <a  href="#">@lang('custom.report')</a>
                                    <div
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-cloak x-show="reports === true" @click.away="reports = false" class="absolute top-0 w-56 left-full bg-hitam bg-opacity-90">
                                        <a href="{{ route('financial-report') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.financial-report')</a>
                                        <a href="{{ route('annual') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.annual')</a>
                                        <a href="{{ route('public') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.pubex')</a>
                                        <a href="{{ route('dividend') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.dividend')</a>
                                    </div>
                                    <svg class="absolute w-2 h-2 -mt-3 text-white fill-current right-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                </div>
                                <a href="{{ route('annual-meeting') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.annual-general')</a>
                                <a href="{{ route('prospectus') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.prospectus')</a>
                            </div>
                        </div>
                        <div @mouseover="sustain = true" @mouseleave="sustain = false" class="relative w-auto px-6 py-10">
                            <a href="#">@lang('custom.sustainability')</a>
                            <div
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-cloak x-show="sustain === true" @click.away="sustain = false" class="absolute w-56 mt-10 left-1/2 -ml-28 bg-hitam bg-opacity-90">
                                <a href="{{ route('csr') }}" class="truncate px-3 py-3.5 text-center hover:bg-hitam block">@lang('custom.csr')</a>
                                <a href="{{ route('environment') }}" class="py-3.5 text-center hover:bg-hitam block">@lang('custom.environment')</a>
                            </div>
                        </div>
                        <a class="px-6 py-10" href="{{ route('career') }}">@lang('custom.career')</a>
                        <a class="px-6 py-10" href="{{ route('kontak') }}">@lang('custom.contact')</a>
                        <div class="flex items-center w-20">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-mark-default bg-white @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-mark-default bg-white @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="flex items-center w-20 lg:hidden">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-mark-default bg-white @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-mark-default bg-white @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
                        </div>
                        <div x-on:click="menu = !menu" class="p-2 rounded-md lg:hidden focus:bg-mark-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Menu Dropdown --}}
            <div
            x-transition:enter="transition-all ease-out duration-100"
            x-transition:enter-start="-right-32"
            x-transition:enter-end="right-0"
            x-transition:leave="transition-all ease-in duration-100"
            x-transition:leave-start="right-0"
            x-transition:leave-end="-right-32"
            x-cloak x-show="menu" x-on:click.away="menu = false" class="fixed right-0 z-40 w-1/2 h-full pt-16 overflow-y-auto sm:w-1/3 bg-hitam bg-opacity-90">
                {{-- About Us --}}
                <div>
                    <div x-on:click="aboutmob = !aboutmob" class="flex items-center justify-between w-auto px-3 py-4 text-white cursor-pointer sm:px-6">
                        <a href="#" class="text-sm font-semibold">@lang('custom.about-us')</a>
                        <svg :class="{ '-rotate-180': aboutmob === true }" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-all duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    x-cloak x-show="aboutmob" class="w-full text-white">
                        <a href="{{ route('ceo-message') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.ceo-message')</a>
                        <a href="{{ route('our-business') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.our-business')</a>
                        <a href="{{ route('vision&mission') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.vision-mission')</a>
                        <a href="{{ route('milestones') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.milestones')</a>
                        <a href="{{ route('awards') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.awards')</a>
                    </div>
                </div>
                {{-- Products & Gallery --}}
                <a href="{{ route('gallery')}}"class="block px-3 py-4 text-sm font-semibold text-white sm:px-6" href="#">@lang('custom.products-gallery')</a>
                {{-- Investor Relations --}}
                <div>
                    <div x-on:click="investormob = !investormob" class="flex items-center justify-between w-auto px-3 py-4 text-white cursor-pointer sm:px-6">
                        <a href="#" class="text-sm font-semibold">@lang('custom.investor')</a>
                        <svg :class="{ '-rotate-180': investormob === true }" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-all duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    x-cloak x-show="investormob" class="w-full text-white">
                        <div x-on:click="corporatemob = !corporatemob" class="relative flex items-center justify-between px-6 py-4 text-xs cursor-pointer sm:px-12 focus:bg-hitam">
                            <a  href="#">@lang('custom.corporate')</a>
                            <svg :class="{ '-rotate-180': corporatemob === true }" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-all duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        x-cloak x-show="corporatemob" x-on:click.away="corporatemob = false" class="w-full text-white">
                            <a href="{{ route('corporate-governanc.board-members') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.board-members')</a>
                            <a href="{{ route('corporate-governanc.organization-structure') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.organization')</a>
                            <a href="{{ route('corporate-governanc.audit-comittee') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.audit')</a>
                        </div>
                        <a href="{{ route('shareholders') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.shareholders')</a>
                        <a href="{{ route('financial-highlight') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.financial-highlight')</a>
                        <div x-on:click="publicmob = !publicmob" class="relative flex items-center justify-between px-6 py-4 text-xs cursor-pointer sm:px-12 focus:bg-hitam">
                            <a  href="#">@lang('custom.report')</a>
                            <svg :class="{ '-rotate-180': publicmob === true }" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-all duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        x-cloak x-show="publicmob" x-on:click.away="publicmob = false" class="w-full text-white">
                            <a href="{{ route('financial-report') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.financial-report')</a>
                            <a href="{{ route('annual') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.annual')</a>
                            <a href="{{ route('public') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.pubex')</a>
                            <a href="{{ route('dividend') }}" class="block px-10 py-4 text-xs sm:px-20 focus:bg-hitam">@lang('custom.dividend')</a>
                        </div>
                        <a href="{{ route('annual-meeting') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.annual-general')</a>
                        <a href="{{ route('prospectus') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.prospectus')</a>
                    </div>
                </div>
                {{-- Sustainability --}}
                <div>
                    <div x-on:click="sustainmob = !sustainmob" class="flex items-center justify-between w-auto px-3 py-4 text-white cursor-pointer sm:px-6">
                        <a href="#" class="text-sm font-semibold">@lang('custom.sustainability')</a>
                        <svg :class="{ '-rotate-180': sustainmob === true }" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-all duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    x-cloak x-show="sustainmob" class="w-full text-white">
                        <a href="{{ route('csr') }}" class="truncate block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.csr')</a>
                        <a href="{{ route('environment') }}" class="block px-6 py-4 text-xs sm:px-12 focus:bg-hitam">@lang('custom.environment')</a>
                    </div>
                </div>
                {{-- Career --}}
                <a href="{{ route('career')}}"class="block px-3 py-4 text-sm font-semibold text-white sm:px-6" href="#">@lang('custom.career')</a>
                {{-- Contact Us --}}
                <a href="{{ route('kontak')}}"class="block px-3 py-4 text-sm font-semibold text-white sm:px-6" href="#">@lang('custom.contact')</a>
            </div>

            @yield('content')

            {{-- Footer --}}
            <div class="bottom-0 bg-white border-t border-gray-300">
                <img class="w-24 pt-5 mx-auto md:hidden" src="{{ asset('img/logo.png') }}">
                <div class="grid items-center grid-cols-2 gap-6 px-4 py-10 mx-auto text-xs font-medium md:gap-0 md:grid-cols-5 justify-items-center max-w-7xl sm:px-6 lg:px-8">
                    <a class="text-center" href="{{ route('prospectus') }}">@lang('custom.prospectus')</a>
                    <a class="text-center" href="{{ route('financial-report') }}">@lang('custom.financial-report')</a>
                    <img class="hidden w-24 md:block" src="{{ asset('img/logo.png') }}">
                    <a class="text-center" href="{{ route('career') }}">@lang('custom.career')</a>
                    <a class="text-center" href="{{ route('kontak')}}">@lang('custom.contact')</a>
                </div>
                <div class="pb-6 text-xs text-center">All Rights Reserved &copy; Mark Dynamics 2021.</div>
            </div>
        </div>

        @livewireScripts
        @stack('scripts')
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
            wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animate__animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
        </script>
    </body>
</html>
