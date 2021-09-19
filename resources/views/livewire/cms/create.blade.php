<div>
    <div class="bg-white mt-16 p-8 container mx-auto rounded-lg">
		<form class="space-y-8 divide-y divide-gray-200">
			<div class="space-y-8 divide-y divide-gray-200">
				<div>
				<div>
					<h3 class="text-lg leading-6 font-medium text-gray-900">
					Add Menu
					</h3>
					<p class="mt-1 text-sm text-gray-500">
						Penambahan menu MDI Website di sini.
					</p>
				</div>
				<div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
					<div class="sm:col-span-4">
						<label for="type" class="block text-sm font-medium text-gray-700">
							Type
						</label>
						<div class="mt-1">
							<select wire:model="type" id="type" name="type" autocomplete="type" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
								<option @if($disable) disabled @endif value="main">Main Menu</option>
								<option value="page">Page</option>
								<option @if($aboutdisable) disabled @endif value="about">About Us Page</option>
							</select>
						</div>
					</div>

					<div class="sm:col-span-4">
						<label for="type" class="block text-sm font-medium text-gray-700">
							Parent
						</label>
						<div class="mt-1">
							<select wire:model="parent" id="type" name="type" autocomplete="type" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
								<option value="null">== No Parent ==</option>
								@foreach($menu as $m)
									<option wire:click="disable(false, true)" value="{{$m->id}}">{{$m->name_en}}</option>
									@foreach($m->child as $sm)
										<option wire:click="disable()" value="{{$sm->id}}">{{$m->name_en}} > {{$sm->name_en}}</option>
									@endforeach
								@endforeach
							</select>
						</div>
					</div>

					<div class="sm:col-span-4">
						<label for="name_en" class="block text-sm font-medium text-gray-700">
							Nama {{ $type == 'main' ? 'Menu' : 'Halaman' }} Inggris
						</label>
						<div class="mt-1">
							<input type="text" name="name_en" id="name_en" wire:model.debounce.500ms="name_en" autocomplete="family-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
						</div>
						@error('name_en')
						<div class="rounded-md bg-red-50 p-4 mt-2">
							<div class="flex">
							  <div class="flex-shrink-0">
								<!-- Heroicon name: solid/x-circle -->
								<svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
								</svg>
							  </div>
							  <div class="ml-3">
								<h3 class="text-sm font-medium text-red-800">
								  {{$message}}
								</h3>
							  </div>
							</div>
						  </div>
						@enderror
					</div>

					<div class="sm:col-span-4">
						<label for="name_id" class="block text-sm font-medium text-gray-700">
							Nama {{ $type == 'main' ? 'Menu' : 'Halaman' }} Indonesia
						</label>
						<div class="mt-1">
							<input type="text" name="name_id" id="name_id" wire:model.debounce.500ms="name_id" autocomplete="family-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
						</div>
						@error('name_id')
						<div class="rounded-md bg-red-50 p-4 mt-2">
							<div class="flex">
							  <div class="flex-shrink-0">
								<!-- Heroicon name: solid/x-circle -->
								<svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
								</svg>
							  </div>
							  <div class="ml-3">
								<h3 class="text-sm font-medium text-red-800">
								  {{$message}}
								</h3>
							  </div>
							</div>
						  </div>
						@enderror
					</div>

					<div class="sm:col-span-4">
						<label for="name_cn" class="block text-sm font-medium text-gray-700">
							Nama {{ $type == 'main' ? 'Menu' : 'Halaman' }} China
						</label>
						<div class="mt-1">
							<input type="text" name="name_cn" id="name_cn" wire:model.debounce.500ms="name_cn" autocomplete="family-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
						</div>
						@error('name_cn')
						<div class="rounded-md bg-red-50 p-4 mt-2">
							<div class="flex">
							  <div class="flex-shrink-0">
								<!-- Heroicon name: solid/x-circle -->
								<svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
								</svg>
							  </div>
							  <div class="ml-3">
								<h3 class="text-sm font-medium text-red-800">
								  {{$message}}
								</h3>
							  </div>
							</div>
						  </div>
						@enderror
					</div>


					<div class="sm:col-span-4">
						<label for="slug" class="block text-sm font-medium text-gray-700">
							Slug
						</label>
						<div class="mt-1">
							<input type="text" wire:model.debounce.500ms="slug" name="slug" id="slug" autocomplete="family-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
						</div>
						@error('slug')
						<div class="rounded-md bg-red-50 p-4 mt-2">
							<div class="flex">
							  <div class="flex-shrink-0">
								<!-- Heroicon name: solid/x-circle -->
								<svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
								</svg>
							  </div>
							  <div class="ml-3">
								<h3 class="text-sm font-medium text-red-800">
								  {{$message}}
								</h3>
							  </div>
							</div>
						  </div>
						@enderror
					</div>
					<div class="sm:col-span-4">
						<div class="relative flex items-start">
							<div class="flex items-center h-5">
								<input wire:model="active" id="active" name="active" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
							</div>
							<div class="ml-3 text-sm">
								<label for="active" class="font-medium text-gray-700">Active</label>
								<p class="text-gray-500">Apakah page ini aktif atau tidak.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div x-data="{lang:'en', type:@entangle('type')}">
					<div x-show="type === 'page'" class="">
						<div :class="{'bg-black text-white' : lang === 'en'}" x-on:click="lang = 'en'" class="inline-block shadow cursor-pointer px-8 py-4">
							English
						</div>
						<div :class="{'bg-black text-white' : lang === 'id'}" x-on:click="lang = 'id'" class="inline-block shadow cursor-pointer px-8 py-4">
							Indonesia
						</div>
						<div :class="{'bg-black text-white' : lang === 'cn'}" x-on:click="lang = 'cn'" class="inline-block shadow cursor-pointer px-8 py-4">
							Chinese
						</div>
					</div>
					<div x-show="type === 'page'" class="">
						<div wire:ignore x-show="lang === 'en'">
						<textarea wire:model="description_en"  rows="4" id="editor1"
                                        class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue"></textarea>
						</div>
						<div wire:ignore x-show="lang === 'id'">
							<textarea wire:model="description_id"  rows="4" id="editor2"
											class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue"></textarea>
						</div>
						<div wire:ignore x-show="lang === 'cn'">
							<textarea wire:model="description_cn"  rows="4" id="editor3"
											class="w-full mt-2 transition-all bg-gray-200 border-indigo-300 rounded-sm border-blue"></textarea>
						</div>
					</div>
				</div>
			<div class="pt-5">
				<div class="flex justify-end">
				<a href="{{ route('cms.index') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					Cancel
				</a>
				<button wire:click.prevent="save" type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					Save
				</button>
				</div>
			</div>
		</form>
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
