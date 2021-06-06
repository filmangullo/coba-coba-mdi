<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    Career
                </h2>
            </div>

            <div>
                <a href="{{ route('cms-career.create') }}" class="float-right px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Add Career</a>
            </div>
        </div>

    </x-slot>

    @livewire('cms.career.list-content')
</x-app-layout>
