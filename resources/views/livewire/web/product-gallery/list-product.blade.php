<div x-data="{preview:'{{ asset( $nowPreview ) }}'}" class="">
    <div class="pt-16 pb-24 text-4xl font-bold text-center lg:py-24">Products</div>
    <div class="border-b border-gray-500 ">
        <div class="flex items-center">
            <div class="w-full h-3/4 ">
                <img class="object-cover w-full rounded-md" :src="preview" alt="Mark Dynamics Gallery & Products">
            </div>
        </div>


        <div wire:ignore class="flex flex-wrap items-start w-full mx-auto -my-3 slider lg:container lg:mx-auto py-14 xsm:px-4 lg:flex-nowrap sm:px-6 lg:px-8 ">
        @foreach($product as $item)
        <div x-on:click="preview = '{{$item->img}}'"
            class="w-full px-3 py-3 cursor-pointer xsm:w-6/12 lg:w-6/12 xl:w-2/12">
            <img class="object-cover w-full h-48 rounded-md lg:h-28 " src="{{ asset( $item->img) }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
        </div>
    </div>
</div>