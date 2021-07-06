<div x-data="{preview:'{{ asset( $nowPreview ) }}'}" class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-12 lg:px-8">
    <h2 class="text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.products')</h2>
    <p class="mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <div class="container mx-auto border-b pt-24 border-gray-500">
        @if ($this->nowPreview)
            <div class="flex items-center">
                <div class="mx-auto h-48 sm:h-80 md:h-96 w-full">
                    <img class="object-cover mx-auto rounded-xl w-full h-full" :src="preview" alt="Mark Dynamics Gallery & Products">
                </div>
            </div>
        @endif

        <div wire:ignore class="slider">
        @foreach($product ? : [] as $item)
        <div x-on:click="preview = '{{$item->img}}'" class="w-full pr-6 py-6 cursor-pointer">
            <img class="object-cover w-full h-28 rounded-xl" src="{{ asset( $item->img) }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
        </div>
    </div>
</div>
