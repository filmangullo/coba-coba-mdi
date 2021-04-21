@extends('layouts.master')

@section('content')
    <div class="w-full h-auto relative pt-24">
        <img src="{{ asset('img/our-business-hero.png') }}" alt="Mark Dynamics Our Business">
        <div class="absolute bg-mark-default bg-opacity-50 h-full top-0 w-full"></div>
        <div class="absolute text-white text-center w-full text-4xl font-bold top-1/2 mt-5 h-full">Our Business</div>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-2 px-4 gap-7 sm:px-6 lg:px-8 my-24">
        <div>
            <img class="w-full h-full object-cover rounded-md" src="{{ asset('img/our-business-pic.png') }}" alt="Mark Dynamics Indonesia">
        </div>
        <div>
            <div class="text-2xl mb-12 font-bold">PT. Mark Dynamics Indonesia Tbk</div>
            <div class="text-sm">PT Mark Dynamics Indonesia (the Company) is a global leading manufacturer of hand former in Indonesia. Established on 10 April 2002, we are currently based in North Sumatera, Indonesia. Our products are essential to making latex gloves for various purposes: examination, industrial, medical, household, and even custom-made.
                We set out on our long journey by producing merely 50,000 pieces per month back in 2003. Gradually, we have been increasing our production capacity, and we have currently reached 1,400,000 pieces per month. The main plant site is located in Medan STAR Industrial Estate, North Sumatera with land area of ±15,000 meter square, with current production capacity standing at 600,000 pieces per month.
                Meanwhile, the second plant, commencing operation in 2019, is located in Tanjung Morawa, North Sumatera with land area of ±90,000 meter square. It closed the year 2019 with a capacity of 100,000 pieces per month. By year-end 2020, it had reached a capacity of 550,000 pieces per month. Combined with the main factory, we had an average capacity of 800,000 pieces per month along the year 2020. We started the year 2021 by increasing our total capacity to 1,100,000 pieces per month, and it’s targeted the number will hit 1,800,000 by year-end 2021. Thus, our average output from both plants is estimated to reach 1,400,000 pieces per month this year.
                In 2020, we decided to tap into sanitary products. Our closets are partially made of the waste coming from Porcelain Hand Former production in order to reduce costs. The Indonesian Government’s program of building 1 million houses is a positive driver to our sales as our closets are meant to penetrate the middle-low market segment. In October 2020, we acquired PT. Berjaya Dynamics Indonesia, a distributor of agricultural products such as sprayer, pesticides, etc. 
                With our long-standing history and extensive experience, we also strive to develop public trust. Thus, we launched an Initial Public Offering in 2017 and listed our shares on the Indonesian Stock Exchange. Today, we dominate the global market of hand former products with a market share of 40%, making it the largest on the globe. The key to our milestones lies in our integrity and efficiency.</div>
        </div>
    </div>
@endsection