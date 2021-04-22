@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="h-20">
    Header
</div>
<div class="relative w-full h-60">
    <div class="absolute left-0 right-0 z-20 w-full py-20 mx-auto my-auto space-y-6 text-center text-white">
        <div class="text-5xl font-bold">Audit Comittee</div>

    </div>
    <div class="absolute w-full h-full bg-opacity-50 bg-mark"></div>
    <img class="w-full h-full" src='{{ asset('img/audit-comittee.png') }}'>

</div>

<div class="container pt-12 mx-auto">
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
            <img class="w-full mx-auto" src='{{ asset('img/daulat-sihombing.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Daulat Sihombing</h1>
            <p class="italic font-semibold ">Members</p>
        </div>
        <div class="col-span-4 row-span-4 ml-5 text-justify">
            An Indonesian citizen, domiciled in Medan, 64 years old, holding a position as a member of the Audit Committee since March 22, 2017. He completed his education with a Bachelor’s degree in Accounting from the Faculty of Economics, University of North Sumatra (USU) in 1984 and a Masteral degree in Accounting from Post Bachelor of University of North Sumatra (USU) in 2008.
In addition to serving as a Member of the Audit Committee, he is also an Independent Commissioner of PT Atmindo Tbk (2015-present) and an Audit Committee of PT Toba Pulp Lestari Tbk (2008-present). Started his career in 1981 as an Internal Auditor at a Forwarding and Shipping Company in Medan. Then since 1984 as a permanent lecturer at the Methodist University of Indonesia in Medan, he has served as Assistant Dean I, II and III, then Dean and most recently as Deputy Chancellor II. Other positions that have been held include the President Director of PT Artha Siloam (1991-1995).
        </div>
    </div>

    <div class="grid grid-flow-col grid-cols-4 grid-rows-5 gap-4 px-12 mb-12">
        <div class="col-span-1 row-span-5 ">
            <img class="w-full mx-auto" src='{{ asset('img/septony-b.-siahaan.png') }}'>
        </div>
        <div class="col-span-4 ml-5">
            <h1 class="text-2xl font-bold">Septony B. Siahaan</h1>
            <p class="italic font-semibold ">Members</p>
        </div>
        <div class="col-span-4 row-span-4 ml-5 text-justify">
            An Indonesian citizen, domiciled in Medan, currently 48 years old and holding a position as a member of the Audit Committee since March 22, 2017. He completed his education with a Bachelor’s degree in Accounting from the Faculty of Economics, University of North Sumatra, Medan in 1998 and a Masters in Accounting from the Post-Graduate University of North Sumatra Medan in 2008.
In addition to serving as a Member of the Audit Committee, he has also been a teaching staff since 2007 at the Methodist University of Indonesia in Medan, after previously starting his career in 1996 as an Accounting Staff at PT Sinar Barat Persada in Medan. His career continued as an auditor at the Drs. Anggiat Sitohang and Partners, Jakarta in 2000, and Staff at the Indonesian Tax Consultant Services, Jakarta in 2002. He was also an auditor at PT Otehaes Dianeka Consultama, an affiliate of the Bismar, Salmon & Partners Public Accounting Firm (2003 – 2007), and starting in 2005 became a Senior Staff at the Bina Mandiri Medan Tax Consultant Office.
        </div>
    </div>
</div>
@endsection
