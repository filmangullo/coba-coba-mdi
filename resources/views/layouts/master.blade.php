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

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body x-data="{ about: false, investor: false, sustain: false, corporate: false, reports : false, menu : false, aboutmob : false, investormob : false, corporatemob : false, publicmob : false, sustainmob : false }">
        <div class="font-sans antialiased text-hitam">

            {{-- Header --}}
            <div class="fixed z-50 w-full bg-hitam border-b lg:border-0 border-mark">
                <div class="flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <img
                        onclick="location.href='/';"
                        src="{{ asset('logo.svg') }}"
                        alt="Mark Dynamics Indonesia"
                        class="py-4 lg:py-0 w-32 lg:w-40 cursor-pointer">
                    <div class="hidden lg:flex text-xs font-medium text-white">
                        <div @mouseover="about = true" @mouseleave="about = false" class="relative w-auto px-6 py-10 cursor-pointer">
                            <a href="#">About Us</a>
                            <div
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-show="about === true" @click.away="about = false" class="absolute w-56 mt-10 left-1/2 -ml-28 bg-hitam bg-opacity-90">
                                <a href="{{ route('ceo-message') }}" class="py-3.5 text-center hover:bg-hitam block">CEO Message</a>
                                <a href="{{ route('our-business') }}" class="py-3.5 text-center hover:bg-hitam block">Our Business</a>
                                <a href="{{ route('vision&mission') }}" class="py-3.5 text-center hover:bg-hitam block">Vision, Mission & Values</a>
                                <a href="{{ route('milestones') }}" class="py-3.5 text-center hover:bg-hitam block">Milestones</a>
                                <a href="{{ route('awards') }}" class="py-3.5 text-center hover:bg-hitam block">Awards & Certificates</a>
                            </div>
                        </div>
                        <a href="{{ route('gallery')}}"class="px-6 py-10" href="#">Products & Gallery</a>
                        <div @mouseover="investor = true" @mouseleave="investor = false" class="relative w-auto px-6 py-10 cursor-pointer">
                            <a href="#">Investor Relations</a>
                            <div
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-show="investor === true" @click.away="investor = false" class="absolute w-56 mt-10 left-1/2 -ml-28 bg-hitam bg-opacity-90">
                                <div @mouseover="corporate = true" @mouseleave="corporate = false" class="relative w-auto cursor-pointer text-center hover:bg-hitam py-3.5">
                                    <a href="#">Corporate Governance</a>
                                    <div
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-show="corporate === true" @click.away="corporate = false" class="absolute top-0 w-56 left-full bg-hitam bg-opacity-90">
                                        <a href="{{ route('corporate-governanc.board-members') }}" class="py-3.5 text-center hover:bg-hitam block">Board Members</a>
                                        <a href="{{ route('corporate-governanc.organization-structure') }}" class="py-3.5 text-center hover:bg-hitam block">Organization Structure</a>
                                        <a href="{{ route('corporate-governanc.audit-comittee') }}" class="py-3.5 text-center hover:bg-hitam block">Audit Committee</a>
                                    </div>
                                    <svg class="absolute w-2 h-2 -mt-3 text-white fill-current right-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                </div>
                                <a href="#" class="py-3.5 text-center hover:bg-hitam block">Shareholders Information</a>
                                <a href="#" class="py-3.5 text-center hover:bg-hitam block">Financial Highlight</a>
                                <div @mouseover="reports = true" @mouseleave="reports = false" class="relative w-auto cursor-pointer text-center hover:bg-hitam py-3.5">
                                    <a  href="#">Reports / Publications</a>
                                    <div
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-show="reports === true" @click.away="reports = false" class="absolute top-0 w-56 left-full bg-hitam bg-opacity-90">
                                        <a href="{{ route('financial-report') }}" class="py-3.5 text-center hover:bg-hitam block">Financial Report</a>
                                        <a href="{{ route('annual') }}" class="py-3.5 text-center hover:bg-hitam block">Annual Report</a>
                                        <a href="{{ route('public') }}" class="py-3.5 text-center hover:bg-hitam block">Public Expose</a>
                                        <a href="{{ route('dividend') }}" class="py-3.5 text-center hover:bg-hitam block">Dividend Information</a>
                                    </div>
                                    <svg class="absolute w-2 h-2 -mt-3 text-white fill-current right-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                </div>
                                <a href="{{ route('annual-meeting') }}" class="py-3.5 text-center hover:bg-hitam block">Annual General Meeting</a>
                                <a href="{{ route('prospectus') }}" class="py-3.5 text-center hover:bg-hitam block">Prospectus</a>
                            </div>
                        </div>
                        <div @mouseover="sustain = true" @mouseleave="sustain = false" class="relative w-auto px-6 py-10">
                            <a href="#">Sustainability</a>
                            <div
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-show="sustain === true" @click.away="sustain = false" class="absolute w-56 mt-10 left-1/2 -ml-28 bg-hitam bg-opacity-90">
                                <a href="#" class="py-3.5 text-center hover:bg-hitam block">CSR</a>
                                <a href="#" class="py-3.5 text-center hover:bg-hitam block">Environment</a>
                            </div>
                        </div>
                        <a class="px-6 py-10" href="{{ route('career') }}">Career</a>
                        <a class="px-6 py-10" href="{{ route('kontak') }}">Contact Us</a>
                    </div>
                    <div x-on:click="menu = !menu" class="lg:hidden p-2 rounded-md focus:bg-mark-default">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
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
            x-show="menu" x-on:click.away="menu = false" class="h-full overflow-y-auto right-0 fixed z-40 w-1/2 sm:w-1/3 pt-16 bg-hitam bg-opacity-90">
                {{-- About Us --}}
                <div>
                    <div x-on:click="aboutmob = !aboutmob" class="text-white flex items-center justify-between w-auto px-3 sm:px-6 py-4 cursor-pointer">
                        <a href="#" class="text-sm font-semibold">About Us</a>
                        <svg :class="{ '-rotate-180': aboutmob === true }" xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300 h-4 w-4 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    x-show="aboutmob" class="text-white w-full">
                        <a href="{{ route('ceo-message') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">CEO Message</a>
                        <a href="{{ route('our-business') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Our Business</a>
                        <a href="{{ route('vision&mission') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Vision, Mission & Value</a>
                        <a href="{{ route('milestones') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Milestones</a>
                        <a href="{{ route('awards') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Awards & Certificates</a>
                    </div>
                </div>
                {{-- Products & Gallery --}}
                <a href="{{ route('gallery')}}"class="px-3 sm:px-6 py-4 text-white text-sm font-semibold block" href="#">Products & Gallery</a>
                {{-- Investor Relations --}}
                <div>
                    <div x-on:click="investormob = !investormob" class="text-white flex items-center justify-between w-auto px-3 sm:px-6 py-4 cursor-pointer">
                        <a href="#" class="text-sm font-semibold">Investor Relations</a>
                        <svg :class="{ '-rotate-180': investormob === true }" xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300 h-4 w-4 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    x-show="investormob" class="text-white w-full">
                        <div x-on:click="corporatemob = !corporatemob" class="relative px-6 sm:px-12 py-4 flex items-center cursor-pointer justify-between focus:bg-hitam text-xs">
                            <a  href="#">Corporate Governance</a>
                            <svg :class="{ '-rotate-180': corporatemob === true }" xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300 h-4 w-4 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                        x-show="corporatemob" x-on:click.away="corporatemob = false" class="text-white w-full">
                            <a href="{{ route('corporate-governanc.board-members') }}" class="py-4 px-10 sm:px-20 text-xs  focus:bg-hitam block">Board Members</a>
                            <a href="{{ route('corporate-governanc.organization-structure') }}" class="py-4 px-10 sm:px-20 text-xs    focus:bg-hitam block">Organization Structure</a>
                            <a href="{{ route('corporate-governanc.audit-comittee') }}" class="py-4 px-10 sm:px-20 text-xs    focus:bg-hitam block">Audit Committee</a>
                        </div>
                        <a href="#" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Shareholders Information</a>
                        <a href="#" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Financial Highlight</a>
                        <div x-on:click="publicmob = !publicmob" class="relative px-6 sm:px-12 py-4 flex items-center cursor-pointer justify-between focus:bg-hitam text-xs">
                            <a  href="#">Reports / Publication</a>
                            <svg :class="{ '-rotate-180': publicmob === true }" xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300 h-4 w-4 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                        x-show="publicmob" x-on:click.away="publicmob = false" class="text-white w-full">
                            <a href="{{ route('financial-report') }}" class="py-4 px-10 sm:px-20 text-xs  focus:bg-hitam block">Financial Report</a>
                            <a href="{{ route('annual') }}" class="py-4 px-10 sm:px-20 text-xs    focus:bg-hitam block">Annual Report</a>
                            <a href="{{ route('public') }}" class="py-4 px-10 sm:px-20 text-xs    focus:bg-hitam block">Public Expose</a>
                            <a href="{{ route('dividend') }}" class="py-4 px-10 sm:px-20 text-xs    focus:bg-hitam block">Dividend Information</a>
                        </div>
                        <a href="{{ route('annual-meeting') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Annual General Meeting</a>
                        <a href="{{ route('prospectus') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Prospectus</a>
                    </div>
                </div>
                {{-- Sustainability --}}
                <div>
                    <div x-on:click="sustainmob = !sustainmob" class="text-white flex items-center justify-between w-auto px-3 sm:px-6 py-4 cursor-pointer">
                        <a href="#" class="text-sm font-semibold">Sustainability</a>
                        <svg :class="{ '-rotate-180': sustainmob === true }" xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300 h-4 w-4 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    x-show="sustainmob" class="text-white w-full">
                        <a href="{{ route('career') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">CSR</a>
                        <a href="{{ route('our-business') }}" class="px-6 sm:px-12 py-4 focus:bg-hitam text-xs block">Environment</a>
                    </div>
                </div>
                {{-- Career --}}
                <a href="{{ route('career')}}"class="px-3 sm:px-6 py-4 text-white text-sm font-semibold block" href="#">Career</a>
                {{-- Contact Us --}}
                <a href="{{ route('kontak')}}"class="px-3 sm:px-6 py-4 text-white text-sm font-semibold block" href="#">Contact Us</a>
            </div>

            @yield('content')

            {{-- Footer --}}
            <div class="bottom-0 bg-white border-t border-gray-300">
                <div class="grid items-center grid-cols-5 px-4 py-10 mx-auto text-xs font-medium justify-items-center max-w-7xl sm:px-6 lg:px-8">
                    <a href="{{ route('prospectus') }}">Prospectus</a>
                    <a href="{{ route('financial-report') }}">Financial Report</a>
                    <img class="w-24" src="{{ asset('img/logo.png') }}">
                    <a href="#">Career</a>
                    <a href="{{ route('kontak') }}">Contact Us</a>
                </div>
                <div class="pb-6 text-xs text-center">All Rights Reserved &copy; Mark Dynamics 2021.</div>
            </div>
        </div>
    </body>
</html>
