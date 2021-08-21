<div class="px-4 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
    @php
        $img = ["jpg", "JPG", "bmp", "BMP", "gif", "GIF", "jpeg", "JPEG", "png", "PNG"];
        $video = ["MP4", "mp4"];
    @endphp
    @if ($this->nowPreview)
        <div class="grid grid-cols-2 gap-4 mb-4 sm:grid-cols-4 lg:grid-cols-6">
            <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
                <img class="object-cover w-full rounded-md" src="{{ asset($nowPreview) }}" alt="Mark Dynamics Gallery & Products">
            </div>
        </div>
    @endif

    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
        @foreach ($env ? : [] as $item)

            <div wire:click="preview('{{ $item->img }}')" class="cursor-pointer">

                @if(in_array(substr($item->img, strpos($item->img, '.') + 1), $img ))
                    <img class="object-cover w-full h-20 rounded-md sm:h-28" src="{{ asset($item->img) }}" alt="Mark Dynamics Gallery & Products">
                @elseif (in_array(substr($item->img, strpos($item->img, '.') + 1), $video ))
                <video width="320" height="300" controls>
                    <source src="{{ asset($item->img) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                @endif

            </div>
        @endforeach

    </div>
    <div class="grid grid-cols-2 gap-4 mt-4 sm:grid-cols-4 lg:grid-cols-6">
        <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
            {{ $env->links() }}
        </div>
    </div>
</div>
