
    <div class="grid grid-cols-2 gap-6 mt-6 lg:gap-12 lg:mt-12">
        @forelse ($news as $n)
            <div class="relative w-full overflow-hidden rounded-md h-60">
                <img class="w-full" src="{{ asset($n->cover) }}" alt="Mark Dynamics News">
                <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
                <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                    <div class="text-xl font-bold truncate">{!! $n->title_id !!}</div>
                    <div class="text-base font-light">{{ Str::limit($n->brief_description_id, 200, '...') }}</div>
                    <div>
                        <a  href="{{ route('news.show', $n->slug )}}" class="bottom-0 inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty

        @endforelse


    </div>