<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('News') }}
                </h2>
            </div>

            <div>
                <a href="{{ route('news.index') }}" class="float-right py-2 text-sm text-gray-600 border border-gray-600 rounded-md px-9 focus:outline-none hover:bg-gray-50">Back</a>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="grid grid-cols-12 pb-2">
                        <div class="col-span-3 py-2">
                            <span>Title</span>
                        </div>
                        <div class="col-span-9">
                            <input type="text" class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                        </div>
                    </div>

                    <div class="grid grid-cols-12 py-2">
                        <div class="col-span-3 py-2">
                            <span>Brief Description</span>
                        </div>
                        <div class="col-span-9">
                            <textarea class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                    </div>

                    <div class="mt-6 text-gray-500">
                        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                        ecosystem to be a breath of fresh air. We hope you love it.
                    </div>
                    <div class="mt-5 text-2xl text-right">

                            <button type="button" class="px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
