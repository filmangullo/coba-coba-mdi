<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-12 lg:px-8">
    <div class="py-24 text-4xl font-bold text-center">Gallery</div>
    <div class="flex flex-wrap items-center pb-24 -mx-3 -my-3 ">
        @foreach($gallery ? : [] as $g)
        <div class="px-3 py-3 xsm:w-6/12 md:w-4/12 lg:w-3/12">
            <img class="object-cover w-full h-40 rounded-md " src="{{ asset( $g->img ) }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
    </div>
    <div class="flex items-center justify-center pb-12 space-x-8">
        {{ $gallery->links() }}
    </div>
</div>
