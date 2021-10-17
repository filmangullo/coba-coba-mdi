<div>
    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ $info }}
                    </h3>
                    <p class="max-w-2xl mt-1 text-sm text-gray-500">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </div>

                <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">


                    <div   class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="photo" class="block text-sm font-medium text-gray-700">
                            Title
                        </label>
                        <div x-data="{ tab: 'id' }" class="mt-1 sm:mt-0 sm:col-span-2" x-cloak>
                            <div class="flex space-x-2">
                                <button x-on:click="tab = 'id" type="button" class="px-10 py-2 text-white bg-gray-500 rounded-t-md hover:bg-gray-600">ID</button>
                                <button x-on:click="tab = 'en'" type="button" class="px-10 py-2 text-white bg-gray-500 rounded-t-md hover:bg-gray-600">EN</button>
                                <button x-on:click="tab = 'cn'" type="button" class="px-10 py-2 text-white bg-gray-500 rounded-t-md hover:bg-gray-600">CN</button>
                            </div>
                            <input x-show="tab === 'id'" wire:model="id_title" name="title_id" type="text" name="first-name" id="first-name" autocomplete="given-name" placeholder="Judul dalam bahasa Indonesia"
                                class="block w-full border-gray-300 shadow-sm rounded-bl-md rounded-br-md rounded-tr-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <input x-show="tab === 'en'" wire:model="en_title" name="title_en" type="text" name="first-name" id="first-name" autocomplete="given-name" placeholder="Title in English"
                                class="block w-full border-gray-300 shadow-sm rounded-bl-md rounded-br-md rounded-tr-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <input x-show="tab === 'cn'" wire:model="cn_title" name="title_cn" type="text" name="first-name" id="first-name" autocomplete="given-name" placeholder="印度尼西亚语标题"
                                class="block w-full border-gray-300 shadow-sm rounded-bl-md rounded-br-md rounded-tr-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            File
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div
                                class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    @if (!$file && !isset($shareholders->file))
                                    <svg wire:loading.remove wire:target='file' class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    @endif
                                    @if($file || isset($shareholders->file))
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    @endif
                                    <img wire:loading wire:target='file' src="{{ asset('loading.gif') }}"  class="mx-auto w-11 h-11">
                                    <div class="flex text-sm text-center text-gray-600">
                                        <label for="file-upload"
                                            class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span class="text-gray-700">click</span> <span>Upload a file</span>
                                            <input wire:model="file" id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        doc, txt, pdf max 10MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>

</div>
