{{-- <div x-data="{preview:'{{ asset( $nowPreview ) }}'}" class="px-4 pt-5 pb-5 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
<h2
    class="mt-2 text-3xl font-extrabold tracking-tight text-center animate__fadeInDown animate__animated text-mark-default sm:text-4xl">
    @lang('product-gallery.types-of-products')</h2>

<div class="container pt-24 mx-auto border-b border-gray-500">
    @if ($this->nowPreview)
    <div class="flex items-center">
        <div class="w-full h-48 mx-auto xsm:h-72 sm:h-80 md:h-96 lg:h-100">
            <img class="object-cover w-full h-full mx-auto rounded-xl" :src="preview"
                alt="Mark Dynamics Gallery & Products">
        </div>
    </div>
    @endif

    <div wire:ignore class="slider">
        @foreach($product ? : [] as $item)
        <div x-on:click="preview = '{{$item->img}}'" class="w-full py-6 pr-6 cursor-pointer"
            class="w-full px-3 py-3 cursor-pointer xsm:w-6/12 lg:w-6/12 xl:w-2/12">
            <img class="object-cover w-full rounded-md h-28 lg:h-32 " src="{{ asset( $item->img) }}"
                alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
    </div>
</div>

</div> --}}

{{-- <div class="bg-white border-b border-gray-800">
    <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8"> --}}
        {{-- <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">@lang('product-gallery.types-of-products')</h2> --}}

        {{-- <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
            @foreach($product ? : [] as $item)
            <div class="relative group">
                <div
                    class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="{{ asset( $item->img) }}"
                        alt="{{ $item->title }}"
                        class="object-cover object-center w-full h-full lg:w-full lg:h-full">
                </div>
                <div class="flex justify-between mt-4 text-center">
                    <p class="mx-auto text-lg font-semibold text-gray-900">{{ $item->title }}</p>
                </div>
            </div>
            @endforeach
            <!-- More products... -->
        </div>
    </div>
</div> --}}
<div class="px-4 py-12 mx-auto text-center max-w-7xl sm:px-6 lg:py-16 lg:px-8">
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 animate__fadeInDown wow animate__animated sm:text-4xl">
      @lang('product-gallery.competitive-advantages')
    </p>

</div>
<div class="bg-white">
    <div class="max-w-2xl px-4 py-16 mx-auto text-center sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 gap-6 mt-6 gap-y-10 sm:grid-cols-5 lg:grid-cols-6 xl:gap-y-24">
            <div class="lg:col-span-2 lg:h-40">
                <div class="relative group">
                    <div
                        class="w-full overflow-hidden rounded-md aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-42 lg:aspect-none">
                        <img src="{{ asset('icon/shield.svg') }}"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="object-cover object-center h-40 mx-auto ">
                    </div>
                    <div class="flex justify-between mt-4 text-center">
                        <p class="mx-auto text-lg font-semibold text-gray-900">@lang('product-gallery.high-endurance-against...')</p>
                    </div>
                </div>

            </div>
            <div class="lg:col-span-2 lg:h-40">
                <div class="relative group">
                    <div
                        class="w-full overflow-hidden rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-42 lg:aspect-none">
                        <img src="{{ asset('icon/measure-cup.svg') }}"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="object-cover object-center h-40 mx-auto ">
                    </div>
                    <div class="flex justify-between mt-4 text-center">
                        <p class="mx-auto text-lg font-semibold text-gray-900">@lang('product-gallery.high-alumina-content')</p>
                    </div>
                </div>

            </div>
            <div class="lg:col-span-2 lg:h-40">
                <div class="relative group">
                    <div
                        class="w-full overflow-hidden rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-42 lg:aspect-none">
                        <img src="{{ asset('icon/speedometer1.svg') }}"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="object-cover object-center h-40 mx-auto ">
                    </div>
                    <div class="flex justify-between mt-4 text-center">
                        <p class="mx-auto text-lg font-semibold text-gray-900">@lang('product-gallery.suitable-for-high-speed...')</p>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-3 lg:h-40">
                <div class="relative group">
                    <div
                        class="w-full overflow-hidden rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-42 lg:aspect-none">
                        <img src="{{ asset('icon/dimensions.svg') }}"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="object-cover object-center h-40 mx-auto ">
                    </div>
                    <div class="flex justify-between mt-4 text-center">
                        <p class="mx-auto text-lg font-semibold text-gray-900">@lang('product-gallery.products-finishing-with...')</p>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-3 lg:h-40">
                <div class="relative group">
                    <div
                        class="w-full overflow-hidden rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-42 lg:aspect-none">
                        <img src="{{ asset('icon/sand-timer.svg') }}"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="object-cover object-center h-40 mx-auto ">
                    </div>
                    <div class="flex justify-between mt-4 text-center">
                        <p class="mx-auto text-lg font-semibold text-gray-900">@lang('product-gallery.quick-adjustments-for...')</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
