<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('Slider') }}
                </h2>
            </div>

            <div class="grid grid-cols-2">
                <div>
                    @include('cms.component.menu-dropdown')
                </div>
                <div>
                    <a href="{{ route('cms-slider.index') }}" class="float-right px-10 py-2 text-sm text-gray-600 border border-gray-600 rounded-md focus:outline-none hover:bg-blue-50">Back</a>
                </div>
            </div>
        </div>

    </x-slot>

    @livewire('cms.slider.add-content', [
        'slider'     => null
    ])
</x-app-layout>


