<div>
    <div class="items-start w-full grid-cols-2 gap-12 lg:grid">
        @forelse ($news as $key => $item)
        @if ($key == 0)
        <div class="relative w-full h-screen col-span-2">
            <div class="absolute z-10 w-11/12 pl-8 space-y-6 bottom-12 sm:pl-16">
                <div class="text-4xl font-bold text-white xsm:text-6xl">
                    @if (__('custom.lang') == 'id')
                    {!! $item->title_id !!}
                    @else
                    {!! $item->title_en !!}
                    @endif
                </div>
                <div class="text-lg text-justify text-white ">
                    @if (__('custom.lang') == 'id')
                    {{ Str::limit($item->brief_description_id, 250, '...') }}
                    @else
                    {{ Str::limit($item->brief_description_en, 250, '...') }}
                    @endif
                </div>
                <div>
                    <a href="{{ route('news.show', $item->slug )}}"
                        class="bottom-0 inline-block px-3 py-2 font-bold text-white transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca
                        Selengkapnya</a>
                </div>
            </div>
            <div class="absolute w-full h-full bg-opacity-50 bg-hitam"></div>
            <img class="object-cover w-full h-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
        </div>
        @else
        <div class="w-full px-4 mt-12 rounded-md lg:container lg:mx-auto lg::mt-0 sm:px-6 lg:px-8">
            <div class="relative w-full mx-auto overflow-hidden rounded-md h-60 ">
                <img class="object-cover w-full h-full" src="{{ asset($item->cover) }}" alt="Mark Dynamics News">
                <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
                <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                    <div class="text-xl font-bold truncate">
                        @if (__('custom.lang') == 'id')
                        {!! $item->title_id !!}
                        @else
                        {!! $item->title_en !!}
                        @endif
                    </div>
                    <div class="grid items-center grid-cols-5 gap-4 text-base font-light">
                        <div class="justify-center w-24 h-20 py-2 text-center rounded-md bg-mark-default">
                            <span class="text-sm">{{ date('M', strtotime($item->created_at)) }}</span><br>
                            <span class="text-3xl font-semibold">{{ date('d', strtotime($item->created_at)) }}</span>
                        </div>
                        <div class="col-span-4 text-justify">
                            @if (__('custom.lang') == 'id')
                            {{ Str::limit($item->brief_description_id, 108, '...') }}
                            @else
                            {{ Str::limit($item->brief_description_en, 108, '...') }}
                            @endif
                        </div>

                    </div>
                    <div class="flex justify-end item-right">
                        <a href="{{ route('news.show', $item->slug )}}"
                            class="bottom-0 inline-block float-right px-3 py-2 font-bold truncate transition-all duration-200 border border-white rounded-md cursor-pointer sm:text-lg xsm:text-sm text-md hover:bg-gray-50 hover:text-hitam">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @empty
        <div class="relative w-full">

        </div>
        @endforelse
    </div>

    <div class="w-full px-4 py-12 space-x-8 sm:px-8">
        {{ $news->links('vendor.pagination.simple-tailwind1') }}
    </div>
</div>