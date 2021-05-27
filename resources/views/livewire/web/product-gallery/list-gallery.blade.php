<div class="mx-auto  px-4 sm:px-6 lg:px-8 ">
    <div class="py-24 text-4xl font-bold text-center">Gallery</div>
    <div class="flex items-center flex-wrap pb-24 -mx-3 -my-3">
        @foreach($gallery as $g)
        <div class="sm:w-6/12 md:w-4/12 lg:w-3/12 px-3 py-3">
            <img class="object-cover h-48 rounded-md w-full " src="{{ asset( $g->img ) }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endforeach
    </div>
    <div class="flex items-center justify-center space-x-8 pb-24">
        {{ $gallery->links() }}
    </div>
</div>
