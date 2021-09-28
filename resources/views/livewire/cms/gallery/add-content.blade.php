<div class="py-12">
    <div x-data="{ tab: 'id' }" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col mx-auto overflow-hidden bg-white shadow-lg md:w-3/6 rounded-xl">
            <div class="px-12 py-5">
                <h2 class="text-2xl font-semibold text-center text-gray-800">Upload and organize gallery images!</h2>
            </div>

            <div class="items-center w-full bg-gray-200">
                <div class="items-center px-5 py-6 space-y-3 overflow-visible">
                    <div class="relative w-full h-10 mb-5 ">
                        <select wire:model="is_product"
                            class="w-full h-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">
                            <option value="false" {!! $is_product == false ? 'selected' : '' !!}>False</option>
                            <option value="true" {!! $is_product == true ? 'selected' : '' !!} selected="selected">True</option>
                        </select>

                        <label for="email" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                          Is Product
                        </label>
                    </div>

                    <div class="flex items-center justify-center w-full bg-grey-lighter">
                        {{-- @dump($img); --}}
                        <label @if ($img)
                                style=" background-image: url('{{ $img->temporaryUrl() }}');
                                        background-size: 100%;
                                        background-repeat: no-repeat;
                                        background-position: center"

                                @endif
                                @if (!$img && isset($image->img))
                                    style=" background-image: url('{{ asset( $image->img ) }}');
                                        background-size: 100%;
                                        background-repeat: no-repeat;
                                        background-position: center"
                                @endif
                            class="flex flex-col items-center w-full h-screen px-4 py-6 tracking-wide uppercase border border-gray-400 rounded-lg shadow-lg cursor-pointer text-blue border-blue hover:bg-blue-400 hover:text-white">

                            <div wire:loading wire:target="img" class="flex flex-col items-center my-auto">
                                <img class="w-1/5 mx-auto " src="{{ asset('loading.gif') }}" >
                            </div>
                            <span wire:loading.remove wire:target="img" class="my-auto">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a Picture</span>
                            </span>
                            <input wire:model="img" type='file' class="hidden" />
                        </label>
                    </div>
                    @error('img') <span class="text-red-500">{{ $message }}</span> @enderror
                    <div class="items-center text-center">
                    <button wire:click="save"
                        class="px-12 py-2 mx-auto my-4 text-lg text-white bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl">Save
                        now</button>
                    </div>
                </div>
            </div>
                <div class="flex items-center justify-center h-20">
                    <a href="{{ route('cms-gallery.index') }}" class="text-gray-600">Maybe later</a>
                </div>
            </div>
        </div>
    </div>

