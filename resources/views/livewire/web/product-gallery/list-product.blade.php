<div x-data="{preview:'{{ asset( $nowPreview ) }}'}" class="px-4 pt-5 pb-5 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-center animate__fadeInDown animate__animated text-mark-default sm:text-4xl">@lang('product-gallery.types-of-products')</h2>

        <div class="container pt-24 mx-auto border-b border-gray-500">
            @if ($this->nowPreview)
                <div class="flex items-center">
                    <div class="w-full h-48 mx-auto xsm:h-72 sm:h-80 md:h-96 lg:h-100">
                        <img class="object-cover w-full h-full mx-auto rounded-xl" :src="preview" alt="Mark Dynamics Gallery & Products">
                    </div>
                </div>
            @endif

            <div wire:ignore class="slider">
            @foreach($product ? : [] as $item)
            <div x-on:click="preview = '{{$item->img}}'" class="w-full py-6 pr-6 cursor-pointer"
                class="w-full px-3 py-3 cursor-pointer xsm:w-6/12 lg:w-6/12 xl:w-2/12">
                <img class="object-cover w-full rounded-md h-28 lg:h-32 " src="{{ asset( $item->img) }}" alt="Mark Dynamics Gallery & Products">
            </div>
            @endforeach
            </div>
        </div>

</div>
