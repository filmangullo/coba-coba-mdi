<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('Shareholder Information') }}
                </h2>
            </div>

            <div class="grid grid-cols-2">
                <div>
                    @include('cms.component.menu-dropdown')
                </div>
                <div>
                    <a href="{{ route('cms-sh.index') }}" class="float-right px-10 py-2 text-sm text-gray-600 border border-gray-600 rounded-md focus:outline-none hover:bg-blue-50">Back</a>
                </div>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    @livewire('cms.shareholder-information.add-content', [
                        'shareholders'       => $query,
                        'info'               => 'Create'
                    ])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
