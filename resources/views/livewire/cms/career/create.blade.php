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

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="grid grid-cols-12 pb-2">
                        <div class="col-span-3 px-3 py-2 text-right">
                            <span>Job Position</span>
                        </div>
                        <div class="col-span-9">
                            <input type="text" class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                        </div>
                    </div>

                    <div class="grid grid-cols-12 py-2">
                        <div class="col-span-3 px-3 py-2 text-right">
                            <span>Brief Description</span>
                        </div>
                        <div class="col-span-9">
                            <textarea class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 py-2">
                        <div class="col-span-3 px-3 py-2 text-right">
                            <span>Publish Date</span>
                        </div>
                        <div class="col-span-3">
                            <input type="date" class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="col-span-3 px-3 py-2 text-right ">
                            <span>Author</span>
                        </div>
                        <div class="col-span-3">
                            <select class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                                @foreach ($author as $item)
                                <option>Hold</option>
                                @endforeach

                                <option>Publish</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 text-gray-500 ">
                        <div id="editor" class="editor"></div>
                        <input type="hidden" id="quill_html" name="name">
                    </div>
                    <div class="mt-5 text-2xl text-right">
                            <button type="button" class="px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
