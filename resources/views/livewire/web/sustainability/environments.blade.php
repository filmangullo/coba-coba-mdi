<div class="px-4 mt-10 pb-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
    @php
    $img = ["jpg", "JPG", "bmp", "BMP", "gif", "GIF", "jpeg", "JPEG", "png", "PNG"];
    $video = ["MP4", "mp4"];
    @endphp
    {{-- @if ($this->nowPreview)
        <div class="grid grid-cols-2 gap-4 mb-4 sm:grid-cols-4 lg:grid-cols-6">
            <div class="col-span-2 sm:col-span-4 lg:col-span-6 h-3/4">
                <img class="object-cover w-full rounded-md" src="{{ asset($nowPreview) }}" alt="Mark Dynamics Gallery &
                Products">
            </div>
        </div>
    @endif

<div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
    @foreach ($env ? : [] as $item)

    <div wire:click="preview('{{ $item->img }}')" class="cursor-pointer">

        @if(in_array(substr($item->img, strpos($item->img, '.') + 1), $img ))
        <img class="object-cover w-full h-20 rounded-md sm:h-28" src="{{ asset($item->img) }}"
            alt="Mark Dynamics Gallery & Products">
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
</div> --}}

<div class="slider" data-slick='{"slidesToShow": 1 , "slidesToScroll": 1 }'>
    @foreach ($env ? : [] as $item)
    <div class="cursor-pointer mx-3.5">

        @if(in_array(substr($item->img, strpos($item->img, '.') + 1), $img ))
            <img class="w-full rounded-md" src="{{ asset($item->img) }}" alt="Mark Dynamics Gallery & Products">
        @elseif (in_array(substr($item->img, strpos($item->img, '.') + 1), $video ))
            <video width="900" controls class="mx-auto">
                <source src="{{ asset($item->img) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif
    </div>
    @endforeach
</div>

@push('scripts')

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        arrows: false,
        autoplay: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css"
    href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
@endpush


</div>
