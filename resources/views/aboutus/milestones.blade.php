@extends('layouts.master')

@section('content')
<style>
    .timeline{

    }
</style>
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('milestones.milestones')</h2>
    {{-- <p class="animate__fadeInDown animate__animated mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
    Everything you need to deploy your app
    </p>
    <p class="animate__fadeInDown animate__animated mx-auto mt-5 text-xl text-gray-500 max-w-prose text-center">
      Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
    </p> --}}

    <div class="animate__fadeInLeft animate__animated relative w-full sm:w-2/3 lg:w-2/3 mt-24 mx-auto">
        <div class="border-r-2 border-gray-200 border-dotted absolute h-full top-0 z-10 left-2 sm:left-32 lg:left-60 sm:-ml-2"></div>
        <ul class="list-none sm:ml-28 lg:ml-56 m-0 p-0 space-y-12">
            <li>
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2002</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2002')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2003</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2003')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2005</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2005')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2007</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2007')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2008</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2008')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2009</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2009')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2011</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2011')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2014</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2014')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2016</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2016')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2017</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2017')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2018</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2018')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2019</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2019')
                </div>
            </li>
            <li class="sm:pt-8 lg:pt-16">
                <div class="xssm:w-2/3 xsm:w-1/2 xssm:h-36 xsm:h-40 mb-4 sm:mb-0 sm:w-36 sm:h-24 lg:w-60 lg:h-36 sm:absolute">
                    <img class="h-full w-full object-cover rounded-md sm:rounded-xl lg:-mt-6 sm:-ml-28 lg:-ml-52" src="{{ asset('img/dummy-milestones.jpg') }}" alt="">
                </div>
                <div class="flex items-center mb-1">
                    <div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">
                    </div>
                    <div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2020</div>
                </div>
                <div class="ml-8 sm:ml-16">
                    @lang('milestones.2020')
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection

