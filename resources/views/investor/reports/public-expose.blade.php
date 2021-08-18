@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 pt-32 lg:px-8 text-center">
    <h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('public-expose.title')</h2>
    {{-- <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p> --}}
    <div class="divide-y divide-hitam">
        <div class="space-y-24 py-24">
            <div class="text-center">
                <div class="font-bold text-4xl">2021</div>
                <div class="mx-auto bg-mark-default w-28 h-1"></div>
            </div>
            @php $data = ['Pubex MARK ', 'Pubex QnA MARK ']; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $_2021 = 'pubex-mark-2021.pdf';
                    } elseif($key === 1){
                        $_2021 = 'pubex-qna-mark-2021.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($_2021) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-sm sm:text-lg font-bold">{{$val}} 2021</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="space-y-24 py-24 bg-gray-100">
            <div class="text-center">
                <div class="font-bold text-4xl">2020</div>
                <div class="mx-auto bg-mark-default w-28 h-1"></div>
            </div>
            @php $data = ['Pubex MARK ', 'Pubex QnA MARK ']; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $_2020 = 'pubex-mark-2020.pdf';
                    } elseif($key === 1){
                        $_2020 = 'pubex-qna-mark-2020.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($_2020) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-sm sm:text-lg font-bold">{{$val}} 2020</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="space-y-24 py-24">
            <div class="text-center">
                <div class="font-bold text-4xl">2019</div>
                <div class="mx-auto bg-mark-default w-28 h-1"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $_2019 = 'pubex-mark-2019.pdf';
                    } elseif($key === 1){
                        $_2019 = 'pubex-qna-mark-2019.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($_2019) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-sm sm:text-lg font-bold">{{$val}} 2019</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="space-y-24 py-24 bg-gray-100">
            <div class="text-center">
                <div class="font-bold text-4xl">2018</div>
                <div class="mx-auto bg-mark-default w-28 h-1"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $_2018 = 'pubex-mark-2018.pdf';
                    } elseif($key === 1){
                        $_2018 = 'pubex-qna-mark-2018.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($_2019) }}" download class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-sm sm:text-lg font-bold">{{$val}} 2018</div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
