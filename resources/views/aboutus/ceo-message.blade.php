@extends('layouts.master')

@section('content')
<div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 lg:pt-48">
    <div class="animate__animated animate__fadeInUp text-2xl lg:text-4xl font-bold text-center">CEO Message</div>
    <div class="animate__animated animate__fadeInUp my-12 lg:my-24">
        <img class="w-1/3 mx-auto" src="{{ asset('img/ceo-message.png') }}" alt="Mark Dynamics Ceo Message">
    </div>
    <div class="bg-mark-default w-full py-16 sm:py-24 mb-12 lg:mb-24 px-10 sm:px-16 md:px-40 lg:px-52 rounded-md relative">
        <div class="text-xs sm:text-sm lg:text-lg font-semibold text-white">
            In 2020, we have witnessed something beyond our imagination as the Coronavirus-19 hit the entire world. Damage inflicted by the pandemic has stunned many across the world. Lives were gone, jobs were lost, and businesses collapsed. I would like to express my deepest condolences to those who have been negatively impacted by the outbreak and to direct my utmost gratitude to the medical professionals who have risked everything to cure the world. With vaccines available now, I do believe that this pandemic is coming to an end, sooner or later. <br>
            As we can see, the pandemic has caused the demand of gloves surging to a level it has never reached before. The spike has forced us to move quickly as global supply of hand formers is facing a shortage. We took the chance to expand by adding a new machine with the capacity of 200,000 pieces per month in the mid-year 2020, and building a new factory armed with a capacity of 600,000 pieces per month at the end of the year. The new factory has commenced operation in the first quarter of 2021. <br>
            We believe that this expansion is strategic to meet the supply-demand imbalance that has been going on for months. Our goal does not only stop at achieving economic values, but also to be able to contribute to the whole world, especially during this pandemic. Last but not least, we hope that the pandemic will be over very soon. 
        </div>
        <div class="text-right font-semibold text-white text-xs sm:text-sm lg:text-lg mt-12">
            January 2021<br>
            President Director, CEO<br>
            Ridwan Goh
        </div>
        <svg class="absolute top-6 left-6 lg:top-12 lg:left-12 w-10 sm:w-16 md:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 94"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"/></svg>
        <svg class="absolute rotate-180 transform bottom-6 right-6 lg:bottom-12 lg:right-12 w-10 sm:w-16 md:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 94"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"/></svg>    </div>
    </div>
</div>
@endsection