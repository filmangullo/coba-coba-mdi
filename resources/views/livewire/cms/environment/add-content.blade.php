<div class="py-12">
    <div x-data="{ tab: 'id' }" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col mx-auto overflow-hidden bg-white shadow-lg rounded-xl">
            <div class="px-12 py-5">
                <h2 class="text-2xl font-semibold text-center text-gray-800">Upload Environment !</h2>
            </div>

            <div class="items-center w-full bg-gray-200">
                <div class="items-center px-5 py-6 space-y-3 overflow-visible">

                    <div class="items-center w-full bg-gray-200">
                        <div class="items-center px-5 py-6 space-y-3 overflow-visible">

                            <div class="grid grid-cols-2 md:grid-cols-9 gap-4 px-6 mt-3 py-1.5">
                                <div @click="tab = 'id'"
                                    :class="{'bg-gray-300' : tab === 'id', 'bg-gray-200 text-gray-400' : tab !== 'id'}"
                                    class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">ID ( INDONESIAN
                                    LANGUAGE ) </div>
                                <div @click="tab = 'en'"
                                    :class="{'bg-gray-300' : tab === 'en', 'bg-gray-200 text-gray-400' : tab !== 'en'}"
                                    class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">EN ( ENGLISH
                                    LANGUAGE )</div>
                                <div @click="tab = 'cn'"
                                    :class="{'bg-gray-300' : tab === 'cn', 'bg-gray-200 text-gray-400' : tab !== 'cn'}"
                                    class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">CN ( CHINESE
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
                                <div class="w-full mb-5" wire:ignore>
                                    <textarea wire:model="description_id" id="editor1" rows="4"
                                        class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue"></textarea>
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
                                    <label for="description_en" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                        Description
                                    </label>
                                </div>
                                <div class="w-full mb-5" wire:ignore>
                                    <textarea wire:model="description_en"  rows="4" id="editor2"
                                        class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue"></textarea>
                                </div>
                            </div>

                            <div x-show="tab === 'cn'" x-cloak>
                                <div class="relative w-full h-10 mb-5 ">
                                    <input wire:model="title_cn" type="text"
                                        class="w-full h-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue">

                                    <label for="title_cn" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                        标题
                                    </label>
                                </div>

                                <div class="relative w-full h-5">
                                    <label for="description_cn" class="absolute px-1 text-xs transition-all bg-gray-200 left-2">
                                        描述
                                    </label>
                                </div>
                                <div class="w-full mb-5" wire:ignore>
                                    <textarea wire:model="description_cn"  rows="4" id="editor3"
                                        class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue"></textarea>
                                </div>
                            </div>
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
                <a href="{{ route('cms-environment.index') }}" class="text-gray-600">Maybe later</a>
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
        @this.set('description_id', event.editor.getData())
    });

    const editor2 = CKEDITOR.replace( 'editor2' );
    editor2.on('change', function(event) {
        console.log(event.editor.getData());
        @this.set('description_en', event.editor.getData())
    });

    const editor3 = CKEDITOR.replace( 'editor3' );
    editor3.on('change', function(event) {
        console.log(event.editor.getData());
        @this.set('description_cn', event.editor.getData())
    });
</script>
@endpush
