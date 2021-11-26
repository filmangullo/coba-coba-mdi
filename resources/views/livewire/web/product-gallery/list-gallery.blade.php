<div class="mx-auto max-w-7xl">
    <div x-data="{ imgModal : @entangle('imgModal'), imgModalSrc : @entangle('imgModalSrc'), imgModalDesc : '' }">
        <template
            {{-- @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" --}}

            x-if="imgModal">
            <img src="">
            <div x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform"
                x-transition:enter-end="opacity-100 transform "
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform "
                x-transition:leave-end="opacity-0 transform" x-on:click.away="imgModalSrc = ''"
                class="fixed inset-0 z-50 flex items-center w-full h-full p-6 overflow-hidden justify-centerm bg-opacity-60 bg-mark-default">
                <div class="relative flex items-center w-full h-full">
                    <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full mx-auto overflow-auto">
                        <div class="z-10 h-auto p-4 m-auto bg-white rounded-md">
                            <img :alt="imgModalSrc" class="object-cover w-full rounded-md" :src="imgModalSrc">
                        </div>
                        <p x-text="imgModalDesc" class="mt-5 text-lg font-semibold text-center text-black"></p>
                    </div>
                    <div class="absolute left-0 w-full font-bold text-center text-white cursor-default bottom-6 sm:bottom-12">
                        click orange area to close
                    </div>
                </div>
            </div>
        </template>
    </div>
    <div class="px-4 mx-auto sm:px-6 lg:px-8 lg:container lg:mx-auto">
        <div class="py-24 text-4xl font-bold text-center">Gallery</div>
        <div class="flex flex-wrap items-center pb-24 -mx-3 -my-3 ">
            @foreach($gallery ? : [] as $g)
            <div wire:click='showImg("{{ asset( $g->img ) }}")'
                class="px-3 py-3 sm:w-6/12 md:w-4/12 lg:w-3/12">
                <img class="object-cover w-full h-48 rounded-md cursor-pointer pointer-events-auto hover:opacity-75" src="{{ asset( $g->img ) }}" alt="Mark Dynamics Gallery & Products">
            </div>
            @endforeach
        </div>
        <div class="flex items-center justify-center pb-24 space-x-8">
            {{ $gallery->links() }}
        </div>
    </div>
</div>
