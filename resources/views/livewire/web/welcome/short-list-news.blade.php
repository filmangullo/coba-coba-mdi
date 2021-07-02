
    <div class="grid gap-6 mt-6 text-left lg:grid-cols-2 lg:gap-12 lg:mt-12">
        <div>
            <img class="rounded-lg" src="{{ asset('img/in-news.jpg') }}">
        </div>
        <div class="grid gap-4">
            @foreach ($news ? : [] as $i => $n)
                <div class="relative w-full h-48 mx-auto overflow-hidden rounded-md ">
                    <img class="object-cover w-full h-full" src="{{ asset($n->cover) }}" alt="Mark Dynamics News">
                    <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
                    <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                        <div class="text-xl font-bold truncate">
                            @if (__('custom.lang') == 'id')
                            {!! $n->title_id !!}
                            @else
                            {!! $n->title_en !!}
                            @endif
                        </div>
                        <div class="grid items-center grid-cols-5 gap-4 text-base font-light">
                            <div class="justify-center w-24 h-20 py-2 text-center rounded-md bg-mark-default">
                                <span class="text-sm">{{ date('M', strtotime($n->created_at)) }}</span><br>
                                <span class="text-3xl font-semibold">{{ date('d', strtotime($n->created_at)) }}</span>
                            </div>
                            <div class="col-span-4 text-justify">
                                @if (__('custom.lang') == 'id')
                                {{ Str::limit($n->brief_description_id, 108, '...') }}
                                @else
                                {{ Str::limit($n->brief_description_en, 108, '...') }}
                                @endif
                            </div>

                        </div>
                        <div class="flex justify-end item-right">
                            <a href="{{ route('news.show', $n->slug )}}"
                                class="bottom-0 inline-block float-right px-3 py-2 font-bold truncate transition-all duration-200 border border-white rounded-md cursor-pointer sm:text-lg xsm:text-sm text-md hover:bg-gray-50 hover:text-hitam">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
