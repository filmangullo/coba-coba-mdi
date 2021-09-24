<div class="px-2 py-2">
    @foreach ($sliders as $item)
    <div class="space-y-3">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white">
            <div class="h-56 sm:h-72 md:absolute md:right-0 md:h-full md:w-1/2">
                <img class="object-cover w-full h-full" src="{{ asset($item->file) }}" alt="">
            </div>
            <div class="relative px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-16 " >
                    <div class="md:w-1/2 md:pl-10 sliders">
                        <div>
                            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            {{ $item->title_id}}
                            </p>
                            <p class="mt-3 text-lg text-gray-900">
                                {{ $item->description_id }}
                            </p>
                            <div class="mt-8">
                                <div class="inline-flex space-x-3 rounded-md shadow">
                                    @if ($item->button_id != null)
                                    <a href="{{ $item->url }}"
                                        class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                        {{ $item->button_id }}
                                    </a>
                                    @endif

                                    @if ($item->button1_id != null)
                                    <a href="{{ $item->url1 }}"
                                        class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                        {{ $item->button1_id }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div>
                            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                {{ $item->title_en}}
                            </p>
                            <p class="mt-3 text-lg text-gray-900">
                                {{ $item->description_en }}
                            </p>
                            <div class="mt-8">
                                <div class="inline-flex space-x-3 rounded-md shadow">
                                    @if ($item->button_en != null)
                                    <a href="{{ $item->url }}"
                                        class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                        {{ $item->button_en }}
                                    </a>
                                    @endif

                                    @if ($item->button1_en != null)
                                    <a href="{{ $item->url1 }}"
                                        class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                        {{ $item->button1_en }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div>
                            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                {{ $item->title_cn }}
                            </p>
                            <p class="mt-3 text-lg text-gray-900">
                                {{ $item->description_cn }}
                            </p>
                            <div class="mt-8">
                                <div class="inline-flex space-x-3 rounded-md shadow">
                                    @if ($item->button_cn != null)
                                    <a href="{{ $item->url }}"
                                        class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                        {{ $item->button_cn }}
                                    </a>
                                    @endif

                                    @if ($item->button1_cn != null)
                                    <a href="{{ $item->url1 }}"
                                        class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                        {{ $item->button1_cn }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="flex my-2 mb-3 space-x-2">
                <a href="{{ route('cms-slider.update',$item->id) }}"class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent">Update</a>
                <button wire:click="openDeleteSliderModal({{$item->id}})" class="px-4 py-2 font-semibold text-red-700 bg-transparent border border-red-500 rounded hover:bg-red-500 hover:text-white hover:border-transparent">Delete</button>
            </div>
        </div>
        @endforeach

    </div>
    {{-- Modal Delete Slider --}}
    @if($deleteSliderModal)
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>


            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                            Delete
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                Are you sure you want to delete this? All of your data will be permanently
                                removed from our servers forever. This action cannot be undone.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <button wire:click='deleteSlider' type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Delete
                    </button>
                    <button wire:click='closeDeleteSliderModal' type="button"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endIf
</div>

    @push('styles')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    @endpush
    @push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.sliders').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>
    @endpush
