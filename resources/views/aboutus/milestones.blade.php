@extends('layouts.master')

@section('content')
    <div class="w-full h-auto relative pt-12 lg:pt-24">
        <img class="2xl:w-full" src="{{ asset('img/milestones-hero.png') }}" alt="Mark Dynamics Milestones">
        <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
        <div class="absolute text-white text-center w-full text-sm sm:text-2xl lg:text-4xl font-bold top-1/2 mt-5 h-full">@lang('milestones.milestones')</div>
    </div>
    <div class="my-12 lg:my-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full h-auto relative grid grid-cols-1 justify-center">
            <div class="bg-mark-default h-5/6 top-10 z-0 absolute mx-auto w-1 sm:block hidden left-1/2 -ml-0.5"></div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 hidden sm:block"></div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:col-span-5 text-left sm:space-y-1 lg:space-y-2 ml-3 md:-ml-3 lg:-ml-6 xl:-ml-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2002</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2002')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2003</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2003')</div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/settings-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2003</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2003')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 hidden sm:block"></div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:col-span-5 text-left sm:space-y-1 lg:space-y-2 ml-3 md:-ml-3 lg:-ml-6 xl:-ml-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2007</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2007')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2009</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2009')</div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2009</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2009')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 hidden sm:block"></div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:col-span-5 text-left sm:space-y-1 lg:space-y-2 ml-3 md:-ml-3 lg:-ml-6 xl:-ml-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2017</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2017')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2018</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2018')</div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2018</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2018')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 hidden sm:block"></div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:col-span-5 text-left sm:space-y-1 lg:space-y-2 ml-3 md:-ml-3 lg:-ml-6 xl:-ml-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2019</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2019')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2020</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2020')</div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2020</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2020')</div>
                </div>
            </div>
        </div>
    </div>
@endsection