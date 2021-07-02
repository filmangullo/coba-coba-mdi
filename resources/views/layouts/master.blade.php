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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
    <body x-data="{ about: false, investor: false, sustain: false, corporate: false, reports : false, extra : false, menu : false}">
        <div class="font-mark antialiased text-hitam">
            <div class="relative bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                  <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                      <a href="#">
                        <span class="sr-only">Mark Dynamics</span>
                        <img class="h-8 w-auto sm:h-10" onclick="location.href='/';" src="{{ asset('img/logo-black.svg') }}" alt="Mark Dynamics Indonesia">
                      </a>
                    </div>
                    {{-- Language Mobile --}}
                    {{-- <div class="lg:hidden">
                        <div class="flex items-center w-20 rounded-md">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
                        </div>
                    </div> --}}
                    <div class="-mr-2 -my-2 md:hidden">
                      <button x-on:click="menu = !menu" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                    <nav class="hidden md:flex items-center space-x-10">
                      <div class="relative">
                        <button x-on:click="about = !about" type="button" class="text-gray-500 group truncate bg-white rounded-md inline-flex items-center text-sm font-medium hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.about-us')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : about === true, 'text-gray-400 group-hover:text-gray-500' : about === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </button>
                        <div x-show="about === true" x-on:click.away="about = false" x-cloak
                        x-transition:enter="transition-all ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition-all ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute -ml-4 mt-3 transform z-10 px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                              <a href="{{ route('ceo-message') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.ceo-message')
                                  </p>
                              </a>

                              <a href="{{ route('our-business') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.our-business')
                                  </p>
                              </a>

                              <a href="{{ route('vision&mission') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.vision-mission')
                                  </p>
                              </a>

                              <a href="{{ route('milestones') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.milestones')
                                  </p>
                              </a>

                              <a href="{{ route('awards') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.awards')
                                  </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="{{ route('gallery') }}" class="text-sm hidden xl:block font-medium text-gray-500 hover:text-gray-900">
                        @lang('custom.products-gallery')
                      </a>

                      <div class="relative">
                        <button x-on:click="investor = !investor" type="button" class="text-gray-500 truncate group bg-white rounded-md inline-flex items-center text-sm font-medium hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.investor')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : investor === true, 'text-gray-400 group-hover:text-gray-500' : investor === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </button>
                        <div x-show="investor === true" x-on:click.away="investor = false" x-cloak
                        x-transition:enter="transition-all ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition-all ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute -ml-4 mt-3 transform z-10 px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 rounded-lg bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <div x-on:click="corporate = !corporate" class="relative -m-3 p-3 flex justify-between rounded-lg hover:bg-gray-100 cursor-pointer items-center">
                                    <p class="text-sm font-medium text-gray-900">
                                        @lang('custom.corporate')
                                    </p>

                                    <svg :class="{ 'text-mark-default' : corporate === true, 'text-gray-400 group-hover:text-gray-500' : corporate === false }" class="transform transition-all duration-200 h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                    <div
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-cloak x-show="corporate === true" @click.away="corporate = false" class="absolute transform grid gap-6 ring-1 ring-black ring-opacity-5 bg-white px-5 py-6 sm:gap-8 sm:p-8 rounded-lg shadow-lg z-10 w-screen max-w-xs lg:left-full lg:-top-5 lg:ml-5">
                                        <a href="{{ route('corporate-governanc.board-members') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                            <p class="text-sm font-medium text-gray-900">
                                                @lang('custom.board-members')
                                            </p>
                                        </a>
                                        <a href="{{ route('corporate-governanc.organization-structure') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                            <p class="text-sm font-medium text-gray-900">
                                                @lang('custom.organization')
                                            </p>
                                        </a>
                                        <a href="{{ route('corporate-governanc.audit-comittee') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                            <p class="text-sm font-medium text-gray-900">
                                                @lang('custom.audit')
                                            </p>
                                        </a>
                                    </div>
                                </div>
                              <a href="{{ route('shareholders') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.shareholders')
                                  </p>
                              </a>

                              <a href="{{ route('financial-highlight') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.financial-highlight')
                                  </p>
                              </a>

                              <div x-on:click="reports = !reports" class="relative -m-3 p-3 flex justify-between rounded-lg hover:bg-gray-100 cursor-pointer items-center">
                                <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.report')
                                </p>

                                <svg :class="{ 'text-mark-default' : reports === true, 'text-gray-400 group-hover:text-gray-500' : reports === false }" class="transform transition-all duration-200 h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                <div
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-cloak x-show="reports === true" @click.away="reports = false" class="absolute transform grid gap-6 ring-1 ring-black ring-opacity-5 bg-white px-5 py-6 sm:gap-8 sm:p-8 rounded-lg shadow-lg z-10 w-screen max-w-xs lg:left-full lg:-top-5 lg:ml-5">
                                    <a href="{{ route('corporate-governanc.board-members') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.financial-report')
                                        </p>
                                    </a>
                                    <a href="{{ route('corporate-governanc.organization-structure') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.annual')
                                        </p>
                                    </a>
                                    <a href="{{ route('corporate-governanc.audit-comittee') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.pubex')
                                        </p>
                                    </a>
                                    <a href="{{ route('corporate-governanc.audit-comittee') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.dividend')
                                        </p>
                                    </a>
                                </div>
                            </div>

                              <a href="{{ route('annual-meeting') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.annual-general')
                                  </p>
                              </a>

                              <a href="{{ route('prospectus') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                <p class="text-sm font-medium text-gray-900">
                                  @lang('custom.prospectus')
                                </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="relative">
                        <button x-on:click="sustain = !sustain" type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-sm font-medium hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.sustainability')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : sustain === true, 'text-gray-400 group-hover:text-gray-500' : sustain === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </button>
                        <div x-show="sustain === true" x-on:click.away="sustain = false" x-cloak
                        x-transition:enter="transition-all ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition-all ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute -ml-4 mt-3 transform z-10 px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                              <a href="{{ route('csr') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.csr')
                                  </p>
                              </a>

                              <a href="{{ route('environment') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.environment')
                                  </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="relative xl:hidden">
                        <button x-on:click="extra = !extra" type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-sm font-medium hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.extra')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : extra === true, 'text-gray-400 group-hover:text-gray-500' : extra === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </button>
                        <div x-show="extra === true" x-on:click.away="extra = false" x-cloak
                        x-transition:enter="transition-all ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition-all ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute -ml-4 mt-3 transform z-10 px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                              <a href="{{ route('gallery') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.products-gallery')
                                  </p>
                              </a>

                              <a href="{{ route('career') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.career')
                                  </p>
                              </a>

                              <a href="{{ route('kontak') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.contact')
                                  </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="{{ route('career') }}" class="text-sm hidden xl:block font-medium text-gray-500 hover:text-gray-900">
                        @lang('custom.career')
                      </a>

                      <a href="{{ route('kontak') }}" class="text-sm hidden xl:block font-medium text-gray-500 hover:text-gray-900">
                        @lang('custom.contact')
                      </a>
                    </nav>
                    {{-- Language --}}
                    <div class="hidden lg:block">
                        <div class="flex items-center w-20 rounded-md">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
                        </div>
                    </div>
                  </div>
                </div>

                <!--
                  Mobile menu, show/hide based on mobile menu state.

                  Entering: "duration-200 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div x-cloak
                x-transition:enter="duration-200 ease-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="duration-100 ease-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                x-show="menu === true" x-on:click.away="menu = false" class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right lg:hidden">
                  <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                      <div class="flex items-center justify-between">
                        <div>
                          <img class="h-8 w-auto" onclick="location.href='/';" src="{{ asset('img/logo-black.svg') }}" alt="Mark Dynamics Indonesia">
                        </div>
                        <div class="-mr-2">
                          <button x-on:click="menu = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="mt-6">
                        <nav class="grid gap-y-8">
                          <a x-on:click="about = !about" href="#" class="-m-3 p-3 flex items-center justify-between rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">
                              @lang('custom.about-us')
                            </span>
                            <svg :class="{ 'text-mark-default -rotate-180' : about === true, 'text-gray-400 group-hover:text-gray-500' : about === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          </a>
                          <div
                          x-transition:enter="transition-all ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition-all ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                          x-cloak x-show="about === true" x-on:click.away="about = false" class="grid gap-y-8 px-5">
                            <a href="{{ route('ceo-message') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.ceo-message')
                              </span>
                            </a>
                            <a href="{{ route('our-business') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.our-business')
                              </span>
                            </a>
                            <a href="{{ route('vision&mission') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.vision-mission')
                              </span>
                            </a>
                            <a href="{{ route('milestones') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.milestones')
                              </span>
                            </a>
                            <a href="{{ route('awards') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.awards')
                              </span>
                            </a>
                          </div>

                          <a x-on:click="investor = !investor" href="#" class="-m-3 p-3 flex items-center justify-between rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">
                              @lang('custom.investor')
                            </span>
                            <svg :class="{ 'text-mark-default -rotate-180' : investor === true, 'text-gray-400 group-hover:text-gray-500' : investor === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          </a>
                          <div
                          x-transition:enter="transition-all ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition-all ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                          x-cloak x-show="investor === true" x-on:click.away="investor = false" class="grid gap-y-8 px-5">
                              <a x-on:click="corporate = !corporate" href="#" class="-m-3 p-3 flex items-center justify-between rounded-md hover:bg-gray-50">
                                <span class="text-base font-medium text-gray-900">
                                  @lang('custom.corporate')
                                </span>
                                <svg :class="{ 'text-mark-default -rotate-180' : corporate === true, 'text-gray-400 group-hover:text-gray-500' : corporate === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                              </a>

                            <div
                            x-transition:enter="transition-all ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition-all ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                            x-cloak x-show="corporate === true" x-on:click.away="corporate = false" class="grid gap-y-8 px-5">
                                <a href="{{ route('corporate-governanc.board-members') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.board-members')
                                </span>
                                </a>
                                <a href="{{ route('corporate-governanc.organization-structure') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.organization')
                                </span>
                                </a>
                                <a href="{{ route('corporate-governanc.audit-comittee') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.audit')
                                </span>
                                </a>
                            </div>

                            <a href="{{ route('shareholders') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.shareholders')
                              </span>
                            </a>
                            <a href="{{ route('financial-highlight') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.financial-highlight')
                              </span>
                            </a>

                            <a x-on:click="reports = !reports" href="#" class="-m-3 p-3 flex items-center justify-between rounded-md hover:bg-gray-50">
                                <span class="text-base font-medium text-gray-900">
                                  @lang('custom.report')
                                </span>
                                <svg :class="{ 'text-mark-default -rotate-180' : reports === true, 'text-gray-400 group-hover:text-gray-500' : reports === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                              </a>

                            <div
                            x-transition:enter="transition-all ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition-all ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                            x-cloak x-show="reports === true" x-on:click.away="reports = false" class="grid gap-y-8 px-5">
                                <a href="{{ route('financial-report') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.financial-report')
                                </span>
                                </a>
                                <a href="{{ route('annual') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.annual')
                                </span>
                                </a>
                                <a href="{{ route('public') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.pubex')
                                </span>
                                </a>
                                <a href="{{ route('dividend') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.dividend')
                                </span>
                                </a>
                            </div>

                            <a href="{{ route('annual-meeting') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.annual-general')
                              </span>
                            </a>
                            <a href="{{ route('prospectus') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.prospectus')
                              </span>
                            </a>
                          </div>

                          <a x-on:click="sustain = !sustain" href="#" class="-m-3 p-3 flex items-center justify-between rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">
                              @lang('custom.sustainability')
                            </span>
                            <svg :class="{ 'text-mark-default -rotate-180' : sustain === true, 'text-gray-400 group-hover:text-gray-500' : sustain === false }" class="transform transition-all duration-200 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          </a>
                          <div
                          x-transition:enter="transition-all ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition-all ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                          x-cloak x-show="sustain === true" x-on:click.away="sustain = false" class="grid gap-y-8 px-5">
                            <a href="{{ route('csr') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.csr')
                              </span>
                            </a>
                            <a href="{{ route('environment') }}" class="-m-3 p-3 hover:bg-gray-50 flex items-center rounded-md">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.environment')
                              </span>
                            </a>
                          </div>
                        </nav>
                      </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                      <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="{{ route('gallery') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          @lang('custom.products-gallery')
                        </a>

                        <a href="{{ route('career') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          @lang('custom.career')
                        </a>

                        <a href="{{ route('kontak') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          @lang('custom.contact')
                        </a>

                        <div class="lg:hidden">
                            <div class="flex items-center w-20 rounded-md">
                                <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                                <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
