<div>
    <div x-data="{ tab: 'id' }" class="h-screen px-2 py-20 bg-gray-300">
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg md:max-w-lg">
            <div class="md:flex">
                <div x-cloax class="w-full px-4">
                    <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-600">Add documents</span> </div>
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-4 px-6 mt-3 py-1.5  mb-3">
                        <div @click="tab = 'id'"
                            :class="{'bg-gray-300' : tab === 'id', 'bg-gray-200 text-gray-400' : tab !== 'id'}"
                            class="col-span-2 py-4 font-semibold text-center uppercase rounded-md cursor-pointer">ID ( {{ Str::limit('INDONESIAN
                            LANGUAGE', 8) }} ) </div>
                        <div @click="tab = 'en'"
                            :class="{'bg-gray-300' : tab === 'en', 'bg-gray-200 text-gray-400' : tab !== 'en'}"
                            class="col-span-2 py-4 font-semibold text-center uppercase rounded-md cursor-pointer">EN ( {{ Str::limit('ENGLISH
                            LANGUAGE', 8) }} )</div>
                        <div @click="tab = 'cn'"
                            :class="{'bg-gray-300' : tab === 'cn', 'bg-gray-200 text-gray-400' : tab !== 'cn'}"
                            class="col-span-2 py-4 font-semibold text-center uppercase rounded-md cursor-pointer">CN ( {{ Str::limit('CHINESE
                            LANGUAGE', 8) }} )</div>
                    </div>

                    <div x-show="tab === 'id'"  x-cloak>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model="title_id" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Judul
                            </label>
                        </div>
                    </div>

                    <div x-show="tab === 'en'"  x-cloak>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model="title_en" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="title_en" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Title
                            </label>
                        </div>
                    </div>

                    <div x-show="tab === 'cn'"  x-cloak>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model="title_cn" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="title_cn" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                标题
                            </label>
                        </div>
                    </div>

                    <div>
                        <div class="relative w-full h-10 mb-5 ">
                            <select wire:model="year" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">
                            @foreach ($years as $item)
                                <option>{{ $item->year }}</option>
                            @endforeach

                            </select>
                            <label for="title_cn" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                Year
                            </label>
                        </div>
                    </div>

                    <div class="p-3">

                        <div class="mb-2"> <span>Attachments</span>
                            <div class="relative flex items-center justify-center h-40 bg-white border-2 border-gray-400 border-dashed rounded-lg hover:cursor-pointer">
                                <div class="absolute">
                                    <div wire:loading.remove wire:target="file" class="flex flex-col items-center ">
                                        @if ($file == null)
                                        <span class="block font-normal text-gray-400">Attach you files here</span>
                                        <span class="block font-normal text-gray-400">or</span>
                                        <span class="block font-normal text-blue-400">Browse files</span>
                                        @else
                                        <span class="block font-normal text-gray-400">Has Attach</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        @endif

                                    </div>
                                    <div wire:loading wire:target="file" class="flex flex-col items-center ">
                                        <img class="w-1/5 mx-auto " src="{{ asset('loading.gif') }}" >
                                    </div>
                                </div> <input wire:model="file" type="file" class="w-full h-full opacity-0" name="">
                            </div>
                            <div class="flex items-center justify-between text-gray-400"> <span>Accepted file type:.doc, .pdf, img only</span> <span class="flex items-center "><i class="mr-1 fa fa-lock"></i> secure</span> </div>
                        </div>
                        <div class="pb-3 mt-3 text-center"> <button class="w-full h-12 text-lg text-white bg-blue-600 rounded hover:bg-blue-700">Create</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
