<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mark Dynamics Indonesia</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-hitam antialiased">
            
            {{-- Header --}}
            <div class="bg-hitam fixed z-40 w-full">
                <div class="flex items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <img onclick="location.href='/';" src="#" alt="Mark Dynamics Indonesia">
                    <div class="flex items-center text-white text-xs font-medium gap-12 py-10">
                        <a href="#">About Us</a>
                        <a href="#">Products & Gallery</a>
                        <a href="#">Investor Relations</a>
                        <a href="#">Sustainability</a>
                        <a href="#">Career</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>

            @yield('content')

            {{-- Footer --}}
            <div class="bg-white border-t bottom-0 border-gray-300">
                <div class="grid grid-cols-5 justify-items-center font-medium text-xs py-10 items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <a href="#">Investor Relations</a>
                    <a href="#">Sustainability</a>
                    <img class="w-24" src="{{ asset('img/logo.svg') }}">
                    <a href="#">Career</a>
                    <a href="#">Contact Us</a>
                </div>
                <div class="text-xs text-center pb-6">All Rights Reserved &copy; Mark Dynamics 2021.</div>
            </div>
        </div>
    </body>
</html>