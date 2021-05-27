@extends('layouts.master')

@section('content')
<div class="w-full h-auto relative pt-24">
    <img src="{{ asset('img/annual-meeting-hero.png') }}" alt="Mark Dynamics Awards & Certificates">
    <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
    <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Annual General Meeting</div>
</div>
<div class="w-full mx-auto px-4 sm:px-6 lg:px-8 divide-y divide-hitam">
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2020</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Announcement to Shareholders August 2020', 'Invitation to Shareholders August 2020', 'The Resume of The Minutes of The Annual General Meeting of Shareholders August 2020']; @endphp
        <div class="flex w-full items-start  sm:justify-start justify-center  flex-wrap  -my-8 ">
        @foreach($data as $key => $val)
            <div class="text-center sm:w-6/12 lg:w-3/12 xsm:px-4 py-8">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2019</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Announcement to Shareholders August 2019', 'Invitation to Shareholders August 2019', 'The Resume of The Minutes of The Annual General Meeting of Shareholders August 2019']; @endphp
        <div class="flex w-full items-start  sm:justify-start justify-center  flex-wrap  -my-8 ">
        @foreach($data as $key => $val)
            <div class="text-center sm:w-6/12 lg:w-3/12 xsm:px-4 py-8">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="space-y-24 py-24">
        <div class="text-center">
            <div class="font-bold text-4xl">2018</div>
            <div class="mx-auto bg-mark-default w-28 h-1"></div>
        </div>
        @php $data = ['Announcement to Shareholders August 2020', 'Invitation to Shareholders August 2020', 'The Resume of The Minutes of The Annual General Meeting of Shareholders August 2020','Announcement to Shareholders August 2020', 'Invitation to Shareholders August 2020', 'The Resume of The Minutes of The Annual General Meeting of Shareholders August 2020']; @endphp
        <div class="flex w-full items-start sm:justify-start justify-center  flex-wrap -my-8 ">
        @foreach($data as $key => $val)
            <div class="text-center  sm:w-6/12 lg:w-3/12 xsm:px-4 py-8">
                <div class="rounded-full mx-auto w-28 h-28 bg-mark-default hover:bg-mark-dark cursor-pointer flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="text-lg font-bold">{{$val}}</div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection