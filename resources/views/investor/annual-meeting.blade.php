@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('annual-meeting.title')</h2>
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p>
    <div class="divide-y divide-hitam">
        <div class="py-24 space-y-24">
            <div class="text-center">
                <div class="text-4xl font-bold">2021</div>
                <div class="h-1 mx-auto bg-mark-default w-28"></div>
            </div>
            @php $data = ['Annual General Meeting of Shareholders in MAY 2021 - Announcement to Shareholders', 'Annual General Meeting of Shareholders in MAY 2021 - Invitation to Shareholders']; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $am = 'Announcement-to-Shareholders-2021.pdf';
                    } elseif($key === 1){
                        $am = 'Pemanggilan-RUPS-2021.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($am) }}" download class="flex items-center justify-center mx-auto rounded-full cursor-pointer w-28 h-28 bg-mark-default hover:bg-mark-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-white h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-sm font-bold sm:text-lg">{{$val}}</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="py-24 space-y-24">
            <div class="text-center">
                <div class="text-4xl font-bold">2020</div>
                <div class="h-1 mx-auto bg-mark-default w-28"></div>
            </div>
            @php $data = ['Annual General Meeting of Shareholders in AUG 2020 - Announcement to Shareholders', 'Annual General Meeting of Shareholders in AUG 2020 - Invitation to Shareholders']; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $am = 'Announcement-Aug-2020.pdf';
                    } elseif($key === 1){
                        $am = 'PEMANGGILAN-RUPS-MARK-2020.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($am) }}" download class="flex items-center justify-center mx-auto rounded-full cursor-pointer w-28 h-28 bg-mark-default hover:bg-mark-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-white h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-sm font-bold sm:text-lg">{{$val}}</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="py-24 space-y-24">
            <div class="text-center">
                <div class="text-4xl font-bold">2019</div>
                <div class="h-1 mx-auto bg-mark-default w-28"></div>
            </div>
            @php $data = ['Annual General Meeting of Shareholders in MAY 2019 - Notice to Shareholders', 'Annual General Meeting of Shareholders in MAY 2019 - Invitation to Shareholders']; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $am = 'NOTICE-RUPS-2019.pdf';
                    } elseif($key === 1){
                        $am = 'PEMANGGILAN-RUPS-MAY-EN-2019.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($am) }}" download class="flex items-center justify-center mx-auto rounded-full cursor-pointer w-28 h-28 bg-mark-default hover:bg-mark-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-white h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-lg font-bold">{{$val}}</div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="pt-24 space-y-24">
            <div class="text-center">
                <div class="text-4xl font-bold">2018</div>
                <div class="h-1 mx-auto bg-mark-default w-28"></div>
            </div>
            @php $data = ['Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders', 'Annual General Meeting of Shareholders in APRIL 2018 - Notice to Shareholders', 'Annual General Meeting of Shareholders in DECEMBER 2018 - Invitation to Shareholders', ]; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($data as $key => $val)
                @php
                    if($key === 0){
                        $am = 'panggilan-RUPSEng-768x2086.jpg';
                    } elseif($key === 1){
                        $am = 'PEMBERITAHUAN-RUPSeng-724x1024.jpg';
                    } elseif($key === 2){
                        $am = 'NOTICE-RUPS-2018.pdf';
                    } elseif($key === 3){
                        $am = 'PEMANGGILAN-RUPS-EN-2018.pdf';
                    }
                @endphp
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ asset($am) }}" download class="flex items-center justify-center mx-auto rounded-full cursor-pointer w-28 h-28 bg-mark-default hover:bg-mark-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-white h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="text-lg font-bold">{{$val}}</div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
