<div>
    <div x-data="{ imgModal : false }">
        <template
            @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalTitle = $event.detail.imgModalTitle; imgModalDesc = $event.detail.imgModalDesc;"
            x-if="imgModal">
            <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform"
                x-transition:enter-end="opacity-100 transform " x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform " x-transition:leave-end="opacity-0 transform"
                x-on:click.away="imgModalSrc = ''"
                class="fixed inset-0 z-50 flex items-center justify-center w-full h-screen p-2 overflow-hidden bg-opacity-50 bg-mark-default">
                <div class="relative flex items-center w-full h-full mb-3">
                    <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full mx-auto overflow-auto">
                        <div class="z-10 h-auto p-4 m-auto bg-white rounded-lg">
                            <img :alt="imgModalSrc" class="object-cover w-full rounded-lg" src="{{ !empty($shw) ? asset($shw->img) : '' }}">
                        </div>
                        <div class="mt-2 bg-white border border-gray-300 rounded-md">
                            <p class="mt-1 text-xs text-center text-gray-800">
                                @if(!empty($shw))
                                    @if(App::isLocale('id'))
                                        {{ $shw->descripion_id }}
                                    @elseif(App::isLocale('en'))
                                        {{ $shw->descripion_en }}
                                    @elseif(App::isLocale('cn'))
                                        {{ $shw->descripion_cn }}
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-full font-bold text-center cursor-default top-3 text-mark-dark bottom-12">
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
                    class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @forelse ($dataCSR as $item)
{{-- @click="$dispatch('img-modal', {  imgModalSrc: '{{ asset($item->img) }}', imgModalTitle: '{!! (__('custom.lang') == 'id') ? $item->description_id : $item->description_en !!}', imgModalDesc: '{!! (__('custom.lang') == 'id') ? $item->description_id : $item->description_en !!}',  })"  --}}
                    <li>
                        <div class="space-y-4 " >
                            <div  @click="$dispatch('img-modal')" class="h-40 overflow-hidden" wire:click="show('{{$item->id}}')">
                                <img class="object-cover w-full h-full mx-auto rounded-md shadow-lg cursor-pointer pointer-events-auto hover:opacity-75"
                                    src="{{ asset($item->img) }}" alt="">
                            </div>

                        </div>
                        <div class="mt-2 space-y-2 text-center">
                            <div class="space-y-1 text-lg font-medium leading-6 h-42">
                                <h3 class="font-bold">{!! !empty($item) ? (__('custom.lang') == 'id') ? date('d F Y', strtotime($item->date)) : date('F d, Y', strtotime($item->date)) : '' !!}
                                </h3>
                                <p class="text-hitam">
                                    @if (App::isLocale('id'))
                                    {{ Str::limit($item->description_id, 100, '...') }}
                                    @elseif(App::isLocale('en'))
                                    {{ Str::limit($item->description_en, 100, '...') }}
                                    @elseif(App::isLocale('cn'))
                                    {{ Str::limit($item->description_cn, 100, '...') }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </li>
                    @empty
                    @endforelse
                    <!-- More people... -->
                </ul>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-4 lg:grid-cols-6">
                <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
                    {{ $dataCSR->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
