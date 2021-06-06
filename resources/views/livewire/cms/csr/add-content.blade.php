<div class="py-12">
    <div x-data="{ tab: 'id' }" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col mx-auto overflow-hidden bg-white shadow-lg md:w-3/6 rounded-xl">
            <div class="px-12 py-5">
                <h2 class="text-2xl font-semibold text-center text-gray-800">Upload and CSR content!</h2>
            </div>

            <div class="items-center w-full bg-gray-200">
                <div class="items-center px-5 py-6 space-y-3 overflow-visible">
                    <div class="flex items-center justify-center w-full bg-grey-lighter">
                        {{-- @dump($img); --}}
                        <label @if ($img) style=" background-image: url('{{ $img->temporaryUrl() }}');
                                        background-size: 100%;
                                        background-repeat: no-repeat;
                                        background-position: center" @endif @if (!$img && isset($image->img))
                            style=" background-image: url('{{ asset( $image->img ) }}');
                            background-size: 100%;
                            background-repeat: no-repeat;
                            background-position: center"
                            @endif
                            class="flex flex-col items-center w-full h-screen px-4 py-6 tracking-wide uppercase border border-gray-400 rounded-lg shadow-lg cursor-pointer text-blue border-blue hover:bg-blue-400 hover:text-white">
                            <span class="my-auto">
                                <svg class="w-8 h-8 mx-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                            </span>
                            <input wire:model="img" type='file' class="hidden" />
                        </label>
                    </div>

                    <div class="relative w-full h-10 mb-5 ">
                        <input wire:model="date" type="date"
                            class="w-full h-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">

                        <label for="date" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                            Date
                        </label>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-6 gap-4 px-6 mt-3 py-1.5">
                        <div @click="tab = 'id'"
                            :class="{'bg-gray-300' : tab === 'id', 'bg-gray-200 text-gray-400' : tab !== 'id'}"
                            class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">ID ( INDONESIAN
                            LANGUAGE ) </div>
                        <div @click="tab = 'en'"
                            :class="{'bg-gray-300' : tab === 'en', 'bg-gray-200 text-gray-400' : tab !== 'en'}"
                            class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">EN ( ENGLISH
                            LANGUAGE )</div>
                    </div>

                    <div x-show="tab === 'id'">
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model="title_id" type="text"
                                class="w-full h-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">

                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                Judul
                            </label>
                        </div>

                        <div class="relative w-full h-5">
                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                Deskripsi
                            </label>
                        </div>
                        <div class="w-full mb-5 ">
                            <textarea wire:model="description_id" id="editor1" rows="4" wire:ignore
                                class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">{!! $description_id !!}</textarea>
                        </div>
                    </div>

                    <div x-show="tab === 'en'" x-cloak>
                        <div class="relative w-full h-10 mb-5 ">
                            <input wire:model="title_en" type="text"
                                class="w-full h-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">

                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                Title
                            </label>
                        </div>

                        <div class="relative w-full h-5">
                            <label for="title_id" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                Description
                            </label>
                        </div>
                        <div class="w-full mb-5" >
                            <textarea wire:model="description_en" id="editor2" rows="4" wire:ignore
                                class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">{!! $description_en !!}</textarea>
                        </div>
                    </div>

                    <div class="items-center text-center">
                        <button wire:click="save"
                            class="px-12 py-2 mx-auto my-4 text-lg text-white bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl">Save
                            now</button>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center h-20">
                <a href="{{ route('cms-csr.index') }}" class="text-gray-600">Maybe later</a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script>
    const editor1 = CKEDITOR.replace( 'editor1' );
    editor1.on('change', function(event) {
        console.log(event.editor.getData());
        @this.set('description_id', event.editor.getData());
    });

    const editor2 = CKEDITOR.replace( 'editor2' );
    editor2.on('change', function(event) {
        console.log(event.editor.getData());
        @this.set('description_en', event.editor.getData());
    });
</script>
@endpush
