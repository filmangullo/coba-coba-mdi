@extends('layouts.master')

@section('content')
<div class="relative pt-28">
    <!-- Decorative background -->
    <div aria-hidden="true" class="absolute inset-x-0 h-1/2 bg-gradient-to-b from-white to-gray-50"></div>

    <div class="relative max-w-2xl px-4 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
        <div
            class="relative px-8 py-24 overflow-hidden shadow-2xl bg-rose-500 rounded-xl lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="absolute inset-0 mix-blend-multiply">
                <img src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1216&q=80"
                    alt="" class="object-cover w-full h-full">
            </div>
            <div class="relative lg:col-span-1">
                <img class="w-auto h-12" src="https://tailwindui.com/img/logos/workcation-logo-white.svg" alt="">
                <blockquote class="mt-6 text-white">
                    <p class="text-xl font-medium sm:text-2xl">
                        Transcending industry standards</p>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<div>
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ]
  }
  ```
-->
    <div class="bg-white">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Certificates</h2>
                </div>
                <ul
                    class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                    @foreach ($ac as $item)
                    <li>
                        <div class="space-y-4 border border-gray-400 rounded-lg">
                            <div class="aspect-w-3 aspect-h-2">
                                <img class="object-cover h-48 mx-auto"
                                    src="{{ asset("$item->img") }}"
                                    alt="">
                            </div>

                            <div class="space-y-2">
                                <div class="space-y-1 text-lg font-bold leading-6 text-center h-44">
                                    <h3>{!! (__('custom.lang') == 'id') ? $item->title_id : $item->title_en!!}</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach


                    <!-- More people... -->
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection
