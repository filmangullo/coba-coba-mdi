<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('Career') }}
                </h2>
            </div>

            <div>
                <a href="{{ route('career.index') }}" class="float-right px-10 py-2 text-sm text-gray-600 border border-gray-600 rounded-md focus:outline-none hover:bg-blue-50">Back</a>
            </div>
        </div>

    </x-slot>

    @livewire('cms.career.add-content', [
        'event'     => null
    ])
</x-app-layout>
