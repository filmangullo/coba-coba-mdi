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
    <body x-data="{ about: false, investor: false, sustain: false, corporate: false, reports : false, menu : false, aboutmob : false, investormob : false, corporatemob : false, publicmob : false, sustainmob : false }">
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
                    <div class="-mr-2 -my-2 md:hidden">
                      <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                    <nav class="hidden md:flex space-x-10">
                      <div class="relative">
                        <button x-on:click="about = !about" type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-sm font-medium hover:text-gray-900 focus:outline-none" aria-expanded="false">
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

                      <a href="{{ route('gallery') }}" class="text-sm font-medium text-gray-500 hover:text-gray-900">
                        @lang('custom.products-gallery')
                      </a>

                      <div class="relative">
                        <button x-on:click="investor = !investor" type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-sm font-medium hover:text-gray-900 focus:outline-none" aria-expanded="false">
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
                              {{-- <div @mouseover="corporate = true" @mouseleave="corporate = false" class="relative w-auto cursor-pointer text-center hover:bg-hitam py-3.5">
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
                                </div> --}}
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
                                    @lang('custom.annual')
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

                      <a href="{{ route('career') }}" class="text-sm font-medium text-gray-500 hover:text-gray-900">
                        @lang('custom.career')
                      </a>

                      <a href="{{ route('kontak') }}" class="text-sm font-medium text-gray-500 hover:text-gray-900">
                        @lang('custom.contact')
                      </a>
                    </nav>
                    {{-- Language --}}
                    <div class="">
                        <div class="flex items-center w-20 border border-mark rounded-md">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-mark-default bg-white @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-mark-default bg-white @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
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
                <div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden">
                  <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                      <div class="flex items-center justify-between">
                        <div>
                          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                        </div>
                        <div class="-mr-2">
                          <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
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
                          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">
                              Analytics
                            </span>
                          </a>

                          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/cursor-click -->
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">
                              Engagement
                            </span>
                          </a>

                          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/shield-check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">
                              Security
                            </span>
                          </a>

                          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/view-grid -->
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">
                              Integrations
                            </span>
                          </a>

                          <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/refresh -->
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">
                              Automations
                            </span>
                          </a>
                        </nav>
                      </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                      <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          Pricing
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          Docs
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          Help Center
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          Guides
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          Events
                        </a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                          Security
                        </a>
                      </div>
                      <div>
                        <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                          Sign up
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                          Existing customer?
                          <a href="#" class="text-indigo-600 hover:text-indigo-500">
                            Sign in
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            {{-- Header --}}
            {{-- <div class="fixed z-50 w-full border-b bg-hitam lg:border-0 border-mark">
                <div class="flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <img
                        onclick="location.href='/';"
                        src="{{ asset('logo.svg') }}"
                        alt="Mark Dynamics Indonesia"
                        class="w-32 py-4 cursor-pointer lg:py-0 lg:w-40">
                    <div class="hidden text-xs font-medium text-white lg:flex">
                        <div @mouseover="about = true" @mouseleave="about = false" class="relative w-auto px-6 py-10 cursor-pointer">
                            <a href="#">{{ __('custom.about-us') }}</a>
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
                    <div class="flex items-center gap-6 lg:hidden">
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
            </div> --}}
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
