<div class="px-4 pt-24 pb-12 mx-auto lg:pt-20 lg:pb-24 max-w-7xl sm:px-6 lg:px-8">
    @if ($nowPreview)
        <div class="grid grid-cols-2 gap-4 mb-4 sm:grid-cols-4 lg:grid-cols-6">
            <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
                <img class="object-cover mx-auto rounded-md h-96" src="{{ asset($nowPreview->img) }}" alt="Mark Dynamics Gallery & Products">
            </div>

        </div>

        <div class="w-1/5 py-6 mb-5 rounded-md shadow-md">
            <div class="text-sm font-bold uppercase text-mark-default sm:text-xl lg:text-3xl">{{ $nowPreview->title_id }}</div>
            <div class="mt-1 text-xs italic font-bold text-gray-600 sm:mt-3 sm:text-sm lg:text-base uppecase">{{ $nowPreview->title_en }}</div>
            <div class="mt-6 text-xs tracking-wide lg:mt-12 lg:text-sm">{!! $nowPreview->description_id !!}</div>
            <div class="mt-6 text-xs italic tracking-wide text-right lg:mt-12 lg:text-sm">{!! $nowPreview->description_en !!}</div>
        </div>
    @endif
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
        @foreach ($csr ? : [] as $item)
            <div wire:click="preview('{{ $item->id }}')" class="cursor-pointer">
                <img class="object-cover w-full h-20 rounded-md sm:h-28" src="{{ asset($item->img) }}" alt="Mark Dynamics Gallery & Products">
            </div>
        @endforeach

    </div>
    <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-4 lg:grid-cols-6">
        <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
            {{ $csr->links() }}
        </div>
    </div>
</div>
