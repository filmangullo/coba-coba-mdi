<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('Financial Report') }}
                </h2>
            </div>

            <div class="grid grid-cols-2">
                <div>
                    @include('cms.component.menu-dropdown')
                </div>
                <div>
                    <a href="{{ route('cms-fr.create') }}" class="float-right px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Add Financial ...</a>
                </div>
            </div>
        </div>

    </x-slot>

    @livewire('cms.financial-report.list-content')
</x-app-layout>
