@extends('layouts.master')

@section('content')
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
    <h2 class="animate__fadeInDown animate__animated  text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.environment')</h2>
    <p class="animate__fadeInDown animate__animated  mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Water Usage Recycling Cycle of PT Mark Dynamics Indonesia, Tbk
    </p>
    <p class="mx-auto mt-5 text-lg text-center text-gray-500 animate__fadeInDown wow animate__animated">
        Residual water is channeled into Waste Water Treatment (WWT). The process involves the mixing of wastewater with chemicals like PAC and Floculan. The sludge and water are later to be separated within the Clarifier and Filter Press. The water that has gone through the purification process is then re-filtrated through UV process in order to be tested to conform to Wastewater Quality Standard 05/MENLH/2014 prior to being reused in the production process.
        Air dari sisa proses produksi dialirkan ke dalam Waste Water Treatment (WWT). Proses meliputi pencampuran air limbah dengan chemical (PAC dan Floculan). Selanjutnya, lumpur dan air dipisahkan di dalam Clarifier dan Filter Press. Air yang telah melalui proses pemurnian kemudian di filtrasi ulang dan melalui proses UV, kemudian diuji sesuai dengan Baku Mutu Air Limbah 05/MENLH/2014 sebelum digunakan kembali ke proses produksi.
      </p>
    <div>
        @livewire('web.sustainability.environments')
    </div>
</div>
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-8 pt-16 lg:px-8">
    <h2 class="animate__fadeInDown animate__animated  text-base text-center font-semibold tracking-wider uppercase text-mark-default">@lang('custom.environment')</h2>
    <p class="animate__fadeInDown animate__animated  mt-2 text-center text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Bridge
    </p>
    <p class="mx-auto mt-5 text-lg text-center text-gray-500 animate__fadeInDown wow animate__animated">
        In 2018, the company contributed to the environment by building a bridge of 40 meters long and 8 meters wide that connects Dusun I Desa Dalu X-A to Jalan Sultan Serdang Batang Kuis, where Kualanamu International Airport (KNO) is located. The construction of the Rp 8.45 billion bridge was started in November 2018 and finished in August 2019.
        Pada tahun 2018, MARK turut berkontribusi kepada lingkungan dengan membangun sebuah jembatan dengan panjang 40 meter dan lebar 8 meter. Jembatan tersebut menghubungkan Dusun I Desa Dalu X-A dengan Jalan Sultan Serdang Batang Kuis, daerah dimana Bandara Internasional Kualanamu (KNO) berada. Pembangunan jembatan yang membutuhkan dana Rp 8.45 Milyar tersebut dimulai di November 2018 dan telah rampung di Agustus 2019.
      </p>
    <div>
        @livewire('web.sustainability.environments')
    </div>
</div>
@endsection
