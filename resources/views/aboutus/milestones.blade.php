@extends('layouts.master')

@section('content')
    <div class="w-full h-auto relative pt-24">
        <img src="{{ asset('img/milestones-hero.png') }}" alt="Mark Dynamics Milestones">
        <div class="absolute bg-mark bg-opacity-50 h-full top-0 w-full"></div>
        <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Milestones</div>
    </div>
    <div class="my-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full h-auto relative grid grid-cols-1 justify-center">
            <div class="bg-mark h-5/6 top-10 z-0 absolute mx-auto w-1 left-1/2 -ml-0.5"></div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5"></div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 text-left space-y-2 -ml-12">
                    <div class="text-mark-default text-3xl font-bold">2002</div>
                    <div class="text-sm">Establishment of PT Mark Dynamics Indonesia</div>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 text-right space-y-2 -mr-12">
                    <div class="text-mark-default text-3xl font-bold">2003</div>
                    <div class="text-sm">Built the first factory on an area of 3.000 m2 armed with a 50.000 pieces per month capacity.</div>
                </div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/settings-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5"></div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5"></div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 text-left space-y-2 -ml-12">
                    <div class="text-mark-default text-3xl font-bold">2007</div>
                    <div class="text-sm">Acquired a 3.500 m2 land and additional capacity of 5.000 pieces per month.</div>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 text-right space-y-2 -mr-12">
                    <div class="text-mark-default text-3xl font-bold">2009</div>
                    <div class="text-sm">Capacity was up to 110.000 pieces per month. ISO 9001 period extension and upgrade to ISO 9001:2008.</div>
                </div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5"></div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5"></div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 text-left space-y-2 -ml-12">
                    <div class="text-mark-default text-3xl font-bold">2017</div>
                    <div class="text-sm">Extension of 9001 and upgrade to ISO 9001:2015. Preparation of going public on the Indonesian Stock Exchange.</div>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 text-right space-y-2 -mr-12">
                    <div class="text-mark-default text-3xl font-bold">2018</div>
                    <div class="text-sm">Acquired a 90.000 m2 of land. A 1:5 stock split. Capacity was up to 540.000 pcs/month.</div>
                </div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5"></div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5"></div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/edit-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5 text-left space-y-2 -ml-12">
                    <div class="text-mark-default text-3xl font-bold">2019</div>
                    <div class="text-sm">New factory inauguration at Jalan Utama, Desa Dalu. Capacity was up to 610.000 pcs/month.</div>
                </div>
            </div>
            <div class="grid grid-cols-12 mb-12 z-10 justify-center">
                <div class="col-span-5 text-right space-y-2 -mr-12">
                    <div class="text-mark-default text-3xl font-bold">2020</div>
                    <div class="text-sm">Capacity was up to 800.000 pcs/month. Acquiring PT Berjaya Dynamics Indonesia. Groundbreaking of new factory with a capacity of 600.000 pcs/month.</div>
                </div>
                <div class="col-span-2">
                    <img class="mx-auto" src="{{ asset('img/bank-icon.png') }}" alt="Mark Dynamics Milestones">
                </div>
                <div class="col-span-5"></div>
            </div>
        </div>
    </div>
@endsection