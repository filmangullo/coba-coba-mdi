
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                    {{ __('News') }}
                </h2>
            </div>

            <div>
                <a href="{{ route('cms-news.create') }}" class="float-right px-5 py-2 text-sm text-blue-600 border border-blue-600 rounded-md focus:outline-none hover:bg-blue-50">Add News</a>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @forelse ($news as $n)
                <div class="mb-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 sm:px-20">

                        <div class="mt-5 text-2xl">
                            {{ $n->title_id }}
                        </div>

                        <div class="mt-6 text-gray-500">
                            {!! $n->brief_description_id !!}
                        </div>
                        <div class="mt-5 text-xs italic text-right text-gray-700 sm:flex sm:justify-between">
                            <div>
                                Created At {{ date('d F Y', strtotime($n->created_at))}}
                            </div>
                            <div>
                                Publish Date {{ date('d F Y', strtotime($n->news_date))}}, Status : {{ $n->status == 1 ? 'Publish' : 'Hold'}}
                            </div>
                        </div>
                        <div class="mt-5 text-2xl text-right">

                                <a href="{{ route('cms-news.show', $n->id) }}" class="px-5 py-2 text-sm text-gray-600 border border-gray-600 rounded-md focus:outline-none hover:bg-gray-50">Show</a>

                                <a href="{{ route('cms-news.update', $n->id) }}" type="button" class="py-2 text-sm text-green-600 border border-green-600 rounded-md focus:outline-none px-7 hover:bg-green-50">Edit</a>

                                <button type="button" wire:click="delete({{$n->id}})" class="px-5 py-2 text-sm text-red-600 border border-red-600 rounded-md focus:outline-none hover:bg-red-50">Delete</button>
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
                {{ $news->links() }}
            </div>
        </div>
    </div>
