@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">Board Members</div>

    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/board-member.png') }}'>

</div>

<div class="container mx-auto">
    <div class="py-12 text-4xl font-bold text-center text-black">
        <h1>Board of Commisioner</h1>
    </div>

    <div class="grid grid-flow-col grid-cols-4 grid-rows-3 gap-4 px-12 mb-12">
        <div class="col-span-1 row-span-3 ">
            <img class="w-full mx-auto" src='{{ asset('img/chin-kien-ping.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Chin Kien Ping</h1>
            <p class="italic font-semibold ">President Comissioner</p>
        </div>
        <div class="col-span-4 row-span-2 ml-5 text-justify">
            A Malaysian citizen, 44 years old domiciled in Kuala Lumpur, appointed as the President Commissioner based on shareholder’s decision on March 22, 2017, in accordance with Notarial Deed Number 132 dated March 22, 2017.
He holds a diploma in Animal and Veterinary Science from the National Pingtung Polytechnic Institute, Taiwan in 1995, and an MBA from the West Coast Institute of Management and Technology, Australia in 2000. He began his career in the company since 2002 as a Director. After 12 years, he was then appointed as the President Director, serving from 2014 to 2015 before returning to being a Director until 2017. Since 2017, he has been the President Commissioner of the Company.
        </div>
    </div>

    <div class="grid grid-flow-col grid-cols-4 grid-rows-5 gap-4 px-12 mb-12">
        <div class="col-span-1 row-span-5 ">
            <img class="w-full mx-auto" src='{{ asset('img/dompak-pasaribu.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Dompak Pasaribu</h1>
            <p class="italic font-semibold ">Independent Comissioner</p>
        </div>
        <div class="col-span-4 row-span-4 ml-5 text-justify">
            Indonesian citizen, 46 years old residing in Medan. He was appointed as an Independent Commissioner of the Company based on the decision of the shareholders on 22 March 2017, in accordance with Notarial Deed No. 132 dated 22 March 2017.
A holder of the Doctorate Degree in Accounting from the University of North Sumatra (USU) in 2018, a Masteral Degree of Accounting Science from the USU Faculty of Economics and Business in 2003 and a Bachelor of Economics in Accounting Study Program at the Faculty of Economics, Methodist University of Indonesia (UMI) in 1998. Having a Certified Public Accountant (CPA) from the Indonesian Institute of Certified Public Accountants in 2017. Active as a teaching staff in the Accounting Study Program of the Faculty of Economics and the Information Systems Study Program of the Faculty of Computer Science UMI. Dompak Pasaribu has served as Vice Dean II of Information Systems at the Faculty of Computer Science at UMI. The Secretary of the UMI Quality Assurance Agency in 2012-2016, was later appointed as the Chairperson of the UMI Quality Assurance Agency in 2016 until today. In addition, he also became the Chairperson of UMI Employee Cooperative Management Board since 2018.
He served as a Branch Manager at PT. Etrading Securities in Medan from 2007 until 2013. Since 2015, he serves as the Audit Committee at PT. ATMINDO, Tbk.
        </div>
    </div>

    <div class="grid grid-flow-col grid-cols-4 grid-rows-5 gap-4 px-12 mb-12">
        <div class="col-span-1 row-span-5 ">
            <img class="w-full mx-auto" src='{{ asset('img/ridwan-goh.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Ridwan Goh</h1>
            <p class="italic font-semibold ">President Director</p>
        </div>
        <div class="col-span-4 row-span-4 ml-5 text-justify">
            A 37 years old Indonesian living in Medan, appointed as President Directors based on the decision of the shareholders at the Annual General Meeting of Shareholders on 30 April 2018, in accordance with Notarial Deed Number 39 dated 30 April 2018. He is a graduate of the Microskil Institute, holding a Bachelor’s degree in Computer Engineering.
He started his career as an International Marketing Manager at PT. Tropical Wood Indotama from 2004 to 2008. At the time, PT. Tropical Wood Indotama was the biggest wood company in North Sumatra. In 2008 he joined PT. Mark Dynamics Indonesia Tbk as Marketing Manager. With an experience of around 15 years in the field of International Trade, he was then appointed as a Director of the Company in 2017. He then assumed the position of President Director in 2018. In July 25th, 2019 he received Indonesia Marketeers Festival 2019 Award as Industry Marketing Championship of The Year in retail sector.
        </div>
    </div>

    <div class="grid grid-flow-col grid-cols-4 grid-rows-5 gap-4 px-12 mb-12">
        <div class="col-span-1 row-span-5 ">
            <img class="w-full mx-auto" src='{{ asset('img/sutiyoso-bin-risman.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>
            <p class="italic font-semibold ">Director</p>
        </div>
        <div class="col-span-4 row-span-4 ml-5 text-justify">
            An Indonesian citizen, aged 50 years domiciled in Medan, appointed as a Director of the Company based on shareholder decisions on March 22, 2017, in accordance with Notarial Deed Number 132 dated March 22, 2017.
He has worked in the Company since 2002 with a position as General Manager between 2002 – 2009, before being appointed as Commissioner until 2014.
        </div>
    </div>

    <div class="grid grid-flow-col grid-cols-4 grid-rows-5 gap-4 px-12 mb-12">
        <div class="col-span-1 row-span-5 ">
            <img class="w-full mx-auto" src='{{ asset('img/cahaya-dewi-surbakti.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>
            <p class="italic font-semibold ">Independent Director</p>
        </div>
        <div class="col-span-4 row-span-4 ml-5 text-justify">
            An Indonesian citizen, 38 years old, domiciled in Medan, appointed as the Independent Director of the Company on 30 April 2018, based on the decision of the shareholders at the Annual General Meeting of Shareholders, in accordance with Notarial Deed Number 39 dated 30 April 2018.
She has a Bachelor’s degree in Chemical Engineering from Universitas Sumatera Utara (USU). After graduating, she started her career in the Company as a Quality Assurance Executive in 2004. Having followed an intensive training on ceramics processing for 2 years, her passion in doing this job significantly increased. She was then entrusted as the Head of Research and Development, serving from 2011 until 2018.
        </div>
    </div>
</div>
@endsection
