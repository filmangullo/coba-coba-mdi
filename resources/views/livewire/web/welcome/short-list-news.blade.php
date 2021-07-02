
    <div class="grid lg:grid-cols-2 text-left gap-6 mt-6 lg:gap-12 lg:mt-12">
        @forelse ($news as $i => $n)
            <div class="relative w-full overflow-hidden rounded-md h-48 lg:h-60 @if($i % 2) wow animate__animated animate__fadeInRight @else wow animate__animated animate__fadeInLeft @endif">
                <img class="w-full" src="{{ asset($n->cover) }}" alt="Mark Dynamics News">
                <div class="absolute top-0 w-full h-full bg-opacity-50 rounded-md bg-hitam"></div>
                <div class="absolute top-0 grid content-between w-full h-full grid-cols-1 p-6 text-white">
                    <div class="text-base lg:text-xl font-bold truncate">
                        @if (__('custom.lang') == 'id')
                            {!! $n->title_id !!}
                        @else
                            {!! $n->title_en !!}
                        @endif
                    </div>
                    <div class="text-xs lg:text-base font-light">
                        @if (__('custom.lang') == 'id')
                            {{ Str::limit($n->brief_description_id, 150, '...') }}
                        @else
                            {{ Str::limit($n->brief_description_en, 150, '...') }}
                        @endif
                    </div>
                    <div>
                        <a  href="{{ route('news.show', $n->slug )}}" class="bottom-0 lg:text-base text-xs inline-block px-3 py-2 font-bold transition-all duration-200 border border-white rounded-md cursor-pointer hover:bg-gray-50 hover:text-hitam">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty

        @endforelse


    </div>
