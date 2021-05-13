<div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-12 text-2xl lg:text-4xl font-bold text-center text-mark-default">News & Updates</div>
    <div class="relative w-full h-full">
        <img class="w-full h-full" src="{{ asset('img/stock-price.png') }}" alt="Mark Dynamics Stock Price">
        <div class="absolute w-full text-xl lg:text-3xl font-bold text-center text-white top-6 lg:top-12">Stock Price</div>
    </div>
    <div class="grid grid-cols-2 gap-6 lg:gap-12 mt-6 lg:mt-12">
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
    <div class="inline-flex items-center flex-1 w-full mt-1.5 lg:mt-3">
        <a href="{{ route('news.list') }}" class="text-xs lg:text-base px-6 py-1.5 cursor-pointer bg-mark-default text-white font-bold mx-auto hover:bg-mark-dark rounded-full inline-block">
            More News
        </a>
    </div>
</div>
