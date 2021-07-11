<div>
    <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
        <template
            @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;"
            x-if="imgModal">
            <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform"
                x-transition:enter-end="opacity-100 transform " x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform " x-transition:leave-end="opacity-0 transform"
                x-on:click.away="imgModalSrc = ''"
                class="fixed inset-0 z-50 flex items-center justify-center w-full h-screen p-2 overflow-hidden bg-opacity-50 bg-mark-default">
                <div class="relative flex items-center w-full h-full">
                    <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full mx-auto overflow-auto">
                        <div class="z-10 h-auto p-4 m-auto bg-white rounded-lg">
                            <img :alt="imgModalSrc" class="object-cover w-full rounded-lg" :src="imgModalSrc">
                        </div>
                        <p x-text="imgModalDesc" class="mt-5 text-lg font-semibold text-center text-mark-default"></p>
                    </div>
                    <div class="absolute left-0 w-full font-bold text-center cursor-default text-mark-dark bottom-12">
                        click orange area to close
                    </div>
                </div>
            </div>
        </template>
    </div>

    <div class="bg-white">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <ul
                    class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                    @foreach ($csr ? : [] as $item)

                    <li>
                        <div class="space-y-4">
                            <div @click="$dispatch('img-modal', {  imgModalSrc: '{{ asset($item->img) }}', imgModalDesc: '{!! (__('custom.lang') == 'id') ? $item->title_id : $item->title_en !!}' })"
                                class="aspect-w-3 aspect-h-2">
                                <img class="object-cover rounded-lg shadow-lg cursor-pointer pointer-events-auto hover:opacity-75"
                                    src="{{ asset($item->img) }}" alt="">
                            </div>

                        </div>
                        <div class="mt-2 space-y-2 text-center">
                            <div class="space-y-1 text-lg font-medium leading-6">
                                <h3>{{ date('F, d Y', strtotime($item->date)) }}</h3>
                                <p class="text-indigo-600">
                                    @if (__('custom.lang') == 'id')
                                    {{ Str::limit($item->title_id, 25, '...') }}
                                    @else
                                    {{ Str::limit($item->title_id, 25, '...') }}
                                    @endif
                                </p>
                            </div>
                        </div>
            </div>
            </li>
            @endforeach
            <!-- More people... -->
            </ul>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-4 lg:grid-cols-6">
            <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
                {{ $csr->links() }}
            </div>
        </div>
    </div>
</div>
</div>
