<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('News') }}
                </h2>
            </div>

            <div>
                <a href="{{ route('cms-news.index') }}" class="float-right py-2 text-sm text-gray-600 border border-gray-600 rounded-md px-9 focus:outline-none hover:bg-gray-100">Back</a>
            </div>
        </div>

    </x-slot>

    @livewire('cms.news.show-content', [
        'news'      => $news
    ])
</x-app-layout>
