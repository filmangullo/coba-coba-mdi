<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div>
                        <x-jet-application-logo class="block w-auto h-12" />
                    </div>

                    <div class="mt-8 mb-4 text-2xl">
                        Welcome to Mark Dynamics Indonesia application!
                    </div>

                    @livewire('cms.message.list-content')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
