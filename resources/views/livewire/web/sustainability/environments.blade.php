<div class="px-4 pt-24 pb-12 mx-auto lg:pt-48 lg:pb-24 max-w-7xl sm:px-6 lg:px-8">
    <div class="pb-12 -mb-2 text-2xl font-bold text-center lg:pb-24 lg:mb-0 lg:text-4xl">@lang('custom.environment')</div>
    <div class="grid grid-cols-2 gap-4 mb-4 sm:grid-cols-4 lg:grid-cols-6">
        <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
            <img class="object-cover w-full rounded-md" src="{{ asset($nowPreview) }}" alt="Mark Dynamics Gallery & Products">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
        @foreach ($env as $item)
            <div wire:click="preview('{{ $item->img }}')" class="cursor-pointer">
                <img class="object-cover w-full h-20 rounded-md sm:h-28" src="{{ asset($item->img) }}" alt="Mark Dynamics Gallery & Products">
            </div>
        @endforeach

    </div>
    <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-4 lg:grid-cols-6">
        <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
            {{ $env->links() }}
        </div>
    </div>
</div>
