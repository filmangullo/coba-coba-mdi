<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @forelse ($list as $n)
                <div class="grid grid-cols-1 mb-4 overflow-hidden bg-white shadow-xl sm:grid-cols-10 sm:rounded-lg">
                    <div class="flex items-center justify-center h-full col-span-2 p-3 bg-white border-b border-gray-200 sm:pl-10">
                        <img src="{{ asset($n->img) }}" class="w-full mx-auto">
                    </div>
                    <div class="col-span-8 p-3 bg-white border-b border-gray-200 sm:px-10">

                        <div class="mt-5 text-2xl font-bold">
                            {{ $n->title_id }}
                        </div>
                        <div class="mt-5 font-bold text-gray-500 text-1xl">
                            {{ $n->title_en }}
                        </div>
                        <div class="mt-5 font-bold text-gray-500 text-1xl">
                            {{ $n->title_cn }}
                        </div>

                        <div class="mt-6 text-left text-gray-500">
                            {!! $n->description_id !!}
                        </div>
                        <div class="mt-6 italic text-right text-gray-500">
                            {!! $n->description_en !!}
                        </div>
                        <div class="mt-6 italic text-right text-gray-500">
                            {!! $n->description_cn !!}
                        </div>
                        <div class="mt-5 text-2xl text-right">

                                <a href="{{ route('cms-awards.update', $n->id) }}" type="button" class="py-2 text-sm text-green-600 border border-green-600 rounded-md focus:outline-none px-7 hover:bg-green-50">Edit</a>

                                <button type="button" class="px-5 py-2 text-sm text-red-600 border border-red-600 rounded-md focus:outline-none hover:bg-red-50">Delete</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="mb-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="p-6 text-center bg-white border-b border-gray-200 sm:px-20">
                        Undefined Content
                    </div>
                </div>
            @endforelse

            <div>
                {{ $list->links() }}
            </div>
        </div>
    </div>

</div>
