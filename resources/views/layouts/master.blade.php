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
    <body x-data="{ about: false, investor: false, sustain: false, corporate: false, reports : false }">
        <div class="font-sans antialiased text-hitam">

            {{-- Header --}}
            <div class="fixed z-40 w-full bg-hitam">
                <div class="flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <img
                        onclick="location.href='/';"
                        src="{{ asset('logo.svg') }}"
                        alt="Mark Dynamics Indonesia"
                        class="w-40 cursor-pointer">
                    <div class="flex text-xs font-medium text-white">
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
                                        <a href="{{ route('corporate-governanc.audit-comittee') }}" class="py-3.5 text-center hover:bg-hitam block">Audit Comittee</a>
                                        <a href="#" class="py-3.5 text-center hover:bg-hitam block">Corporate Secretary</a>
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
                                <a href="#" class="py-3.5 text-center hover:bg-hitam block">Human Resources</a>
                            </div>
                        </div>
                        <a class="px-6 py-10" href="{{ route('career') }}">Career</a>
                        <a class="px-6 py-10" href="{{ route('kontak') }}">Contact Us</a>
                    </div>
                </div>
            </div>

            @yield('content')

            {{-- Footer --}}
            <div class="bottom-0 bg-white border-t border-gray-300">
                <div class="grid items-center grid-cols-5 px-4 py-10 mx-auto text-xs font-medium justify-items-center max-w-7xl sm:px-6 lg:px-8">
                    <a href="#">Investor Relations</a>
                    <a href="#">Sustainability</a>
                    <img class="w-24" src="{{ asset('img/logo.svg') }}">
                    <a href="#">Career</a>
                    <a href="{{ route('kontak') }}">Contact Us</a>
                </div>
                <div class="pb-6 text-xs text-center">All Rights Reserved &copy; Mark Dynamics 2021.</div>
            </div>
        </div>
    </body>
</html>
