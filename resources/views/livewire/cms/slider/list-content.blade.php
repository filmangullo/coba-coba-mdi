<div class="px-2 py-2">
    @foreach ($sliders as $item)
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white">
        <div class="h-56 sm:h-72 md:absolute md:right-0 md:h-full md:w-1/2">
            <img class="object-cover w-full h-full" src="{{ asset('img/slider-4.jpg') }}" alt="">
        </div>
        <div class="relative px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-16 ">
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
                                <a href="#"
                                    class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                    Visit the help center
                                    <!-- Heroicon name: solid/external-link -->
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                    Visit the help center
                                    <!-- Heroicon name: solid/external-link -->
                                </a>
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
                                <a href="#"
                                    class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                    Visit the help center
                                    <!-- Heroicon name: solid/external-link -->
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                    Visit the help center
                                    <!-- Heroicon name: solid/external-link -->
                                </a>
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
                                <a href="#"
                                    class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                    Visit the help center
                                    <!-- Heroicon name: solid/external-link -->
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-5 py-3 text-base font-medium border border-transparent rounded-md text-gray-50 bg-mark-default mx-6justify-center hover:bg-gray-50">
                                    Visit the help center
                                    <!-- Heroicon name: solid/external-link -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <div class="flex my-2 mb-3 space-x-2">
            <button class="px-4 py-2 font-semibold text-green-700 bg-transparent border border-green-500 rounded hover:bg-green-500 hover:text-white hover:border-transparent">Update</button>
            <button class="px-4 py-2 font-semibold text-red-700 bg-transparent border border-red-500 rounded hover:bg-red-500 hover:text-white hover:border-transparent">Delete</button>
        </div>
        @endforeach

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
