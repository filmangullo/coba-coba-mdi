@extends('layouts.master')

@section('content')
<div class="relative overflow-hidden lg:h-100">

    <img class="absolute w-full" src="{{ asset('img/award-me.png')}}">
    <div class="relative mx-auto text-left max-w-7xl top-1/2">
        <h2 class="relative z-20 mt-2 text-3xl font-extrabold tracking-tight text-white animate__fadeInDown animate__animated sm:text-4xl">A testament to our dedication</h2>
    </div>

</div>
<div class="px-4 pt-0 pb-12 mx-auto animate__animated animate__fadeInDown max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-center animate__fadeInDown animate__animated text-mark-default sm:text-4xl">@lang('custom.awards')
    </h2>
    <div class="px-4 mx-auto divide-y lg:my-24 max-w-7xl sm:px-6 lg:px-8 divide-hitam">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-0 lg:py-2">
            <div class="space-y-2">
                <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-4 lg:gap-8">
                    @forelse ($ac as $key => $item)
                        <li class="px-1 py-10 text-center bg-white rounded-t-lg shadow-lg xl:px-1 xl:text-left">
                            <div x-data="" class="h-98 animate__animated animate__backInUp">
                                <div x-show="tab === 'foo'" class="h-120">
                                    <div class="h-40 overflow-hidden">
                                    <img class="w-auto mx-auto rounded-t-md max-h-40"
                                        src="{{ asset($item->img) }}"
                                        alt="">
                                    </div>
                                    <div class="px-2 space-y-4">
                                        <div class="h-48 space-y-1 text-base leading-6">
                                            <h3 class="font-bold text-blue-700">{!! $item->year !!}</h3>
                                            <p class="font-semibold text-gray-700">{!! (__('custom.lang') == 'id') ? $item->title_id : $item->title_en!!}</p>
                                            <p class="font-normal text-justify">{!! (__('custom.lang') == 'id') ? $item->description_id : $item->description_en!!}</p>
                                        </div>
                                    </div>

                                    {{-- <div class="px-2 space-y-4">
                                        <button :class="{ 'active': tab === 'bar' }" @click="tab = 'bar'"
                                            class="px-2 font-bold text-green-600 border-2 border-green-600 rounded-md text-1xl hover:bg-green-700 hover:text-white">+</button>
                                    </div> --}}
                                </div>

                                {{-- <div x-show="tab === 'bar'" class="text-justify h-80 animate__animated animate__backInUp">
                                    <button :class="{ 'active': tab === 'foo' }" @click="tab = 'foo'"
                                            class="px-2 font-bold text-green-600 border-2 border-green-600 rounded-md text-1xl hover:bg-green-700 hover:text-white">-</button>
                                    <p>{!! (__('custom.lang') == 'id') ? $item->description_id : $item->description_en!!}</p>
                                </div> --}}

                            </div>
                        </li>
                    @empty

                    @endforelse

                    <!-- More people... -->
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
