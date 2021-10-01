<div>
    <div x-data="{ tab: 'id' }" class="h-full px-2 py-20 bg-gray-300">
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
                            <input wire:model.debounce.700ms="title_id" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Judul
                            </label>
                        </div>

                        <div class="relative w-full mb-5 ">
                            <textarea wire:model.debounce.700ms="description_id" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue"></textarea>

                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Deskripsi
                            </label>
                        </div>

                        <div>
                            <div class="relative w-full h-10 mb-5 ">
                                <input wire:model.debounce.700ms="button_id" type="text"
                                    class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                                <label for="button_id" class="absolute px-1 text-xs transition-all bg-white left-2">
                                    Nama Tombol
                                </label>
                            </div>
                        </div>

                        <div>
                            <div class="relative w-full h-10 mb-5 ">
                                <input wire:model.debounce.700ms="button1_id" type="text"
                                    class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                                <label for="button1_id" class="absolute px-1 text-xs transition-all bg-white left-2">
                                    Nama Tombol 1
                                </label>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab === 'en'"  x-cloak>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model.debounce.700ms="title_en" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="title_en" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Title
                            </label>
                        </div>

                        <div class="relative w-full mb-5 ">
                            <textarea wire:model.debounce.700ms="description_en" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue"></textarea>

                            <label for="title_en" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Description
                            </label>
                        </div>

                        <div>
                            <div class="relative w-full h-10 mb-5 ">
                                <input wire:model.debounce.700ms="button_en" type="text"
                                    class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                                <label for="button_en" class="absolute px-1 text-xs transition-all bg-white left-2">
                                    Button Name
                                </label>
                            </div>
                        </div>

                        <div>
                            <div class="relative w-full h-10 mb-5 ">
                                <input wire:model.debounce.700ms="button1_en" type="text"
                                    class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                                <label for="button1_en" class="absolute px-1 text-xs transition-all bg-white left-2">
                                    Button Name 1
                                </label>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab === 'cn'"  x-cloak>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model.debounce.700ms="title_cn" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="title_cn" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                标题
                            </label>
                        </div>

                        <div class="relative w-full mb-5 ">
                            <textarea wire:model.debounce.700ms="description_cn" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue"></textarea>

                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-white left-2">
                                描述
                            </label>
                        </div>

                        <div>
                            <div class="relative w-full h-10 mb-5 ">
                                <input wire:model.debounce.700ms="button_cn" type="text"
                                    class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                                <label for="button_cn" class="absolute px-1 text-xs transition-all bg-white left-2">
                                    按钮名称
                                </label>
                            </div>
                        </div>

                        <div>
                            <div class="relative w-full h-10 mb-5 ">
                                <input wire:model.debounce.700ms="button1_cn" type="text"
                                    class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                                <label for="button1_cn" class="absolute px-1 text-xs transition-all bg-white left-2">
                                    按钮名称 1
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        @error('title_id') <span class="text-xs text-red-500">{{ $message }}</span> <br>@enderror
                        @error('title_en') <span class="text-xs text-red-500">{{ $message }}</span> <br>@enderror
                        @error('title_cn') <span class="text-xs text-red-500">{{ $message }}</span> <br>@enderror
                        @error('description_id') <span class="text-xs text-red-500">{{ $message }}</span> <br>@enderror
                        @error('description_en') <span class="text-xs text-red-500">{{ $message }}</span> <br>@enderror
                        @error('description_cn') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model.debounce.700ms="url" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="url" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Url
                            </label>
                        </div>
                        @error('url') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model.debounce.700ms="url1" type="text"
                                class="w-full h-full mt-2 transition-all bg-white border-indigo-300 rounded-sm border-blue">

                            <label for="url1" class="absolute px-1 text-xs transition-all bg-white left-2">
                                Url 1
                            </label>
                        </div>
                        @error('url1') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="p-3">
                        <div class="mb-2"> <span>Attachments</span>
                            <div class="relative flex items-center justify-center h-40 bg-white border-2 border-gray-400 border-dashed rounded-lg hover:cursor-pointer">
                                <div class="absolute">
                                    <div wire:loading.remove wire:target="file" class="flex flex-col items-center ">
                                        @if ($file == null && !isset($slider->file))
                                        <span class="block font-normal text-gray-400">Attach you files here</span>
                                        <span class="block font-normal text-gray-400">or</span>
                                        <span class="block font-normal text-blue-400">Browse files</span>
                                        @else
                                            @if (isset($slider->file))
                                            <span class="block font-normal text-gray-400">Has Attach</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                            @else
                                            <span class="block font-normal text-gray-400">Has Attach</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                            @endif
                                        @endif

                                    </div>
                                    <div wire:loading wire:target="file" class="flex flex-col items-center ">
                                        <img class="w-1/5 mx-auto " src="{{ asset('loading.gif') }}" >
                                    </div>
                                </div> <input wire:model="file" type="file" class="w-full h-full opacity-0" name="">
                            </div>
                            <div class="flex items-center justify-between text-gray-400"> <span>Accepted file type:.jpg, .svg, img only</span> <span class="flex items-center "><i class="mr-1 fa fa-lock"></i> secure</span> </div>
                        </div>

                    </div>

                    <div class="py-6 space-y-4 border-b border-gray-300">
                        <div>
                            <div class="font-bold">Panjang Foto</div>
                        </div>
                        <div class="flex items-center justify-around">
                            <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input wire:model="imgWidth" id="penuh" value="full" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="penuh" class="font-medium text-gray-700">Penuh</label>
                                    <p class="text-gray-500">Foto yang ditampilin penuh</p>
                                </div>
                            </div>
                            <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input wire:model="imgWidth" id="setengah" value="half" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="setengah" class="font-medium text-gray-700">Setengah</label>
                                    <p class="text-gray-500">Foto yang ditampilin setengah</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
						<div class="relative flex items-start">
							<div class="flex items-center h-5">
								<input wire:model="active" id="active" name="active" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
							</div>
							<div class="ml-3 text-sm">
								<label for="active" class="font-medium text-gray-700">Active</label>
								<p class="text-gray-500">Apakah page ini aktif atau tidak.</p>
							</div>
						</div>
					</div>

                    <div class="p-3">
                        <div class="pb-3 mt-3 text-center">
                            <button wire:click="save" class="w-full h-12 text-lg text-white bg-blue-600 rounded hover:bg-blue-700">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
