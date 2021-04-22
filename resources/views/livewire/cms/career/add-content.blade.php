@push('styles')
<script src="https://cdn.tiny.cloud/1/gl3szu5lusjd02mc1fx7beymqaldxuceta87i0o5ylw3kpwy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush

<div class="py-12">
    <div  x-data="{ tab: 'id' }"
        class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">

            <form wire:submit.prevent="save">
                <div class="grid gap-4 px-6 py-2 gril-cols-6 md:grid-cols-12">
                    <div class="col-span-2 py-2 md:px-3 md:text-right">
                        <span>Publish Date</span>
                    </div>
                    <div wire:model="publish_date"
                        class="col-span-3">
                        <input type="date" class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                        @error('publish_date') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-4 py-2 md:px-3 md:text-right ">
                        <span>Author</span>
                    </div>
                    <div class="col-span-3">
                        <select wire:model="author"
                            class="w-full leading-tight border shadow ppearance-none focus:outline-none focus:shadow-outline">
                                    <option value="">Select</option>
                                @foreach ($users as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                        </select>
                        @error('author') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-6 gap-4 px-6 mt-3 py-1.5">
                    <div @click="tab = 'id'" :class="{'bg-gray-300' : tab === 'id', 'bg-gray-200 text-gray-400' : tab !== 'id'}" class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">ID ( INDONESIAN LANGUAGE ) </div>
                    <div @click="tab = 'en'" :class="{'bg-gray-300' : tab === 'en', 'bg-gray-200 text-gray-400' : tab !== 'en'}" class="col-span-3 py-4 font-semibold text-center uppercase cursor-pointer">EN ( ENGLISH LANGUAGE )</div>
                </div>

                <div x-show="tab === 'id'">
                    <div class="grid grid-cols-3 gap-4 px-6 mt-3 md:grid-cols-6">
                        <div class="md:px-5 py-1.5 text-left md:text-right">
                            <label>Jabatan</label>
                        </div>
                        <div class="col-span-2 md:col-span-3">
                            <input wire:model="position_id"
                                type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                @error('position_id') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
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
                            @error('brief_description_id') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mx-5 mt-2 bg-white" wire:ignore>
                        <textarea class="editor1">
                            {!! $description_id !!}
                        </textarea>
                        @error('description_id') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div x-show="tab === 'en'">
                    <div class="grid grid-cols-3 gap-4 px-6 mt-3 md:grid-cols-6">
                        <div class="md:px-5 py-1.5 text-left md:text-right">
                            <label>Position</label>
                        </div>
                        <div class="col-span-2 md:col-span-3">
                            <input wire:model="position_en"
                                type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                @error('position_en') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
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
                            @error('brief_description_en') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mx-5 mt-2 bg-white" wire:ignore>
                        <textarea class="editor2">
                            {!! $description_en !!}
                        </textarea>
                        @error('description_en') <span class="block mb-2 text-sm text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mt-5 text-2xl text-right">
                        <button type="submit" class="px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: '.editor1',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Mark Dinamic Sindo',
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('description_id', editor.getContent());
            });
        },
    });
</script>

<script>
    tinymce.init({
        selector: '.editor2',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Mark Dinamic Sindo',
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('description_en', editor.getContent());
            });
        },
    });
</script>
