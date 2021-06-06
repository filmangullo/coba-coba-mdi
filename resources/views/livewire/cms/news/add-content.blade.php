<div class="py-12">
    <div x-data="{ tab: 'id' }" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                <div class="grid grid-cols-12 py-2 mx-6">
                    <div class="col-span-3 px-3 py-2 text-right">
                        <span>Date News</span>
                    </div>
                    <div class="col-span-3">
                        <input type="date"
                            wire:model='date_news'
                            class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline"
                            value="{{ $date_news }}">
                    </div>

                    <div class="col-span-3 px-3 py-2 text-right ">
                        <span>Status</span>
                    </div>
                    <div class="col-span-3">
                        <select wire:model='status'
                            class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                            <option value="0">Hold</option>
                            <option value="1">Publish</option>
                        </select>
                    </div>

                </div>

                <div class="grid grid-cols-12 py-2 mx-6">
                    <div class="col-span-3 px-3 py-2 text-right ">
                        <span>Author</span>
                    </div>
                    <div class="col-span-9">
                        <select wire:model="author_id"
                            class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                                <option value="">Select</option>
                                @foreach ($users as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                        </select>
                        @error('author_id') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-12 py-2 mx-6">
                    <div class="col-span-3 px-3 py-2 text-right ">
                        <span>Cover</span>
                    </div>

                    <div class="col-span-9">
                        <input wire:model="cover"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            name="cover" type="file" placeholder="Attack File">
                        @error('cover') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-9 col-start-4 py-2">
                        @if ($cover)
                            <div class="h-48 gap-4">
                                <img src="{{ $cover->temporaryUrl() }}" class="h-full m-auto">
                            </div>
                        @endif

                        @if (!$cover && isset($news->cover))

                            <div class="h-48 gap-4">
                                <img src="{{ asset( $news->cover) }}" class="h-full m-auto">
                            </div>
                        @endif
                    </div>
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
                    <div class="grid grid-cols-3 gap-4 px-6 mt-3 md:grid-cols-6">
                        <div class="md:px-5 py-1.5 text-left md:text-right">
                            <label>Judul</label>
                        </div>
                        <div class="col-span-2 md:col-span-3">
                            <input wire:model="title_id" type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                            @error('title_id') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 md:grid-cols-6 gap-4 px-6 mt-3 py-1.5">
                        <div class="md:px-5 text-left md:text-right py-1.5">
                            Deskripsi Singkat
                        </div>
                        <div class="col-span-2 md:col-span-5">
                            <textarea wire:model="brief_description_id"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                rows="4"></textarea>
                            @error('brief_description_id') <span
                                class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mx-5 mt-2 bg-white" wire:ignore>
                        <textarea wire:model="content_id" class="editor1" id="editor1">
                            {!! $content_id !!}
                        </textarea>
                    </div>
                    @error('content_id') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span>
                        @enderror
                </div>

                <div x-show="tab === 'en'">
                    <div class="grid grid-cols-3 gap-4 px-6 mt-3 md:grid-cols-6">
                        <div class="md:px-5 py-1.5 text-left md:text-right">
                            <label>Title</label>
                        </div>
                        <div class="col-span-2 md:col-span-3">
                            <input wire:model="title_en" type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                            @error('title_en') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 md:grid-cols-6 gap-4 px-6 mt-3 py-1.5">
                        <div class="md:px-5 text-left md:text-right py-1.5">
                            Brief Description
                        </div>
                        <div class="col-span-2 md:col-span-5">
                            <textarea wire:model="brief_description_en"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                rows="4"></textarea>
                            @error('brief_description_en') <span
                                class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mx-5 mt-2 bg-white" wire:ignore>
                        <textarea wire:model="content_en" class="editor2" id="editor2">
                                {!! $content_en !!}
                        </textarea>
                    </div>
                    @error('content_en') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span>
                        @enderror
                </div>

                <div class="mt-5 text-2xl text-right">

                    <button type="button"
                        wire:click='save'
                        class="px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Save</button>
                </div>
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
        @this.set('content_id', event.editor.getData());
    });

    const editor2 = CKEDITOR.replace( 'editor2' );
    editor2.on('change', function(event) {
        console.log(event.editor.getData());
        @this.set('content_en', event.editor.getData());
    });
</script>
@endpush




