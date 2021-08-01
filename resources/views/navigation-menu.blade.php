<nav x-data="{ open: false }" class="fixed w-20 h-full bg-purple-800 border-b border-gray-100 rounded-l-lg">
    <!-- Primary Navigation Menu -->
    <div class="grid-cols-1 m-auto text-center">
        <!-- Logo -->
        <div class="flex px-4 py-2 m-auto space-x-8">
            <a href="{{ route('dashboard') }}">
                <x-jet-application-mark class="block w-auto h-9" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex px-5 py-4 m-auto space-x-8">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <img src="{{ asset('icon/speedometer.svg') }}" alt="dashboard" class="w-7" >
            </x-jet-nav-link>
        </div>

        <div class="flex px-5 py-4 m-auto space-x-8 mt-100">
            <x-jet-nav-link href="{{ route('cms-csr.index') }}" :active="request()->routeIs(['cms-csr.index', 'cms-awards.index', 'cms-certificates.index', 'cms-environment.index'])">
                <img src="{{ asset('icon/cms.svg') }}" alt="newspaper" class="m-auto w-7" >
            </x-jet-nav-link>
        </div>

        <div class="flex px-5 py-4 m-auto space-x-8 mt-100">
            <x-jet-nav-link href="{{ route('cms-gallery.index') }}" :active="request()->routeIs(['cms-gallery.index'])">
                <img src="{{ asset('icon/gallery.svg') }}" alt="newspaper" class="m-auto w-7" >
            </x-jet-nav-link>
        </div>

        <div class="flex px-5 py-4 m-auto space-x-8">
            <x-jet-nav-link href="{{ route('cms-news.index') }}" :active="request()->routeIs(['cms-news.index'])">
                <img src="{{ asset('icon/newspaper.svg') }}" alt="newspaper" class="m-auto w-7" >
            </x-jet-nav-link>
        </div>

        <div class="flex px-5 py-4 m-auto space-x-8 mt-100">
            <x-jet-nav-link href="{{ route('cms-career.index') }}" :active="request()->routeIs(['cms-career.index'])">
                <img src="{{ asset('icon/curriculum-vitae.svg') }}" alt="career" class="m-auto w-7" >
            </x-jet-nav-link>
        </div>

        <div class="px-5 py-4 m-auto space-x-8 flex-end">
            <!-- Teams Dropdown -->
            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="relative ml-3">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                    {{ Auth::user()->currentTeam->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                        {{ __('Create New Team') }}
                                    </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            @endif

            <!-- Settings Dropdown -->
            <div class="relative m-auto">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        </div>
    </div>


    <!-- Responsive Navigation Menu -->

</nav>
