<div x-data="{preview:'{{ asset( $nowPreview ) }}'}" class="px-4 pt-12 pb-12 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="text-base font-semibold tracking-wider text-center uppercase text-mark-default">@lang('custom.products')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <div class="container pt-24 mx-auto border-b border-gray-500">
        @if ($this->nowPreview)
            <div class="flex items-center">
                <div class="mx-auto h-48 xsm:h-72 sm:h-80 md:h-96 lg:h-100 w-full">
                    <img class="object-cover mx-auto rounded-xl w-full h-full" :src="preview" alt="Mark Dynamics Gallery & Products">
                </div>
            </div>
        @endif

        <div wire:ignore class="slider">
        @foreach($product ? : [] as $item)
        <div x-on:click="preview = '{{$item->img}}'" class="w-full pr-6 py-6 cursor-pointer"
            class="w-full px-3 py-3 cursor-pointer xsm:w-6/12 lg:w-6/12 xl:w-2/12">
            <img class="object-cover w-full h-28 rounded-md lg:h-32 " src="{{ asset( $item->img) }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
        </div>
    </div>
</div>
