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
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2005</div>
                    <div class="text-xs lg:text-sm">@lang('milestones.2005')</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2009</div>
                    <div class="text-xs lg:text-sm"></div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2009</div>
                    <div class="text-xs lg:text-sm">Capacity was up to 110.000 pieces per month. ISO 9001 period extension and upgrade to ISO 9001:2008.</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 hidden sm:block"></div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:col-span-5 text-left sm:space-y-1 lg:space-y-2 ml-3 md:-ml-3 lg:-ml-6 xl:-ml-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2017</div>
                    <div class="text-xs lg:text-sm">Extension of 9001 and upgrade to ISO 9001:2015. Preparation of going public on the Indonesian Stock Exchange.</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2018</div>
                    <div class="text-xs lg:text-sm">Acquired a 90.000 m2 of land. A 1:5 stock split. Capacity was up to 540.000 pcs/month.</div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2018</div>
                    <div class="text-xs lg:text-sm">Acquired a 90.000 m2 of land. A 1:5 stock split. Capacity was up to 540.000 pcs/month.</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 hidden sm:block"></div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:col-span-5 text-left sm:space-y-1 lg:space-y-2 ml-3 md:-ml-3 lg:-ml-6 xl:-ml-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2019</div>
                    <div class="text-xs lg:text-sm">New factory inauguration at Jalan Utama, Desa Dalu. Capacity was up to 610.000 pcs/month.</div>
                </div>
            </div>

            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="animate__animated animate__fadeInLeftBig col-span-5 hidden sm:block text-right sm:space-y-1 lg:space-y-2 mr-3 md:-mr-3 lg:-mr-6 xl:-mr-12">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2020</div>
                    <div class="text-xs lg:text-sm">Capacity was up to 800.000 pcs/month. Acquiring PT Berjaya Dynamics Indonesia. Groundbreaking of new factory with a capacity of 600.000 pcs/month.</div>
                </div>
                <div class="animate__animated animate__fadeIn col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 sm:block hidden"></div>
                <div class="animate__animated animate__fadeInRightBig col-span-10 sm:hidden text-left sm:space-y-1 lg:space-y-2 ml-3">
                    <div class="text-mark-default text-2xl lg:text-3xl font-bold">2020</div>
                    <div class="text-xs lg:text-sm">Capacity was up to 800.000 pcs/month. Acquiring PT Berjaya Dynamics Indonesia. Groundbreaking of new factory with a capacity of 600.000 pcs/month.</div>
                </div>
            </div>
        </div>
    </div>
@endsection