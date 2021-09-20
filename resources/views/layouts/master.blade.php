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
        <script src="{{ asset('js/frontend/jarallax.min.js') }}"></script>
        <script src="https://unpkg.com/jarallax@1/dist/jarallax-video.min.js"></script>
        {{-- <link rel="stylesheet" href="{{asset('css/pace-theme-default.min.css')}}"/> --}}

        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            [x-cloak] { display: none; }
        </style>
        @stack('styles')
    </head>
    <body class="relative" x-data="{ about: false, investor: false, sustain: false, corporate: false, reports : false, extra : false, menu : false}">
        <div class="antialiased font-mark text-hitam">
            <div class="fixed z-50 w-full bg-white shadow">
                <div class="px-4 mx-auto max-w-7xl sm:px-6">
                  <div class="flex items-center justify-between py-6 lg:justify-start lg:space-x-10">
                    <div class="flex justify-between lg:w-0 lg:flex-1">
                      <a href="#" class="outline-none">
                        <span class="sr-only">Mark Dynamics</span>
                        <img class="w-auto h-8 sm:h-10" onclick="location.href='/';" src="{{ asset('img/logo-black.svg') }}" alt="Mark Dynamics Indonesia">
                      </a>
                    </div>
                    {{-- Language Mobile --}}
                    {{-- <div class="lg:hidden">
                        <div class="flex items-center w-20 rounded-md">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">ID</a>
                        </div>
                    </div> --}}
                    <div class="-my-2 -mr-2 md:hidden">
                      <button x-on:click="menu = !menu" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                    <nav class="items-center hidden space-x-10 md:flex">
                      <div class="relative">
                        <button x-on:click="about = !about" type="button" class="inline-flex items-center text-sm font-medium text-gray-500 truncate bg-white rounded-md group hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.about-us')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : about === true, 'text-gray-400 group-hover:text-gray-500' : about === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                        class="absolute right-0 z-10 w-screen max-w-xs px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                            @php
                                use App\Models\Menu;
                            @endphp
                              @foreach (Menu::where('type', 'about')->orderBy('name_en', 'asc')->where('active', true)->get() as $body)
                                <a href="{{ url('/about/' . $body->slug) }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                    <p class="text-sm font-medium text-gray-900">
                                        @if(App::isLocale('en'))
                                        {!! $body->name_en !!}
                                    @elseif(App::isLocale('id'))
                                        {!! $body->name_id !!}
                                    @elseif(App::isLocale('cn'))
                                        {!! $body->name_cn !!}
                                    @endif
                                    </p>
                                </a>
                              @endforeach

                              {{-- <a href="{{ route('our-business') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.our-business')
                                  </p>
                              </a>

                              <a href="{{ route('vision&mission') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.vision-mission')
                                  </p>
                              </a>

                              <a href="{{ route('milestones') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.milestones')
                                  </p>
                              </a>

                              <a href="{{ route('awards') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.awards')
                                  </p>
                              </a> --}}

                              {{-- <a href="{{ route('certificates') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                <p class="text-sm font-medium text-gray-900">
                                  @lang('custom.certificate')
                                </p>
                              </a> --}}
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="{{ route('gallery') }}" class="hidden text-sm font-medium text-gray-500 xl:block hover:text-gray-900">
                        @lang('custom.products-gallery')
                      </a>

                      @foreach (Menu::where('type', '!=','about')->where('parent',null)->orderBy('name_en', 'asc')->where('active', true)->get() as $body)
                        @if($body->type == 'page')
                        <a href="{{ url($body->slug) }}" class="hidden text-sm font-medium text-gray-500 xl:block hover:text-gray-900">
                            @lang('custom.products-gallery')
                        </a>
                        @else
                        <div x-data="{open: false}" class="relative">
                            <button x-on:click="open = !open" type="button" class="inline-flex items-center text-sm font-medium text-gray-500 truncate bg-white rounded-md group hover:text-gray-900 focus:outline-none" aria-expanded="false">
                              <span>
                                @if(App::isLocale('en'))
                                    {!! $body->name_en !!}
                                @elseif(App::isLocale('id'))
                                    {!! $body->name_id !!}
                                @elseif(App::isLocale('cn'))
                                    {!! $body->name_cn !!}
                                @endif
                              </span>
                              <svg :class="{ 'text-mark-default -rotate-180' : open === true, 'text-gray-400 group-hover:text-gray-500' : open === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                            </button>
                            <div x-show="open === true" x-on:click.away="open = false" x-cloak
                            x-transition:enter="transition-all ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition-all ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            class="absolute right-0 z-10 w-screen max-w-xs px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                              <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white rounded-lg sm:gap-8 sm:p-8">
                                    @foreach($body->child as $m)
                                        @if($m->type == 'page')
                                            <a href="{{ url($body->slug .'/'. $m->slug) }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                                <p class="text-sm font-medium text-gray-900">
                                                    @if(App::isLocale('en'))
                                                        {!! $m->name_en !!}
                                                    @elseif(App::isLocale('id'))
                                                        {!! $m->name_id !!}
                                                    @elseif(App::isLocale('cn'))
                                                        {!! $m->name_cn !!}
                                                    @endif
                                                </p>
                                            </a>
                                        @else
                                            <div x-data="{open:false}" x-on:click="open = !open" class="relative flex items-center justify-between p-3 -m-3 rounded-lg cursor-pointer hover:bg-gray-100">
                                                <p class="text-sm font-medium text-gray-900">
                                                    @if(App::isLocale('en'))
                                                        {!! $m->name_en !!}
                                                    @elseif(App::isLocale('id'))
                                                        {!! $m->name_id !!}
                                                    @elseif(App::isLocale('cn'))
                                                        {!! $m->name_cn !!}
                                                    @endif
                                                </p>

                                                <svg :class="{ 'text-mark-default' : open === true, 'text-gray-400 group-hover:text-gray-500' : open === false }" class="w-3 h-3 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                                <div
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="transform opacity-0 scale-95"
                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="transform opacity-100 scale-100"
                                                x-transition:leave-end="transform opacity-0 scale-95"
                                                x-cloak x-show="open === true" @click.away="open = false" class="absolute z-10 grid w-screen max-w-xs gap-6 px-5 py-6 mr-5 transform bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 sm:gap-8 sm:p-8 right-full lg:left-full -top-5 lg:ml-5">
                                                    @foreach($m->child as $sm)
                                                        <a href="{{ url($body->slug .'/'. $m->slug .'/'. $sm->slug) }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                                            <p class="text-sm font-medium text-gray-900">
                                                                @if(App::isLocale('en'))
                                                                    {!! $sm->name_en !!}
                                                                @elseif(App::isLocale('id'))
                                                                    {!! $sm->name_id !!}
                                                                @elseif(App::isLocale('cn'))
                                                                    {!! $sm->name_cn !!}
                                                                @endif
                                                            </p>
                                                        </a>
                                                    @endforeach

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                </div>
                              </div>
                            </div>
                        @endif


                      @endforeach


                      <div class="relative">
                        <button x-on:click="investor = !investor" type="button" class="inline-flex items-center text-sm font-medium text-gray-500 truncate bg-white rounded-md group hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.investor')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : investor === true, 'text-gray-400 group-hover:text-gray-500' : investor === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                        class="absolute right-0 z-10 w-screen max-w-xs px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 px-5 py-6 bg-white rounded-lg sm:gap-8 sm:p-8">
                                <div x-on:click="corporate = !corporate" class="relative flex items-center justify-between p-3 -m-3 rounded-lg cursor-pointer hover:bg-gray-100">
                                    <p class="text-sm font-medium text-gray-900">
                                        @lang('custom.corporate')
                                    </p>

                                    <svg :class="{ 'text-mark-default' : corporate === true, 'text-gray-400 group-hover:text-gray-500' : corporate === false }" class="w-3 h-3 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                    <div
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-cloak x-show="corporate === true" @click.away="corporate = false" class="absolute z-10 grid w-screen max-w-xs gap-6 px-5 py-6 mr-5 transform bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 sm:gap-8 sm:p-8 right-full lg:left-full -top-5 lg:ml-5">
                                        <a href="{{ route('corporate-governanc.board-members') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                            <p class="text-sm font-medium text-gray-900">
                                                @lang('custom.board-members')
                                            </p>
                                        </a>
                                        <a href="{{ route('corporate-governanc.organization-structure') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                            <p class="text-sm font-medium text-gray-900">
                                                @lang('custom.organization')
                                            </p>
                                        </a>
                                        <a href="{{ route('corporate-governanc.audit-comittee') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                            <p class="text-sm font-medium text-gray-900">
                                                @lang('custom.audit')
                                            </p>
                                        </a>
                                    </div>
                                </div>
                              <a href="{{ route('shareholders') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.shareholders')
                                  </p>
                              </a>

                              <a href="{{ route('financial-highlight') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.financial-highlight')
                                  </p>
                              </a>

                              <div x-on:click="reports = !reports" class="relative flex items-center justify-between p-3 -m-3 rounded-lg cursor-pointer hover:bg-gray-100">
                                <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.report')
                                </p>

                                <svg :class="{ 'text-mark-default' : reports === true, 'text-gray-400 group-hover:text-gray-500' : reports === false }" class="w-3 h-3 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>
                                <div
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-cloak x-show="reports === true" @click.away="reports = false" class="absolute z-10 grid w-screen max-w-xs gap-6 px-5 py-6 mr-5 transform bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 sm:gap-8 sm:p-8 right-full lg:left-full -top-5 lg:ml-5">
                                    <a href="{{ route('financial-report') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.financial-report')
                                        </p>
                                    </a>
                                    <a href="{{ route('annual') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.annual')
                                        </p>
                                    </a>
                                    <a href="{{ route('public') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.pubex')
                                        </p>
                                    </a>
                                    <a href="{{ route('dividend') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                        <p class="text-sm font-medium text-gray-900">
                                            @lang('custom.dividend')
                                        </p>
                                    </a>
                                </div>
                            </div>

                              <a href="{{ route('annual-meeting') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.annual-general')
                                  </p>
                              </a>

                              <a href="{{ route('prospectus') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                <p class="text-sm font-medium text-gray-900">
                                  @lang('custom.prospectus')
                                </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="relative">
                        <button x-on:click="sustain = !sustain" type="button" class="inline-flex items-center text-sm font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.sustainability')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : sustain === true, 'text-gray-400 group-hover:text-gray-500' : sustain === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                        class="absolute right-0 z-10 w-screen max-w-xs px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                              <a href="{{ route('csr') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.csr')
                                  </p>
                              </a>

                              <a href="{{ route('environment') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.environment')
                                  </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="relative xl:hidden">
                        <button x-on:click="extra = !extra" type="button" class="inline-flex items-center text-sm font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none" aria-expanded="false">
                          <span>@lang('custom.extra')</span>
                          <svg :class="{ 'text-mark-default -rotate-180' : extra === true, 'text-gray-400 group-hover:text-gray-500' : extra === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                        class="absolute right-0 z-10 w-screen max-w-xs px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                          <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                              <a href="{{ route('gallery') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.products-gallery')
                                  </p>
                              </a>

                              <a href="{{ route('career') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.career')
                                  </p>
                              </a>

                              <a href="{{ route('kontak') }}" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-100">
                                  <p class="text-sm font-medium text-gray-900">
                                    @lang('custom.contact')
                                  </p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="{{ route('career') }}" class="hidden text-sm font-medium text-gray-500 xl:block hover:text-gray-900">
                        @lang('custom.career')
                      </a>

                      <a href="{{ route('kontak') }}" class="hidden text-sm font-medium text-gray-500 xl:block hover:text-gray-900">
                        @lang('custom.contact')
                      </a>
                    </nav>
                    {{-- Language --}}
                    <div class="hidden lg:block">
                        <div class="flex items-center rounded-md w-28">
                            <a href="{{ url('lang/en') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('en')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-l-md">EN</a>
                            <a href="{{ url('lang/id') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('id')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none">ID</a>
                            <a href="{{ url('lang/cn') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('cn')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">中文</a>
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
                x-show="menu === true" x-on:click.away="menu = false" class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top-right transform lg:hidden">
                  <div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
                    <div class="px-5 pt-5 pb-6">
                      <div class="flex items-center justify-between">
                        <div>
                          <img class="w-auto h-8" onclick="location.href='/';" src="{{ asset('img/logo-black.svg') }}" alt="Mark Dynamics Indonesia">
                        </div>
                        <div class="-mr-2">
                          <button x-on:click="menu = false" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="mt-6">
                        <nav class="grid gap-y-8">
                          <a x-on:click="about = !about" href="#" class="flex items-center justify-between p-3 -m-3 rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">
                              @lang('custom.about-us')
                            </span>
                            <svg :class="{ 'text-mark-default -rotate-180' : about === true, 'text-gray-400 group-hover:text-gray-500' : about === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                          x-cloak x-show="about === true" x-on:click.away="about = false" class="grid px-5 gap-y-8">
                            {{-- <a href="{{ route('ceo-message') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.ceo-message')
                              </span>
                            </a> --}}
                            <a href="{{ route('our-business') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.our-business')
                              </span>
                            </a>
                            <a href="{{ route('vision&mission') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.vision-mission')
                              </span>
                            </a>
                            <a href="{{ route('milestones') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.milestones')
                              </span>
                            </a>
                            <a href="{{ route('awards') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.awards')
                              </span>
                            </a>
                            <a href="{{ route('certificates') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                  @lang('custom.certificates')
                                </span>
                              </a>
                          </div>

                          <a x-on:click="investor = !investor" href="#" class="flex items-center justify-between p-3 -m-3 rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">
                              @lang('custom.investor')
                            </span>
                            <svg :class="{ 'text-mark-default -rotate-180' : investor === true, 'text-gray-400 group-hover:text-gray-500' : investor === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                          x-cloak x-show="investor === true" x-on:click.away="investor = false" class="grid px-5 gap-y-8">
                              <a x-on:click="corporate = !corporate" href="#" class="flex items-center justify-between p-3 -m-3 rounded-md hover:bg-gray-50">
                                <span class="text-base font-medium text-gray-900">
                                  @lang('custom.corporate')
                                </span>
                                <svg :class="{ 'text-mark-default -rotate-180' : corporate === true, 'text-gray-400 group-hover:text-gray-500' : corporate === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                            x-cloak x-show="corporate === true" x-on:click.away="corporate = false" class="grid px-5 gap-y-8">
                                <a href="{{ route('corporate-governanc.board-members') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.board-members')
                                </span>
                                </a>
                                <a href="{{ route('corporate-governanc.organization-structure') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.organization')
                                </span>
                                </a>
                                <a href="{{ route('corporate-governanc.audit-comittee') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.audit')
                                </span>
                                </a>
                            </div>

                            <a href="{{ route('shareholders') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.shareholders')
                              </span>
                            </a>
                            <a href="{{ route('financial-highlight') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.financial-highlight')
                              </span>
                            </a>

                            <a x-on:click="reports = !reports" href="#" class="flex items-center justify-between p-3 -m-3 rounded-md hover:bg-gray-50">
                                <span class="text-base font-medium text-gray-900">
                                  @lang('custom.report')
                                </span>
                                <svg :class="{ 'text-mark-default -rotate-180' : reports === true, 'text-gray-400 group-hover:text-gray-500' : reports === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                            x-cloak x-show="reports === true" x-on:click.away="reports = false" class="grid px-5 gap-y-8">
                                <a href="{{ route('financial-report') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.financial-report')
                                </span>
                                </a>
                                <a href="{{ route('annual') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.annual')
                                </span>
                                </a>
                                <a href="{{ route('public') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.pubex')
                                </span>
                                </a>
                                <a href="{{ route('dividend') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <span class="text-base font-medium text-gray-900">
                                    @lang('custom.dividend')
                                </span>
                                </a>
                            </div>

                            <a href="{{ route('annual-meeting') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.annual-general')
                              </span>
                            </a>
                            <a href="{{ route('prospectus') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.prospectus')
                              </span>
                            </a>
                          </div>

                          <a x-on:click="sustain = !sustain" href="#" class="flex items-center justify-between p-3 -m-3 rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">
                              @lang('custom.sustainability')
                            </span>
                            <svg :class="{ 'text-mark-default -rotate-180' : sustain === true, 'text-gray-400 group-hover:text-gray-500' : sustain === false }" class="w-5 h-5 ml-2 transition-all duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                          x-cloak x-show="sustain === true" x-on:click.away="sustain = false" class="grid px-5 gap-y-8">
                            <a href="{{ route('csr') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.csr')
                              </span>
                            </a>
                            <a href="{{ route('environment') }}" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
                              <!-- Heroicon name: outline/chart-bar -->
                              <span class="text-base font-medium text-gray-900">
                                @lang('custom.environment')
                              </span>
                            </a>
                          </div>
                        </nav>
                      </div>
                    </div>
                    <div class="px-5 py-6 space-y-6">
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
                                <a href="{{ url('lang/cn') }}" class="w-6/12 py-1 text-center text-xs font-semibold @if(App::isLocale('cn')) text-white bg-mark-default @else text-gray-400 bg-gray-200 @endif focus:outline-none rounded-r-md">中文</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="min-h-screen">
                @yield('content')
            </div>

            {{-- Footer --}}
            <div class="bottom-0 text-white border-t border-gray-300 bg-hitam">
                <a href="/" class="block">
                    <img  class="w-24 pt-5 mx-auto md:hidden" src="{{ asset('img/logo.png') }}">
                </a>
                <div class="grid items-center grid-cols-2 gap-6 px-4 py-10 mx-auto text-xs font-medium md:gap-0 md:grid-cols-5 justify-items-center max-w-7xl sm:px-6 lg:px-8">
                    <a class="text-center" href="{{ route('prospectus') }}">@lang('custom.prospectus')</a>
                    <a class="text-center" href="{{ route('financial-report') }}">@lang('custom.financial-report')</a>
                    <a href="/" class="block">
                        <img class="hidden w-24 md:block" src="{{ asset('img/logo.png') }}">
                    </a>
                    <a class="text-center" href="{{ route('career') }}">@lang('custom.career')</a>
                    <a class="text-center" href="{{ route('kontak')}}">@lang('custom.contact')</a>
                </div>
                <div class="pb-6 text-xs text-center"></div>
            </div>
        </div>
        @livewireScripts
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
