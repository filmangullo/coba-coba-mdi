
    <div class="grid grid-cols-1 gap-6 mt-12 text-left animate__fadeInUp animate__animated lg:grid-cols-2 lg:gap-12 lg:mt-12">
        <div class="hidden w-full lg:block lg:h-full">
            <img class="object-cover w-full h-full rounded-md" src="{{ asset('img/in-news.jpg') }}">
        </div>
        <div class="grid gap-4">
            @foreach ($news ? : [] as $i => $n)
                <div class="relative w-full mx-auto overflow-hidden rounded-md h-52 ">
                    <img class="object-cover w-full h-full" src="{{ asset($n->cover) }}" alt="Mark Dynamics News">
                    <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
                    <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white gap-y-2">
                        <div class="text-xl font-bold truncate">
                            @if (__('custom.lang') == 'id')
                            {!! $n->title_id !!}
                            @else
                            {!! $n->title_en !!}
                            @endif
                        </div>
                        <div class="grid items-center grid-cols-5 gap-4 text-base font-light">
                            <div class="justify-center hidden w-24 h-20 py-2 text-center rounded-md sm:block bg-mark-default">
                                <div class="text-sm">{{ date('M', strtotime($n->created_at)) }}</div>
                                <div class="text-3xl font-semibold">{{ date('d', strtotime($n->created_at)) }}</div>
                            </div>
                            <div class="col-span-5 sm:col-span-4">
                                @if (__('custom.lang') == 'id')
                                <div class="line-clamp-3">{!! $n->brief_description_id !!}</div>
                                @else
                                <div class="line-clamp-3">{!! $n->brief_description_en !!}</div>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center justify-start sm:justify-end">
                            <a href="{{ route('news.show', $n->slug )}}"
                                class="bottom-0 inline-block float-right px-3 py-1.5 font-bold truncate transition-all duration-200 border border-white rounded-md cursor-pointer sm:text-lg xsm:text-sm text-md hover:bg-gray-50 hover:text-hitam">Baca
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-6 lg:mt-4 lg:-ml-6">
                <a href="{{ route('news.list') }}" class="lg:text-base px-6 py-1.5 cursor-pointer  text-mark-default font-bold mx-auto hover:text-mark-dark">
                    @lang('custom.more-news')
                </a>
            </div>
        </div>


    </div>
