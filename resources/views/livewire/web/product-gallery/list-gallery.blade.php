<div>
    <div class="py-24 text-4xl font-bold text-center">Gallery</div>
    <div class="grid grid-cols-4 gap-4 pb-24">
        @foreach($gallery as $g)
        <div>
            <img class="object-cover h-40 rounded-md" src="{{ asset('img/hero-1.png') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
    </div>
    <div class="flex items-center justify-center gap-6 pb-24">
        {{ $gallery->links() }}
    </div>
</div>
