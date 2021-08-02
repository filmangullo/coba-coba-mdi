<div>

    <div class="bg-white">
        <!-- Header and Page Header -->
        <main>
            <!-- Pricing Section -->
            <section class="relative" aria-labelledby="pricing-heading">
                <h2 id="pricing-heading" class="sr-only">Pricing</h2>

                <!-- Tiers -->
                <div
                    class="max-w-2xl px-4 mx-auto space-y-12 sm:px-6 lg:max-w-7xl lg:space-y-0 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
                    @forelse ($list as $item)
                    <div class="relative flex flex-col p-8 bg-white border border-gray-200 shadow-sm rounded-2xl">
                        <div class="flex-1 space-y-3">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">{{ $item->title_id}}</h3>
                            </div>
                            <div class="w-full text-right">
                                <h3 class="italic font-semibold text-gray-900 text-md">{{ $item->title_en}}</h3>
                            </div>
                            <div>
                                <img src="{{ asset($item->img) }}" >
                            </div>
                        </div>

                        <a href="{{ route('cms-certificates.update', $item->id) }}"
                            class="block w-full px-6 py-3 mt-8 font-medium text-center text-green-700 border border-transparent rounded-md bg-green-50 hover:bg-green-100">Edit</a>
                    </div>
                    @empty

                    @endforelse



                </div>


            </section>



            <!-- Logo Cloud -->


            <!-- Testimonial -->


            <!-- FAQ -->

        </main>
    </div>

</div>
