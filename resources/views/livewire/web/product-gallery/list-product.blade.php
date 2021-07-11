<div x-data="{preview:'{{ asset( $nowPreview ) }}'}" class="px-4 pt-12 pb-12 mx-auto max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="text-base font-semibold tracking-wider text-center uppercase text-mark-default">@lang('custom.products')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-center text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <div class="container pt-24 mx-auto border-b border-gray-500">
        @if ($this->nowPreview)
            <div class="flex items-center">
                <div class="w-full h-48 mx-auto sm:h-80 md:h-96">
                    <img class="object-cover w-full h-full mx-auto rounded-xl" :src="preview" alt="Mark Dynamics Gallery & Products">
                </div>
            </div>
        @endif

        <div wire:ignore class="slider">
        @foreach($product ? : [] as $item)
        <div x-on:click="preview = '{{$item->img}}'" class="gap-5 hover:opacity-75 lg:mx-4"
            class="w-full px-3 py-3 cursor-pointer xsm:w-6/12 lg:w-6/12 xl:w-2/12">
            <img class="object-cover w-full h-48 rounded-md lg:h-40 " src="{{ asset( $item->img) }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
        </div>
    </div>
</div>
