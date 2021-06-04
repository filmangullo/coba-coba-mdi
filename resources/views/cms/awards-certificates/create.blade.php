<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('Awards Certificates') }}
                </h2>
            </div>

            <div class="grid grid-cols-2">
                <div>
                    @include('cms.component.menu-dropdown')
                </div>
                <div>
                    <a href="{{ route('cms-awards-certificates.index') }}" class="float-right px-10 py-2 text-sm text-gray-600 border border-gray-600 rounded-md focus:outline-none hover:bg-blue-50">Back</a>
                </div>
            </div>
        </div>

    </x-slot>

    @livewire('cms.awards-certificates.add-content', [
        'awards_certificates'     => null
    ])

    {{-- @push('scripts')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor1');

        CKEDITOR.replace('editor2', options);
    </script>
    @endpush --}}
</x-app-layout>


