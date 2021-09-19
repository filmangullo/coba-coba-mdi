<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('Content Management System > Create') }}
                </h2>
            </div>

			<div class="grid grid-cols-1">
                <div>
                    <a href="{{ route('cms.index') }}" class="float-right px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Back</a>
                </div>
            </div>
        </div>

    </x-slot>
	<div class="container py-8 mx-auto">
		@livewire('cms.create', compact('menu'))
	</div>
</x-app-layout>
