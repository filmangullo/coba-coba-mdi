<div>
    <div class="relative py-16 bg-gray-100 sm:py-24 lg:py-24">
        <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="mt-12 animate__fadeInUp wow animate__animated">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <a href="https://agrodynamicsindo.com/" class="block pt-6">
                        <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
                            <div class="-mt-6">
                                <div class="flex justify-center">
                                    <img class="transition-all duration-500 transform hover:scale-125"
                                        src="{{ asset('img/agriculture.png') }}" alt="Mark Dynamics Agriculture">
                                </div>
                                <div>
                                    <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">
                                        @lang('custom.agriculture')</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        @lang('custom.agriculture-desc')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('gallery') }}" class="block pt-6">
                        <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
                            <div class="-mt-6">
                                <div class="flex justify-center">
                                    <img class="transition-all duration-500 transform hover:scale-125"
                                        src="{{ asset('img/handformer.png') }}" alt="Mark Dynamics Hand Former">
                                </div>
                                <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">
                                    @lang('custom.hand-former')</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    @lang('custom.hand-former-desc')
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="https://berjayadynamicsindonesia.web.indotrading.com/" class="block pt-6">
                        <div class="flow-root h-full px-6 pb-8 bg-gray-200 rounded-lg">
                            <div class="grid content-between -mt-6">
                                <div class="flex justify-center">
                                    <img class="transition-all duration-500 transform hover:scale-125"
                                        src="{{ asset('img/toilet.png') }}" alt="Mark Dynamics Hand Former">
                                </div>
                                <h3 class="mt-8 text-lg font-bold tracking-tight text-gray-900">@lang('custom.sanitary')
                                </h3>
                                <p class="mt-5 text-base text-gray-500">
                                    @lang('custom.sanitary-desc')
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
