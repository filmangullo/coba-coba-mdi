@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">@lang('board-members.board_members')</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        @lang('board-members.board_of_commisioner')
    </p>
    <div class="pt-24 mx-auto">

        <div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/chin-kien-ping.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Chin Kien Ping</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.president_commissioner')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_chin_kien_ping')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-12 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/dompak-pasaribu.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.independent_commissioner')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_dompak_pasaribu')
                </div>
            </div>
        </div>

        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('board-members.board_members')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('board-members.board_of_directors')
        </p>
        <div class="grid grid-cols-1 gap-4 my-12 lg:my-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/ridwan-goh.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Ridwan Goh</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.president_director')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_ridwan_goh')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/sutiyoso-bin-risman.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.direktur')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_sutiyoso_bin_risman')
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='{{ asset('img/cahaya-dewi-surbakti.png') }}'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>
                    <p class="italic font-semibold text-mark-default">@lang('board-members.independent_director')</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    @lang('board-members.about_cahaya_dewi_surbakti')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
    <h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">董事会成员</h2>
    <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        委员会
    </p>
    <div class="pt-24 mx-auto">

        <div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3">
                <img class="w-full mx-auto rounded-xl" src='img/chin-kien-ping.png'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Chin Kien Ping</h1>
                    <p class="italic font-semibold text-mark-default">委员长</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    <span class="ml-12">一位</span> 44 岁的马来西亚人，居住于吉隆坡。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为委员长。<br><br>
        <span class="ml-12">他于</span> 1995 年获得台湾国立屏东理工学院动物与兽医学文凭，并于 2000 年获得澳大利亚西岸科技管理学院的硕士学位。于 2002 年开始在公司担任董事。12 年后被任命为董事长，从 2014 年到 2015 年任职，然后重新担任董事直至 2017 年。自2017年起，他担任了本公司的委员长。
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-12 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='img/dompak-pasaribu.png'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
                    <p class="italic font-semibold text-mark-default">独立委员</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    <span class="ml-12">一位</span> 46 岁的印度尼西亚人，居住于棉兰。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为独立委员。<br><br>
        <span class="ml-12">他于</span> 2018 年获得北苏门答腊大学（USU）会计学博士学位，于2003 年获得USU经济与商业学院会计学硕士学位，并于1998 年获得印度尼西亚卫理公会大学 (UMI) 经济学院会计学经济学学士学位。2017 年获得印尼注册会计师协会的注册会计师（CPA）。他也是UMI 经济学院会计学习计划和计算机科学学院信息系统学习计划的教学人员。<br><br>
        <span class="ml-12">Dompak Pasaribu</span> 曾担任 UMI 计算机 科学学院信息系统的二级副院长。2012 至 2016 年，他担任 UMI 的质量保证机构秘书。后来于 2016 年被任命为 UMI 质量保证机构主席，如今还继续任职。此外，他还自 2018 年起担任 UMI 员工合作管理委员会会长。2007 年至 2013 年，他在 PT. Etrading Securities 担任分公司经理。自 2015 年起，他在PT. ATMINDO, Tbk. 担任审计委员会。
                </div>
            </div>
        </div>

        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">董事会成员</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            董事会
        </p>
        <div class="grid grid-cols-1 gap-4 my-12 lg:my-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='img/ridwan-goh.png'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Ridwan Goh</h1>
                    <p class="italic font-semibold text-mark-default">董事长</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    <span class="ml-12">一</span>名居住于棉兰的 37 岁印度尼西亚人。在 2018 年 4 月 30 日，股东根据 2018 年 4 月 30 日的第 39 号公证契约选任他为董事长。<br><br>
        <span class="ml-12">他毕业于</span> Mikroskil 学院，持有计算机工程学士学位。他于 2004 年至 2008 年开始在 PT. Tropical Wood Indotama 担任国际营销经理。那时，PT. Tropical Wood Indotama 是苏北省最大的木材公司。于 2008 年，他在星河陶瓷Tbk 担任营销经理。<br><br>
        <span class="ml-12">凭</span>借他在国际贸易领域 15 多年的经验，他于 2017 年被选任为本公司的董事。随后又于 2018 年担任董事长。2019 年 7 月 25 日，他获得了 Indonesia Marketeers Festival 2019 的零售业年度行业营销冠军。
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='img/sutiyoso-bin-risman.png'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>
                    <p class="italic font-semibold text-mark-default">董事</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    <span class="ml-12">一</span>名居住于棉兰的 50 岁印度尼西亚人。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为董事。他已于2002 在本公司工作，从 2002 年至 2009 年担任总经理。随后被任命为委员，担任直至 2014 年。
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-flow-col md:grid-cols-3">
            <div class="col-span-1 md:row-span-3 ">
                <img class="w-full mx-auto rounded-xl" src='img/cahaya-dewi-surbakti.png'>
            </div>
            <div class="col-span-2">
                <div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
                    <h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>
                    <p class="italic font-semibold text-mark-default">独立董事</p>
                </div>
                <div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5">
                    <span class="ml-12">一</span>名居住于棉兰的 38 岁印度尼西亚人。在 2018 年 4 月 30 日，股东根据 2018 年 4 月 30 日的第 39 号公证契约选任他为独立董事。<br><br>
        <span class="ml-12">她</span>持有北苏门答腊大学（USU）的化学工程学士学位。毕业后于 2004 年在公司开始担任质量保证执行官。经过两年的陶瓷加工强化培训，她对这份工作的热情大大增加。随后，她又被任命为研发主管，任职时间为 2011 年至 2018 年。
                </div>
            </div>
        </div>
    </div>
</div>
