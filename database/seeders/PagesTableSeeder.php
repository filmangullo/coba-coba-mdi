<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 5,
                'menu' => 12,
                'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">CEO Message</h2>
<div class="mt-12 animate__animated animate__fadeInUp border border-b-none border-gray-300 bg-gray-100 rounded-t-lg py-20 lg:mt-24">
<img class="w-4/6 sm:w-1/2 md:w-1/3  mx-auto rounded-full" src="../img/ceo-message.jpg" alt="Mark Dynamics Ceo Message">
</div>
<div class="relative w-full px-10 py-20 animate__fadeInUp animate__animated rounded-b-lg bg-mark-default sm:py-24 sm:px-16 md:px-40 lg:px-52">
<div class="text-xs font-semibold text-justify text-white sm:text-sm lg:text-lg">
<span class="ml-12">In</span> 2020, we have witnessed something beyond our imagination as the Coronavirus-19 hit the entire world. Damage inflicted by the pandemic has stunned many across the world. Lives were gone, jobs were lost, and businesses collapsed. I would like to express my deepest condolences to those who have been negatively impacted by the outbreak and to direct my utmost gratitude to the medical professionals who have risked everything to cure the world. With vaccines available now, I do believe that this pandemic is coming to an end, sooner or later. <br><br>
<span class="ml-12">As</span> we can see, the pandemic has caused the demand of gloves surging to a level it has never reached before. The spike has forced us to move quickly as global supply of hand formers is facing a shortage. We took the chance to expand by adding a new machine with the capacity of 200,000 pieces per month in the mid-year 2020, and building a new factory armed with a capacity of 600,000 pieces per month at the end of the year. The new factory has commenced operation in the first quarter of 2021. <br><br>
<span class="ml-12">We</span> believe that this expansion is strategic to meet the supply-demand imbalance that has been going on for months. Our goal does not only stop at achieving economic values, but also to be able to contribute to the whole world, especially during this pandemic. Last but not least, we hope that the pandemic will be over very soon.
</div>
<div class="mt-12 text-xs font-semibold text-right text-white sm:text-sm lg:text-lg">
January 2021<br>
President Director, CEO<br>
Ridwan Goh
</div>
<svg class="absolute w-10 top-6 left-6 lg:top-12 lg:left-12 sm:w-16 md:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 94"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"/></svg>
<svg class="absolute w-10 transform rotate-180 bottom-6 right-6 lg:bottom-12 lg:right-12 sm:w-16 md:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 94"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"/></svg>    </div>
</div>
</div>',
                'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Pesan dari Presiden Direktur</h2>

<div class="mt-12 animate__animated animate__fadeInUp border border-b-none border-gray-300 bg-gray-100 rounded-t-lg py-20 lg:mt-24"><img alt="Mark Dynamics Ceo Message" class="w-4/6 sm:w-1/2 md:w-1/3  mx-auto rounded-full" src="../img/ceo-message.jpg" /></div>

<div class="relative w-full px-10 py-20 animate__fadeInUp animate__animated rounded-b-lg bg-mark-default sm:py-24 sm:px-16 md:px-40 lg:px-52">
<div class="text-xs font-semibold text-justify text-white sm:text-sm lg:text-lg"><span class="ml-12">Di</span> 2020, tahun 2020 lalu, kita telah menyaksikan sesuatu yang sangat diluar dugaan ketika Virus Corona-19 mewabah ke seluruh dunia. Kerugian yang ditimbulkan oleh pandemi tersebut sungguh mengagetkan semua orang. Korban jiwa berjatuhan, pekerjaan hilang, dan banyak bisnis tidak mampu bertahan. Saya hendak menyampaikan belasungkawa saya yang terdalam kepada mereka yang telah terdampak secara negatif oleh wabah ini. Selain itu, saya juga mengucapkan terima kasih yang sebesar-besarnya kepada para profesional medis yang telah meresikokan banyak hal untuk memulihkan dunia. Dengan vaksin yang sudah tersedia saat ini, saya percaya, cepat atau lambat, pandemi ini akan segera berakhir.<br />
<br />
<span class="ml-12">Seperti</span> yang bisa dilihat, pandemi ini telah mendorong naiknya permintaan sarung tangan ke tingkat tertinggi sepanjang sejarah. Kenaikan tajam ini telah memicu kami untuk bergerak lebih cepat berhubung pasokan handformer global sedang menghadapi kelangkaan. Kami memanfaatkan kesempatan berekspansi dengan menambah sebuah mesin baru dengan kapasitas 200.000 unit per bulan di pertengahan tahun 2020, dan dengan membangun sebuah pabrik baru yang dilengkapi dengan kapasitas 600.000 unit per bulan di akhir tahun. Pabrik baru ini telah mulai beroperasi di triwulan satu tahun 2021.<br />
<br />
<span class="ml-12">Kami</span> percaya ekspansi ini adalah strategi yang tepat untuk memenuhi ketidakseimbangan permintaan dan penawaran yang telah berlangsung selama berbulan-bulan. Sasaran kami tidak hanya terhenti pada pencapaian nilai-nilai ekonomi, tetapi juga terarah pada usaha untuk berkontribusi ke seluruh dunia, khususnya selama masa pandemi ini. Dan terakhir, kami berharap agar pandemi ini segera berlalu.</div>

<div class="mt-12 text-xs font-semibold text-right text-white sm:text-sm lg:text-lg">Januari 2021<br />
Presiden Direktur<br />
Ridwan Goh</div>
<svg class="absolute w-10 top-6 left-6 lg:top-12 lg:left-12 sm:w-16 md:w-24" viewbox="0 0 113 94" xmlns="http://www.w3.org/2000/svg"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"></path></svg> <svg class="absolute w-10 transform rotate-180 bottom-6 right-6 lg:bottom-12 lg:right-12 sm:w-16 md:w-24" viewbox="0 0 113 94" xmlns="http://www.w3.org/2000/svg"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"></path></svg></div>
</div>
',
                'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">总裁致辞</h2>

<div class="mt-12 animate__animated animate__fadeInUp border border-b-none border-gray-300 bg-gray-100 rounded-t-lg py-20 lg:mt-24"><img alt="Mark Dynamics Ceo Message" class="w-4/6 sm:w-1/2 md:w-1/3  mx-auto rounded-full" src="../img/ceo-message.jpg" /></div>

<div class="relative w-full px-10 py-20 animate__fadeInUp animate__animated rounded-b-lg bg-mark-default sm:py-24 sm:px-16 md:px-40 lg:px-52">
<div class="text-xs font-semibold text-justify text-white sm:text-sm lg:text-lg"><span class="ml-12">在</span>2020年，新冠病毒蔓延至全世界，我们也因此亲眼看到了超乎我们想象的事情。这场疫情造成的破坏震惊了世界各地的许多人。人命没了，工作没了，企业也倒闭了。我在此对受到疫情影响的朋友们表示深切的同情，也对冒着一切风险的医护人员表示深刻的感激。但如今，我们有了疫苗，我相信疫情很快就会结束。<br />
<br />
<span class="ml-12">可以看得出来</span>，这场疫情提升了人们对手套的要求，而且达到前所未见的程度。因此，全球手套模具供应商面临了生产能力逐渐崩溃的风险。这个问题迫使了我们迅速采取行动。在 2020 年中，我们趁这个机会增加了一台产能为每月 200,000 件的新机器，并于年底建成了一家月产能达到600,000 件的新工厂。这家新工厂已于 2021 年头开始了运营。<br />
<br />
<span class="ml-12">我</span>们相信这次拓展能解决已持续数月的供需失衡。我们不仅希望能实现经济价值，而且还希望能为全世界做出贡献，特别是在这段疫情期间。最后但同样重要的，我们也希望这场疫情能赶快结束。</div>

<div class="mt-12 text-xs font-semibold text-right text-white sm:text-sm lg:text-lg">2021年1月<br />
总裁兼行政总裁<br />
Ridwan Goh</div>
<svg class="absolute w-10 top-6 left-6 lg:top-12 lg:left-12 sm:w-16 md:w-24" viewbox="0 0 113 94" xmlns="http://www.w3.org/2000/svg"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"></path></svg> <svg class="absolute w-10 transform rotate-180 bottom-6 right-6 lg:bottom-12 lg:right-12 sm:w-16 md:w-24" viewbox="0 0 113 94" xmlns="http://www.w3.org/2000/svg"><path d="M34.6 46.3C39 48.1 42.4 51 44.8 55c2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9S.1 76 .1 68.8c0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L22.6.4h24l-12 45.9zm63.6 0c4.4 1.8 7.8 4.7 10.2 8.7 2.6 3.8 3.9 8.4 3.9 13.8 0 7.2-2.3 13.1-6.9 17.7s-10.3 6.9-17.1 6.9c-7.2 0-13.1-2.3-17.7-6.9-4.6-4.6-6.9-10.5-6.9-17.7 0-3.6.4-7.1 1.2-10.5 1-3.4 2.8-8.5 5.4-15.3L86.2.4h24l-12 45.9z" fill="#fff"></path></svg></div>
</div>
',
                'created_at' => '2021-09-20 05:02:08',
                'updated_at' => '2021-09-20 07:15:47',
            ),
            1 => 
            array (
                'id' => 6,
                'menu' => 15,
                'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">Board Members</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Board of Commissioners</p>

<div class="pt-24 mx-auto">
<div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3"><img class="w-full mx-auto rounded-xl" src="../../img/chin-kien-ping.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Chin Kien Ping</h1>

<p class="italic font-semibold text-mark-default">President Commissioner</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">A Malaysian</span> citizen, 44 years old domiciled in Kuala Lumpur, appointed as the President Commissioner based on shareholder&rsquo;s decision on March 22, 2017, in accordance with Notarial Deed Number 132 dated March 22, 2017.<br />
<br />
<span class="ml-12">He</span> holds a diploma in Animal and Veterinary Science from the National Pingtung Polytechnic Institute, Taiwan in 1995, and an MBA from the West Coast Institute of Management and Technology, Australia in 2000. He began his career in the company since 2002 as a Director. After 12 years, he was then appointed as the President Director, serving from 2014 to 2015 before returning to being a Director until 2017. Since 2017, he has been the President Commissioner of the Company.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 mb-12 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/dompak-pasaribu.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Dompak Pasaribu</h1>

<p class="italic font-semibold text-mark-default">Independent Commissioner</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Indonesian citizen</span>, 46 years old residing in Medan. He was appointed as an Independent Commissioner of the Company based on the decision of the shareholders on 22 March 2017, in accordance with Notarial Deed No. 132 dated 22 March 2017.<br />
<br />
<span class="ml-12">A</span> holder of the Doctorate Degree in Accounting from the University of North Sumatra (USU) in 2018, a Masteral Degree of Accounting Science from the USU Faculty of Economics and Business in 2003 and a Bachelor of Economics in Accounting Study Program at the Faculty of Economics, Methodist University of Indonesia (UMI) in 1998. Having a Certified Public Accountant (CPA) from the Indonesian Institute of Certified Public Accountants in 2017. Active as a teaching staff in the Accounting Study Program of the Faculty of Economics and the Information Systems Study Program of the Faculty of Computer Science UMI.<br />
<br />
<span class="ml-12">Dompak Pasaribu</span> has served as Vice Dean II of Information Systems at the Faculty of Computer Science at UMI. The Secretary of the UMI Quality Assurance Agency in 2012-2016, was later appointed as the Chairperson of the UMI Quality Assurance Agency in 2016 until today. In addition, he also became the Chairperson of UMI Employee Cooperative Management Board since 2018. He served as a Branch Manager at PT. Etrading Securities in Medan from 2007 until 2013. Since 2015, he serves as the Audit Committee at PT. ATMINDO, Tbk.</div>
</div>
</div>

<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">Board Members</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Board of Directors</p>

<div class="grid grid-cols-1 gap-4 my-12 lg:my-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/ridwan-goh.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Ridwan Goh</h1>

<p class="italic font-semibold text-mark-default">President Director</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">A</span> 37 years old Indonesian living in Medan, appointed as President Director based on the decision of the shareholders at the Annual General Meeting of Shareholders on 30 April 2018, in accordance with Notarial Deed Number 39 dated 30 April 2018.<br />
<br />
<span class="ml-12">He</span> is a graduate of the Microskil Institute, holding a Bachelor&rsquo;s degree in Computer Engineering. He started his career as an International Marketing Manager at PT. Tropical Wood Indotama from 2004 to 2008. At the time, PT. Tropical Wood Indotama was the biggest wood company in North Sumatra. In 2008 he joined PT. Mark Dynamics Indonesia Tbk as Marketing Manager.<br />
<br />
<span class="ml-12">With</span> an experience of around 15 years in the field of International Trade, he was then appointed as a Director of the Company in 2017. He then assumed the position of President Director in 2018. In July 25th, 2019 he received Indonesia Marketeers Festival 2019 Award as Industry Marketing Championship of The Year in retail sector.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/sutiyoso-bin-risman.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>

<p class="italic font-semibold text-mark-default">Director</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">An</span> Indonesian citizen, aged 50 years domiciled in Medan, appointed as a Director of the Company based on shareholder decisions on March 22, 2017, in accordance with Notarial Deed Number 132 dated March 22, 2017. He has worked in the Company since 2002 with a position as General Manager between 2002 &ndash; 2009, before being appointed as Commissioner until 2014.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/cahaya-dewi-surbakti.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>

<p class="italic font-semibold text-mark-default">Independent Director</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">An</span> Indonesian citizen, 38 years old, domiciled in Medan, appointed as the Independent Director of the Company on 30 April 2018, based on the decision of the shareholders at the Annual General Meeting of Shareholders, in accordance with Notarial Deed Number 39 dated 30 April 2018.<br />
<br />
<span class="ml-12">She</span> has a Bachelor&rsquo;s degree in Chemical Engineering from Universitas Sumatera Utara (USU). After graduating, she started her career in the Company as a Quality Assurance Executive in 2004. Having followed an intensive training on ceramics processing for 2 years, her passion for doing this job significantly increased. She was then entrusted as the Head of Research and Development, serving from 2011 until 2018.</div>
</div>
</div>
</div>
</div>
',
                'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">Anggota Dewan</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Dewan Komisaris</p>

<div class="pt-24 mx-auto">
<div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3"><img class="w-full mx-auto rounded-xl" src="../../img/chin-kien-ping.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Chin Kien Ping</h1>

<p class="italic font-semibold text-mark-default">Komisaris Utama</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Warga</span> negara Malaysia, 44 tahun yang berdomisili di Kuala Lumpur, diangkat sebagai Komisaris Utama berdasarkan keputusan pemegang saham pada 22 Maret 2017, sesuai dengan Akta Notaris Nomor 132 tanggal 22 Maret 2017.<br />
<br />
<span class="ml-12">Beliau</span> memegang ijazah ilmu hewan dan hewan dari National Pingtung Polytechnic Institute, Taiwan pada tahun 1995, dan gelar MBA dari West Coast Institute of Management and Technology, Australia pada tahun 2000. Beliau memulai karirnya di perusahaan sejak tahun 2002 sebagai Direktur. Setelah 12 tahun, ia kemudian diangkat sebagai Direktur Utama, menjabat dari 2014 hingga 2015 sebelum kembali menjadi Direktur hingga 2017. Sejak 2017, beliau telah menjadi Komisaris Utama Perseroan.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 mb-12 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/dompak-pasaribu.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Dompak Pasaribu</h1>

<p class="italic font-semibold text-mark-default">Komisaris Independen</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Warga</span> Negara Indonesia, 46 tahun bermukim di Medan. Beliau diangkat sebagai Komisaris Independen Perseroan berdasarkan keputusan pemegang saham pada tanggal 22 Maret 2017, sesuai dengan Akta Notaris No. 132 tanggal 22 Maret 2017.<br />
<br />
<span class="ml-12">Memiliki</span> Gelar Doktor Akuntansi dari Universitas Sumatera Utara (USU) pada tahun 2018, gelar Magister Ilmu Akuntansi dari Fakultas Ekonomi dan Bisnis USU pada tahun 2003 dan gelar Sarjana Ekonomi dalam Program Studi Akuntansi di Fakultas Ekonomi, Methodist University of Indonesia (UMI) pada tahun 1998. Memiliki Akuntan Publik Bersertifikat (BPA) dari Institut Akuntan Publik Bersertifikat Indonesia pada tahun 2017. Aktif sebagai staf pengajar di Program Studi Akuntansi Fakultas Ekonomi dan Program Studi Sistem Informasi Fakultas Ilmu Komputer UMI.<br />
<br />
<span class="ml-12">Dompak</span> Pasaribu pernah menjabat sebagai Wakil Dekan II Bidang Sistem Informasi di Fakultas Ilmu Komputer UMI. Sekretaris Badan Penjaminan Mutu UMI tahun 2012-2016, kemudian diangkat sebagai Ketua Badan Penjaminan Mutu UMI tahun 2016 hingga hari ini. Selain itu, ia juga menjadi Ketua Dewan Manajemen Koperasi Pegawai UMI sejak 2018. Beliau menjabat sebagai Branch Manager di PT. Etrading Securities di Medan dari tahun 2007 hingga 2013. Sejak 2015, beliau menjabat sebagai Komite Audit di PT. ATMINDO, Tbk.</div>
</div>
</div>

<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">Anggota Dewan</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Dewan Direksi</p>

<div class="grid grid-cols-1 gap-4 my-12 lg:my-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/ridwan-goh.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Ridwan Goh</h1>

<p class="italic font-semibold text-mark-default">Presiden Direktur</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Seorang</span> WNI berusia 37 tahun yang tinggal di Medan, diangkat sebagai Direktur Utama berdasarkan keputusan pemegang saham pada Rapat Umum Pemegang Saham Tahunan pada tanggal 30 April 2018, sesuai dengan Akta Notaris Nomor 39 tanggal 30 April 2018.<br />
<br />
<span class="ml-12">Merupakan</span> lulusan Microskil Institute, memegang gelar Sarjana Teknik Komputer. Beliau memulai karirnya sebagai International Marketing Manager di PT. Tropical Wood Indotama dari tahun 2004 hingga 2008. Saat itu, PT. Tropical Wood Indotama adalah perusahaan kayu terbesar di Sumatera Utara. Pada tahun 2008 beliau bergabung dengan PT. Mark Dynamics Indonesia Tbk sebagai Marketing Manager.<br />
<br />
<span class="ml-12">Dengan</span> pengalaman sekitar 15 tahun di bidang Perdagangan Internasional, beliau kemudian diangkat sebagai Direktur Perseroan pada tahun 2017. Ia kemudian menduduki jabatan Direktur Utama pada 2018. Pada 25 Juli 2019 beliau menerima Penghargaan Indonesia Marketeers Festival 2019 sebagai Industry Marketing Championship of The Year di sektor ritel.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/sutiyoso-bin-risman.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>

<p class="italic font-semibold text-mark-default">Direktur</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Warga</span> Negara Indonesia, berusia 50 tahun berdomisili di Medan, diangkat sebagai Direktur Perseroan berdasarkan keputusan pemegang saham pada tanggal 22 Maret 2017, sesuai dengan Akta Notaris Nomor 132 tanggal 22 Maret 2017. Beliau telah bekerja di Perseroan sejak tahun 2002 dengan jabatan sebagai General Manager antara tahun 2002 &ndash; 2009, sebelum diangkat sebagai Komisaris hingga tahun 2014.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/cahaya-dewi-surbakti.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>

<p class="italic font-semibold text-mark-default">Direktur Independen</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Warga</span> Negara Indonesia, 38 tahun, berdomisili di Medan, diangkat sebagai Direktur Independen Perseroan pada tanggal 30 April 2018, berdasarkan keputusan pemegang saham pada Rapat Umum Pemegang Saham Tahunan, sesuai dengan Akta Notaris Nomor 39 tanggal 30 April 2018.<br />
<br />
<span class="ml-12">Telah</span> memiliki gelar Sarjana Teknik Kimia dari Universitas Sumatera Utara (USU). Setelah lulus, ia memulai karirnya di Perseroan sebagai Eksekutif Jaminan Mutu pada tahun 2004. Setelah mengikuti pelatihan intensif tentang pengolahan keramik selama 2 tahun, hasratnya dalam melakukan pekerjaan ini meningkat secara signifikan. Dia kemudian dipercaya sebagai Kepala Penelitian dan Pengembangan, menjabat dari 2011 hingga 2018.</div>
</div>
</div>
</div>
</div>
',
                'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">董事会成员</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">委员会</p>

<div class="pt-24 mx-auto">
<div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3"><img class="w-full mx-auto rounded-xl" src="../../img/chin-kien-ping.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Chin Kien Ping</h1>

<p class="italic font-semibold text-mark-default">委员长</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一位</span> 44 岁的马来西亚人，居住于吉隆坡。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为委员长。<br />
<br />
<span class="ml-12">他于</span> 1995 年获得台湾国立屏东理工学院动物与兽医学文凭，并于 2000 年获得澳大利亚西岸科技管理学院的硕士学位。于 2002 年开始在公司担任董事。12 年后被任命为董事长，从 2014 年到 2015 年任职，然后重新担任董事直至 2017 年。自2017年起，他担任了本公司的委员长。</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 mb-12 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/dompak-pasaribu.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Dompak Pasaribu</h1>

<p class="italic font-semibold text-mark-default">独立委员</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一位</span> 46 岁的印度尼西亚人，居住于棉兰。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为独立委员。<br />
<br />
<span class="ml-12">他于</span> 2018 年获得北苏门答腊大学（USU）会计学博士学位，于2003 年获得USU经济与商业学院会计学硕士学位，并于1998 年获得印度尼西亚卫理公会大学 (UMI) 经济学院会计学经济学学士学位。2017 年获得印尼注册会计师协会的注册会计师（CPA）。他也是UMI 经济学院会计学习计划和计算机科学学院信息系统学习计划的教学人员。<br />
<br />
<span class="ml-12">Dompak Pasaribu</span> 曾担任 UMI 计算机 科学学院信息系统的二级副院长。2012 至 2016 年，他担任 UMI 的质量保证机构秘书。后来于 2016 年被任命为 UMI 质量保证机构主席，如今还继续任职。此外，他还自 2018 年起担任 UMI 员工合作管理委员会会长。2007 年至 2013 年，他在 PT. Etrading Securities 担任分公司经理。自 2015 年起，他在PT. ATMINDO, Tbk. 担任审计委员会。</div>
</div>
</div>

<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">董事会成员</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">董事会</p>

<div class="grid grid-cols-1 gap-4 my-12 lg:my-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/ridwan-goh.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Ridwan Goh</h1>

<p class="italic font-semibold text-mark-default">董事长</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一</span>名居住于棉兰的 37 岁印度尼西亚人。在 2018 年 4 月 30 日，股东根据 2018 年 4 月 30 日的第 39 号公证契约选任他为董事长。<br />
<br />
<span class="ml-12">他毕业于</span> Mikroskil 学院，持有计算机工程学士学位。他于 2004 年至 2008 年开始在 PT. Tropical Wood Indotama 担任国际营销经理。那时，PT. Tropical Wood Indotama 是苏北省最大的木材公司。于 2008 年，他在星河陶瓷Tbk 担任营销经理。<br />
<br />
<span class="ml-12">凭</span>借他在国际贸易领域 15 多年的经验，他于 2017 年被选任为本公司的董事。随后又于 2018 年担任董事长。2019 年 7 月 25 日，他获得了 Indonesia Marketeers Festival 2019 的零售业年度行业营销冠军。</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/sutiyoso-bin-risman.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Sutiyoso Bin Risman</h1>

<p class="italic font-semibold text-mark-default">董事</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一</span>名居住于棉兰的 50 岁印度尼西亚人。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为董事。他已于2002 在本公司工作，从 2002 年至 2009 年担任总经理。随后被任命为委员，担任直至 2014 年。</div>
</div>
</div>

<div class="grid grid-cols-1 gap-4 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/cahaya-dewi-surbakti.png" /></div>

<div class="col-span-2">
<div class="col-span-1 text-left mb-6 md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Cahaya Dewi Surbakti</h1>

<p class="italic font-semibold text-mark-default">独立董事</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一</span>名居住于棉兰的 38 岁印度尼西亚人。在 2018 年 4 月 30 日，股东根据 2018 年 4 月 30 日的第 39 号公证契约选任他为独立董事。<br />
<br />
<span class="ml-12">她</span>持有北苏门答腊大学（USU）的化学工程学士学位。毕业后于 2004 年在公司开始担任质量保证执行官。经过两年的陶瓷加工强化培训，她对这份工作的热情大大增加。随后，她又被任命为研发主管，任职时间为 2011 年至 2018 年。</div>
</div>
</div>
</div>
</div>
',
                'created_at' => '2021-09-20 08:38:32',
                'updated_at' => '2021-09-22 10:46:37',
            ),
            2 => 
            array (
                'id' => 7,
                'menu' => 18,
                'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Our Business</h2>

<div class="animate__fadeInUp animate__animated px-4 mx-auto max-w-7xl lg:grid gap-7 sm:px-6 lg:px-8 mt-12">
<div><img alt="Mark Dynamics Indonesia" class="object-cover w-full h-48 rounded-md sm:h-96 lg:h-full" src="../img/our-business-pic.png" /></div>

<div class="mt-12">
<div class="mt-12 mb-6 lg:mt-0 lg:mb-12 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">PT. Mark Dynamics Indonesia Tbk</div>

<div class="text-base text-justify lg:text-lg"><span class="ml-12 font-bold">PT. Mark Dynamics Indonesia (the Company)</span> is a global leading manufacturer of hand former in Indonesia. Established on 10 April 2002, we are currently based in North Sumatera, Indonesia. Our products are essential to making latex gloves for various purposes: examination, industrial, medical, household, and even custom-made.<br />
<br />
<span class="ml-12">We</span> set out on our long journey by producing merely 50,000 pieces per month back in 2003. Gradually, we have been increasing our production capacity, and we have currently reached 1,400,000 pieces per month. The main plant site is located in Medan STAR Industrial Estate, North Sumatera with land area of &plusmn;15,000 meter square, with current production capacity standing at 600,000 pieces per month.<br />
<br />
<span class="ml-12">Meanwhile,</span> the second plant, commencing operation in 2019, is located in Tanjung Morawa, North Sumatera with land area of &plusmn;90,000 meter square. It closed the year 2019 with a capacity of 100,000 pieces per month. By year-end 2020, it had reached a capacity of 550,000 pieces per month. Combined with the main factory, we had an average capacity of 800,000 pieces per month along the year 2020. We started the year 2021 by increasing our total capacity to 1,100,000 pieces per month, and it&rsquo;s targeted the number will hit 1,800,000 by year-end 2021. Thus, our average output from both plants is estimated to reach 1,400,000 pieces per month this year.<br />
<br />
<span class="ml-12">In</span> 2020, we decided to tap into sanitary products. Our closets are partially made of the waste coming from Porcelain Hand Former production in order to reduce costs. The Indonesian Government&rsquo;s program of building 1 million houses is a positive driver to our sales as our closets are meant to penetrate the middle-low market segment. In October 2020, we acquired PT. Berjaya Dynamics Indonesia, a distributor of agricultural products such as sprayer, pesticides, etc.<br />
<br />
<span class="ml-12">With</span> our long-standing history and extensive experience, we also strive to develop public trust. Thus, we launched an Initial Public Offering in 2017 and listed our shares on the Indonesian Stock Exchange. Today, we dominate the global market of hand former products with a market share of 40%, making it the largest on the globe. The key to our milestones lies in our integrity and efficiency.</div>
</div>
</div>
</div>
',
                'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Bisnis</h2>

<div class="animate__fadeInUp animate__animated px-4 mx-auto max-w-7xl lg:grid gap-7 sm:px-6 lg:px-8 mt-12">
<div><img alt="Mark Dynamics Indonesia" class="object-cover w-full h-48 rounded-md sm:h-96 lg:h-full" src="../img/our-business-pic.png" /></div>

<div class="mt-12">
<div class="mt-12 mb-6 lg:mt-0 lg:mb-12 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">PT. Mark Dynamics Indonesia Tbk</div>

<div class="text-base text-justify lg:text-lg"><span class="ml-12 font-bold">PT. Mark Dynamics Indonesia (Perseroan)</span> adalah produsen handformer global terkemuka di Indonesia. Didirikan pada tanggal 10 April 2002, Perseroan saat ini berkedudukan di Sumatera Utara, Indonesia. Produk Perseroan sangatlah penting dalam pembuatan sarung tangan karet dengan tujuan pemakaian yang beragam: uji coba, industri, medis, rumah tangga, dan bahkan pembuatan sesuai pesanan.<br />
<br />
<span class="ml-12">Perjalanan</span> panjang Perseroan dimulai dengan memproduksi hanya 50.000 unit per bulan di tahun 2003. Secara perlahan, Perseroan terus meningkatkan kapasitas produksinya, dan saat ini telah mencapai 1.400.000 unit per bulan. Pabrik utama berlokasi di Kawasan Industri Medan STAR, Sumatera Utara dengan luas lahan kurang lebih 15.000 meter persegi, dengan kapasitas produksi saat ini berada di angka 600,000 unit per bulan.<br />
<br />
<span class="ml-12">Sementara</span> itu, pabrik kedua, yang telah mulai beroperasi di 2019, berlokasi di Tanjung Morawa, Sumatera Utara dengan luas lahan kurang lebih 90.000 meter persegi. Tahun itu ditutup dengan kapasitas produksi 100.000 unit per bulan. Di akhir tahun 2020, pabrik tersebut telah mencapai kapasitas 550.000 unit per bulan. Digabungkan dengan pabrik utama, Perseroan memiliki kapasitas rata-rata 800.000 unit per bulan di sepanjang tahun 2020. Perseroan memulai tahun 2021 dengan menaikkan total kapasitas menjadi 1.100.000 unit per bulan, dan ditargetkan akan mencapai 1.800.000 unit per bulan di akhir tahun nanti. Dengan demikian, rerata output Perseroan dari kedua pabrik diperkirakan akan mencapai 1.400.000 unit per bulan di tahun ini.<br />
<br />
<span class="ml-12">Di</span> tahun 2020, Perseroan memutuskan untuk masuk ke bisnis sanitasi. Kloset produksi Perseroan sebagian terbuat dari limbah produksi handformer keramik dalam upaya mengurangi biaya. Program Pemerintah Indonesia membangun sejuta rumah menjadi faktor pendorong positif terhadap penjualan lantaran kloset Perseroan ditujukan untuk segmen pasar menengah ke bawah. Di bulan Oktober 2020, Perseroan mengakuisisi PT. Berjaya Dynamics Indonesia, distributor produk-produk pertanian seperti penyemprot, pestisida, dan lainnya.<br />
<br />
<span class="ml-12">Dengan</span> rekam jejak yang panjang dan pengalaman yang luas, Perseroan senantiasa terus berusaha membangun kepercayaan publik. Oleh sebab itu, Perseroan melakukan Penawaran Perdana di tahun 2017 dan mencatatkan sahamnya di Bursa Efek Indonesia. Hingga hari ini, Perseroan mendominasi produk-produk handformer dengan pangsa pasar global sekitar 40%, menjadikan Perseroan sebagai pemimpin pasar di industrinya. Kunci kesuksesan Perseroan terletak pada integritas dan efisiensi.<br />
&nbsp;</div>
</div>
</div>
</div>
',
                'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">业务</h2>

<div class="animate__fadeInUp animate__animated px-4 mx-auto max-w-7xl lg:grid gap-7 sm:px-6 lg:px-8 mt-12">
<div><img alt="Mark Dynamics Indonesia" class="object-cover w-full h-48 rounded-md sm:h-96 lg:h-full" src="../img/our-business-pic.png" /></div>

<div class="mt-12">
<div class="mt-12 mb-6 lg:mt-0 lg:mb-12 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">PT. Mark Dynamics Indonesia Tbk</div>

<div class="text-base text-justify lg:text-lg"><span class="ml-12">星河陶瓷（本公司名称)</span> 是位于印度尼西亚的全球领先手套模具制造商。成立于2002 年 4 月 10 日，目前总部位于印度尼西亚北苏门答腊省。我们的产品对于制造各种用途乳胶手套具有极大作用，比如检查手套、工业手套、医疗手套、家居手套，甚至定制手套。<br />
<br />
<span class="ml-12">2003</span> 年，我们每月仅生产出 50,000 件，这是我们未来漫长旅程的开始。逐渐地，我们增加了我们的生产能力，目前我们每月可以生产出1,400,000件。主厂区位于北苏门答腊省棉兰市STAR工业区 (Medan STAR Industrial Estate) ，占地面积&plusmn;15,000平方米，目前生产能力为每月 600,000 件。<br />
<br />
<span class="ml-12">与此同时</span>，于2019年，我们又投产了第二个工厂区。厂区位于北苏门答腊省丹绒摩拉瓦(Tanjung Morawa), 占地面积为&plusmn;90,000平方米。2019年尾, 它的月产达到100,000 件。到了2020年底，它的生产能力达到了每月550,000 件。与主厂计算在一起，2020年平均月产达到了800,000件。2021 年初，我们的总产提升到每月 1,100,000 件，我们的目标是2021 年底达1,800,000 件。于是，我们预计今年两家工厂的平均产量可以达到每月 1,400,000 件。<br />
<br />
<span class="ml-12">在2020年</span>， 我们决定涉足卫生用品。我们生产的马桶部分材料是由瓷器手套模具剩下来的废料而制成的，也算是降低了成本。印度尼西亚政府的1,000,000套房屋建造计划是我们营销的积极推动力。我们的马桶目标市场又是中下层居民。在2020年10月, 我们收购了 PT. Berjaya Dynamics Indonesia，一个专业于喷雾器、农药等农产品的经销商。<br />
<br />
<span class="ml-12">凭</span>借我们的悠久历史和丰富经验，我们也在非常努力地促进公众对我们的信任。于是，在2017年，我们启动了首次公开募股，并将股票在Indonesia Stock Exchange 上市交易。如今，以 40% 的市场份额，我门主导了全球手套模具产品的市场，使我们成为世界上最大市场公司之一。我们之所以能够达到的成就，关键在于我们的诚信和效率。</div>
</div>
</div>
</div>
',
            'created_at' => '2021-09-22 08:55:54',
            'updated_at' => '2021-09-22 09:00:12',
        ),
        3 => 
        array (
            'id' => 8,
            'menu' => 19,
            'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Vision &amp; Mission</h2>

<div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
<div class="h-52 md:h-96"><img alt="Mark Dynamics Vision" class="w-full h-full object-cover rounded-2xl" src="../img/vision.png" /></div>

<div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 lg:mx-36 text-black">
<div class="max-w-7xl mx-auto py-6 px-4 text-center sm:py-12 sm:px-6 lg:px-8">
<h2 class="text-2xl md:text-4xl font-extrabold">Vision</h2>

<p class="mt-6 text-xs md:text-sm lg:text-lg">To sustain our lead in the global market of hand formers and deliver economic value to our stakeholders.</p>
</div>
</div>
</div>

<div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
<div class="h-52 md:h-96"><img alt="Mark Dynamics Mission" class="w-full h-full object-cover rounded-2xl" src="../img/mission.png" /></div>

<div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 text-black">
<div class="max-w-7xl mx-auto py-6 px-4 sm:py-12 sm:px-6 lg:px-8">
<h2 class="text-2xl md:text-4xl font-extrabold text-center">Mission</h2>

<div class="mt-10 grid text-center grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">
<div><svg class="h-8 mx-auto" viewbox="0 0 512 477.62" xmlns="http://www.w3.org/2000/svg"><path d="M472.3 248.21V15.06A15.06 15.06 0 00457.24 0H53.72a15.06 15.06 0 00-15.06 15.06v251.75A45.69 45.69 0 0018 275.34c-19.8 14.05-24.49 45.47-7.9 64.87l67.84 82.24c42 49.15 86.6 55.17 152.92 55.17 56.91 0 82.35.25 132-11.05l48.29-11.55a42.16 42.16 0 0034.24 18h23.79c23.64 0 42.87-20.26 42.87-45.16V293.24c-.05-23.78-17.59-43.31-39.75-45.03zm-67.7 31l-20.06-10.2a119.35 119.35 0 00-104.66-1.69c-9.15 3.6-29.09 15.67-39.44 15.26h-69.63a41.94 41.94 0 00-41.89 41.89v11c-.13-.14-.27-.27-.39-.41l-49.73-54a46 46 0 00-10-8.2V123.45H192v55.21a15.07 15.07 0 0015.07 15.06h95a15.06 15.06 0 0015.06-15.06v-55.21h125v124.76c-17.6 1.36-32.27 14-37.58 31zM222.16 123.45h64.91v40.15h-64.91zm220-30.12h-125V30.12h125v63.21zM287.07 30.12v63.21h-64.91V30.12zm-95 0v63.21H68.78V30.12zm163.75 407.15c-45.82 10.54-73.41 10.07-124.42 10.07-62.25 0-92.33-1-130.22-44.06l-67.84-82.24c-11.8-15.37 9.57-33.5 23.3-19.57l49.73 54c13.14 13.87 29.68 21.5 50.07 21.95H294.3a15.06 15.06 0 100-30.12H159v-22.84a11.78 11.78 0 0111.77-11.77h69.63c15.69 1.13 38.33-12 52.14-18.06a89.37 89.37 0 0178.35 1.24l31.54 16v114.24zm126.06-9.4c0 8.3-5.72 15-12.75 15h-23.79c-7 0-12.75-6.74-12.75-15V293.24c0-8.29 5.72-15 12.75-15h23.79c7 0 12.75 6.75 12.75 15z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Striving to manufacture products of the highest quality,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 330 330" xmlns="http://www.w3.org/2000/svg"><path d="M315 120h-22.69a135.36 135.36 0 00-5.47-13.2l16.05-16a15 15 0 000-21.21l-42.43-42.48a15 15 0 00-21.21 0l-16.05 16a135.36 135.36 0 00-13.2-5.42V15a15 15 0 00-15-15h-60a15 15 0 00-15 15v22.69a134.17 134.17 0 00-13.19 5.47l-16.06-16a15 15 0 00-21.21 0L27.11 69.54a15 15 0 000 21.21l16 16.06A134.17 134.17 0 0037.69 120H15a15 15 0 00-15 15v60a15 15 0 0015 15h22.69a135.36 135.36 0 005.47 13.2l-16 16.05a15 15 0 000 21.21l42.43 42.43a15 15 0 0021.21 0l16.06-16.05a134.17 134.17 0 0013.14 5.47V315a15 15 0 0015 15h60a15 15 0 0015-15v-22.69a133 133 0 0013.2-5.48l16.05 16.05a15 15 0 0021.21 0l42.43-42.42a15 15 0 000-21.22l-16.05-16.05a131.77 131.77 0 005.47-13.19H315a15 15 0 0015-15v-60a15 15 0 00-15-15zm-15 60h-18.78a15 15 0 00-14.53 11.26 103.75 103.75 0 01-11.23 27.06 15 15 0 002.31 18.24l13.3 13.29-21.22 21.22-13.29-13.3a15 15 0 00-18.24-2.3 104.07 104.07 0 01-27.06 11.22A15 15 0 00180 281.22V300h-30v-18.78a15 15 0 00-11.26-14.53 103.75 103.75 0 01-27.06-11.23 15 15 0 00-18.24 2.31l-13.29 13.3-21.22-21.22 13.3-13.29a15 15 0 002.31-18.24 104.09 104.09 0 01-11.23-27.06A15 15 0 0048.78 180H30v-30h18.78a15 15 0 0014.53-11.26 104.27 104.27 0 0111.22-27.06 15 15 0 00-2.3-18.24l-13.3-13.29 21.22-21.22 13.29 13.3a15 15 0 0018.24 2.31 104.09 104.09 0 0127.06-11.23A15 15 0 00150 48.78V30h30v18.78a15 15 0 0011.26 14.53 104 104 0 0127.06 11.23 15 15 0 0018.24-2.31l13.29-13.3 21.22 21.22-13.3 13.29a15 15 0 00-2.3 18.24 104.07 104.07 0 0111.22 27.06A15 15 0 00281.22 150H300z"></path><path d="M186.39 132.39L152 166.79l-9.39-9.4a15 15 0 10-21.22 21.22l20 20a15 15 0 0021.22 0l45-45a15 15 0 00-21.22-21.22z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Committing to reduce production costs in order to achieve efficiency,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 511.98" xmlns="http://www.w3.org/2000/svg"><path d="M512 374a15 15 0 00-2.31-8l-39.29-86.35c-14.4-31.65-49.09-52.18-88.3-52.18h-35.44v-20.18a25 25 0 00-17.54-23.86c14.74-26.7 26.26-56.41 26.26-84.05a99.39 99.39 0 00-198.77 0c0 27.25 11.2 56.5 25.64 82.91H15a15 15 0 000 30h33.73v30H36a15 15 0 100 30h12.73V301H15a15 15 0 000 30h33.73v118.52a15 15 0 0015 15h42.62a50 50 0 0099.87 0l165.88.5a50 50 0 0099.8 0H497a15 15 0 0015-15v-75.68-.18-.16zm-61.53-65.7l23.07 50.7h-66.88v-40.29c0-5.55 7-10.41 15-10.41zM256 30a69.47 69.47 0 0169.38 69.38c0 28.52-16.27 61.46-34.15 89.06a14.16 14.16 0 00-1 1.52 475 475 0 01-34.23 45.6 471.82 471.82 0 01-34.28-45.65 15.54 15.54 0 00-.93-1.45c-17.9-27.6-34.18-60.55-34.18-89.08A69.47 69.47 0 01256 30zM78.73 331h42.56a15 15 0 000-30H78.73v-28.71h91.73a15 15 0 000-30H78.73v-30h121.88a476.29 476.29 0 0044.5 56.24 15 15 0 0021.77 0 475.12 475.12 0 0044.5-56.24h5.28v222.23H198a49.95 49.95 0 00-83.51 0H78.73zm77.56 151a20 20 0 1120-20 20 20 0 01-20 20zM422 482a20 20 0 01-19.25-25.38 14.46 14.46 0 001.07-2.91 20 20 0 0136.36 0 15.07 15.07 0 001.06 2.91A19.48 19.48 0 01442 462a20 20 0 01-20 20zm42.07-47a49.93 49.93 0 00-84.14 0h-33.27V257.47h35.44c20.49 0 39.5 8 51.63 20.83h-12.06c-24.82 0-45 18.13-45 40.41V374a15 15 0 0015 15H482v46z"></path><path d="M256 128.8a30 30 0 10-30-30 30 30 0 0030 30z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Maintaining good relationship with customers by making on-time delivery,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 510" xmlns="http://www.w3.org/2000/svg"><path d="M443.73 198.23A84.78 84.78 0 00472 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00402 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 00293.19 100H287a15 15 0 000 30h15v5a84.77 84.77 0 0029.58 64.36 115.09 115.09 0 00-32.43 21 94.38 94.38 0 00-28.15-9.17V205a15 15 0 00-30 0v6.19a93.94 93.94 0 00-28.14 9.19 115.23 115.23 0 00-32.43-21A84.79 84.79 0 00210 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00140 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 0031.19 100H25a15 15 0 000 30h15v5a84.78 84.78 0 0028.27 63.23A110.17 110.17 0 000 300v95a15 15 0 0015 15h153.62A114.73 114.73 0 00131 495a15 15 0 0015 15h220a15 15 0 0015-15 114.73 114.73 0 00-37.62-85H497a15 15 0 0015-15v-95a110.17 110.17 0 00-68.27-101.77zM323.75 100A65.19 65.19 0 01372 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01450.25 100zM442 130v5a55 55 0 01-110 0v-5zM256 260a15 15 0 0015-15v-3.24A65.19 65.19 0 01319.25 290h-126.5A65.19 65.19 0 01241 241.76V245a15 15 0 0015 15zm55 65a55 55 0 01-110 0v-5h110zM61.75 100A65.19 65.19 0 01110 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01188.25 100zM180 130v5a55 55 0 01-110 0v-5zM30 300a80.09 80.09 0 0180-80h25a85 85 0 0153.09 18.64 94.84 94.84 0 00-25.9 51.36H156a15 15 0 000 30h15v5a84.59 84.59 0 0020.27 55H30zm319.67 180H162.32A85.15 85.15 0 01246 410h20a85.13 85.13 0 0183.67 70zM482 380H320.73A84.59 84.59 0 00341 325v-5h15a15 15 0 000-30h-6.19a94.84 94.84 0 00-25.9-51.36A85 85 0 01377 220h25a80.09 80.09 0 0180 80z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Hiring and keeping to improve the best talents in the company,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 92.89h-1.08A164.53 164.53 0 00152.13 385a38.76 38.76 0 0114.42 30.13V497a15 15 0 0015 15h.09l148.9-.93a15 15 0 0014.91-15v-80.62A39.28 39.28 0 01360 384.92a164.52 164.52 0 00-104-292zm-59.46 389v-44h118.9v43.23zM341 361.68a69.16 69.16 0 00-25.15 46.25H196.16a68.67 68.67 0 00-25.07-46.17 134.52 134.52 0 0184-238.86h.91a134.53 134.53 0 0185 238.79z"></path><path d="M331.71 202.27l-69-34.5a15 15 0 00-13.42 0l-69 34.5a15 15 0 00-8.29 13.41v80.5a15 15 0 008.29 13.42l69 34.5a15.11 15.11 0 0013.24.09l69-33.35a15 15 0 008.47-13.51V215.9a15 15 0 00-8.29-13.63zM256 198l36.12 18L257 234.45l-36.72-18.66zm-54 42.18l40 20.34-.67 46.11L202 286.91zm69.35 66.47l.67-46.14 38-19.95v47.41zM46 240.93H15a15 15 0 000 30h31a15 15 0 000-30zM497 240.93h-31a15 15 0 000 30h31a15 15 0 000-30zM256 61a15 15 0 0015-15V15a15 15 0 00-30 0v31a15 15 0 0015 15zM96.9 118.05a15 15 0 0021.21-21.22L96.19 74.91A15 15 0 0075 96.13zM415.1 393.82A15 15 0 10393.89 415l21.92 22A15 15 0 00437 415.74zM96.9 393.82L75 415.74A15 15 0 1096.19 437l21.92-22a15 15 0 10-21.21-21.18zM415.81 74.91l-21.92 21.92A15 15 0 00415.1 118L437 96.13a15 15 0 00-21.21-21.22z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Generating and adopting new ideas and product innovations.</p>
</div>
</div>
</div>
</div>
</div>
</div>
',
            'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Visi &amp; Misi</h2>

<div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
<div class="h-52 md:h-96"><img alt="Mark Dynamics Vision" class="w-full h-full object-cover rounded-2xl" src="../img/vision.png" /></div>

<div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 lg:mx-36 text-black">
<div class="max-w-7xl mx-auto py-6 px-4 text-center sm:py-12 sm:px-6 lg:px-8">
<h2 class="text-2xl md:text-4xl font-extrabold">Visi</h2>

<p class="mt-6 text-xs md:text-sm lg:text-lg">Mempertahankan dominasi Perseroan di pasar handformer global dan mempersembahkan nilai-nilai ekonomi kepada semua pemangku kepentingan.</p>
</div>
</div>
</div>

<div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
<div class="h-52 md:h-96"><img alt="Mark Dynamics Mission" class="w-full h-full object-cover rounded-2xl" src="../img/mission.png" /></div>

<div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 text-black">
<div class="max-w-7xl mx-auto py-6 px-4 sm:py-12 sm:px-6 lg:px-8">
<h2 class="text-2xl md:text-4xl font-extrabold text-center">Misi</h2>

<div class="mt-10 grid text-center grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">
<div><svg class="h-8 mx-auto" viewbox="0 0 512 477.62" xmlns="http://www.w3.org/2000/svg"><path d="M472.3 248.21V15.06A15.06 15.06 0 00457.24 0H53.72a15.06 15.06 0 00-15.06 15.06v251.75A45.69 45.69 0 0018 275.34c-19.8 14.05-24.49 45.47-7.9 64.87l67.84 82.24c42 49.15 86.6 55.17 152.92 55.17 56.91 0 82.35.25 132-11.05l48.29-11.55a42.16 42.16 0 0034.24 18h23.79c23.64 0 42.87-20.26 42.87-45.16V293.24c-.05-23.78-17.59-43.31-39.75-45.03zm-67.7 31l-20.06-10.2a119.35 119.35 0 00-104.66-1.69c-9.15 3.6-29.09 15.67-39.44 15.26h-69.63a41.94 41.94 0 00-41.89 41.89v11c-.13-.14-.27-.27-.39-.41l-49.73-54a46 46 0 00-10-8.2V123.45H192v55.21a15.07 15.07 0 0015.07 15.06h95a15.06 15.06 0 0015.06-15.06v-55.21h125v124.76c-17.6 1.36-32.27 14-37.58 31zM222.16 123.45h64.91v40.15h-64.91zm220-30.12h-125V30.12h125v63.21zM287.07 30.12v63.21h-64.91V30.12zm-95 0v63.21H68.78V30.12zm163.75 407.15c-45.82 10.54-73.41 10.07-124.42 10.07-62.25 0-92.33-1-130.22-44.06l-67.84-82.24c-11.8-15.37 9.57-33.5 23.3-19.57l49.73 54c13.14 13.87 29.68 21.5 50.07 21.95H294.3a15.06 15.06 0 100-30.12H159v-22.84a11.78 11.78 0 0111.77-11.77h69.63c15.69 1.13 38.33-12 52.14-18.06a89.37 89.37 0 0178.35 1.24l31.54 16v114.24zm126.06-9.4c0 8.3-5.72 15-12.75 15h-23.79c-7 0-12.75-6.74-12.75-15V293.24c0-8.29 5.72-15 12.75-15h23.79c7 0 12.75 6.75 12.75 15z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Berusaha menghasilkan produk-produk dengan kualitas terbaik,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 330 330" xmlns="http://www.w3.org/2000/svg"><path d="M315 120h-22.69a135.36 135.36 0 00-5.47-13.2l16.05-16a15 15 0 000-21.21l-42.43-42.48a15 15 0 00-21.21 0l-16.05 16a135.36 135.36 0 00-13.2-5.42V15a15 15 0 00-15-15h-60a15 15 0 00-15 15v22.69a134.17 134.17 0 00-13.19 5.47l-16.06-16a15 15 0 00-21.21 0L27.11 69.54a15 15 0 000 21.21l16 16.06A134.17 134.17 0 0037.69 120H15a15 15 0 00-15 15v60a15 15 0 0015 15h22.69a135.36 135.36 0 005.47 13.2l-16 16.05a15 15 0 000 21.21l42.43 42.43a15 15 0 0021.21 0l16.06-16.05a134.17 134.17 0 0013.14 5.47V315a15 15 0 0015 15h60a15 15 0 0015-15v-22.69a133 133 0 0013.2-5.48l16.05 16.05a15 15 0 0021.21 0l42.43-42.42a15 15 0 000-21.22l-16.05-16.05a131.77 131.77 0 005.47-13.19H315a15 15 0 0015-15v-60a15 15 0 00-15-15zm-15 60h-18.78a15 15 0 00-14.53 11.26 103.75 103.75 0 01-11.23 27.06 15 15 0 002.31 18.24l13.3 13.29-21.22 21.22-13.29-13.3a15 15 0 00-18.24-2.3 104.07 104.07 0 01-27.06 11.22A15 15 0 00180 281.22V300h-30v-18.78a15 15 0 00-11.26-14.53 103.75 103.75 0 01-27.06-11.23 15 15 0 00-18.24 2.31l-13.29 13.3-21.22-21.22 13.3-13.29a15 15 0 002.31-18.24 104.09 104.09 0 01-11.23-27.06A15 15 0 0048.78 180H30v-30h18.78a15 15 0 0014.53-11.26 104.27 104.27 0 0111.22-27.06 15 15 0 00-2.3-18.24l-13.3-13.29 21.22-21.22 13.29 13.3a15 15 0 0018.24 2.31 104.09 104.09 0 0127.06-11.23A15 15 0 00150 48.78V30h30v18.78a15 15 0 0011.26 14.53 104 104 0 0127.06 11.23 15 15 0 0018.24-2.31l13.29-13.3 21.22 21.22-13.3 13.29a15 15 0 00-2.3 18.24 104.07 104.07 0 0111.22 27.06A15 15 0 00281.22 150H300z"></path><path d="M186.39 132.39L152 166.79l-9.39-9.4a15 15 0 10-21.22 21.22l20 20a15 15 0 0021.22 0l45-45a15 15 0 00-21.22-21.22z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Berkomitmen mengurangi biaya produksi demi mencapai efisiensi,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 511.98" xmlns="http://www.w3.org/2000/svg"><path d="M512 374a15 15 0 00-2.31-8l-39.29-86.35c-14.4-31.65-49.09-52.18-88.3-52.18h-35.44v-20.18a25 25 0 00-17.54-23.86c14.74-26.7 26.26-56.41 26.26-84.05a99.39 99.39 0 00-198.77 0c0 27.25 11.2 56.5 25.64 82.91H15a15 15 0 000 30h33.73v30H36a15 15 0 100 30h12.73V301H15a15 15 0 000 30h33.73v118.52a15 15 0 0015 15h42.62a50 50 0 0099.87 0l165.88.5a50 50 0 0099.8 0H497a15 15 0 0015-15v-75.68-.18-.16zm-61.53-65.7l23.07 50.7h-66.88v-40.29c0-5.55 7-10.41 15-10.41zM256 30a69.47 69.47 0 0169.38 69.38c0 28.52-16.27 61.46-34.15 89.06a14.16 14.16 0 00-1 1.52 475 475 0 01-34.23 45.6 471.82 471.82 0 01-34.28-45.65 15.54 15.54 0 00-.93-1.45c-17.9-27.6-34.18-60.55-34.18-89.08A69.47 69.47 0 01256 30zM78.73 331h42.56a15 15 0 000-30H78.73v-28.71h91.73a15 15 0 000-30H78.73v-30h121.88a476.29 476.29 0 0044.5 56.24 15 15 0 0021.77 0 475.12 475.12 0 0044.5-56.24h5.28v222.23H198a49.95 49.95 0 00-83.51 0H78.73zm77.56 151a20 20 0 1120-20 20 20 0 01-20 20zM422 482a20 20 0 01-19.25-25.38 14.46 14.46 0 001.07-2.91 20 20 0 0136.36 0 15.07 15.07 0 001.06 2.91A19.48 19.48 0 01442 462a20 20 0 01-20 20zm42.07-47a49.93 49.93 0 00-84.14 0h-33.27V257.47h35.44c20.49 0 39.5 8 51.63 20.83h-12.06c-24.82 0-45 18.13-45 40.41V374a15 15 0 0015 15H482v46z"></path><path d="M256 128.8a30 30 0 10-30-30 30 30 0 0030 30z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Menjaga hubungan baik dengan pelanggan melalui pengantaran tepat waktu,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 510" xmlns="http://www.w3.org/2000/svg"><path d="M443.73 198.23A84.78 84.78 0 00472 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00402 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 00293.19 100H287a15 15 0 000 30h15v5a84.77 84.77 0 0029.58 64.36 115.09 115.09 0 00-32.43 21 94.38 94.38 0 00-28.15-9.17V205a15 15 0 00-30 0v6.19a93.94 93.94 0 00-28.14 9.19 115.23 115.23 0 00-32.43-21A84.79 84.79 0 00210 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00140 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 0031.19 100H25a15 15 0 000 30h15v5a84.78 84.78 0 0028.27 63.23A110.17 110.17 0 000 300v95a15 15 0 0015 15h153.62A114.73 114.73 0 00131 495a15 15 0 0015 15h220a15 15 0 0015-15 114.73 114.73 0 00-37.62-85H497a15 15 0 0015-15v-95a110.17 110.17 0 00-68.27-101.77zM323.75 100A65.19 65.19 0 01372 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01450.25 100zM442 130v5a55 55 0 01-110 0v-5zM256 260a15 15 0 0015-15v-3.24A65.19 65.19 0 01319.25 290h-126.5A65.19 65.19 0 01241 241.76V245a15 15 0 0015 15zm55 65a55 55 0 01-110 0v-5h110zM61.75 100A65.19 65.19 0 01110 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01188.25 100zM180 130v5a55 55 0 01-110 0v-5zM30 300a80.09 80.09 0 0180-80h25a85 85 0 0153.09 18.64 94.84 94.84 0 00-25.9 51.36H156a15 15 0 000 30h15v5a84.59 84.59 0 0020.27 55H30zm319.67 180H162.32A85.15 85.15 0 01246 410h20a85.13 85.13 0 0183.67 70zM482 380H320.73A84.59 84.59 0 00341 325v-5h15a15 15 0 000-30h-6.19a94.84 94.84 0 00-25.9-51.36A85 85 0 01377 220h25a80.09 80.09 0 0180 80z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Mempekerjakan dan menjaga para talenta terbaik di Perseroan,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 92.89h-1.08A164.53 164.53 0 00152.13 385a38.76 38.76 0 0114.42 30.13V497a15 15 0 0015 15h.09l148.9-.93a15 15 0 0014.91-15v-80.62A39.28 39.28 0 01360 384.92a164.52 164.52 0 00-104-292zm-59.46 389v-44h118.9v43.23zM341 361.68a69.16 69.16 0 00-25.15 46.25H196.16a68.67 68.67 0 00-25.07-46.17 134.52 134.52 0 0184-238.86h.91a134.53 134.53 0 0185 238.79z"></path><path d="M331.71 202.27l-69-34.5a15 15 0 00-13.42 0l-69 34.5a15 15 0 00-8.29 13.41v80.5a15 15 0 008.29 13.42l69 34.5a15.11 15.11 0 0013.24.09l69-33.35a15 15 0 008.47-13.51V215.9a15 15 0 00-8.29-13.63zM256 198l36.12 18L257 234.45l-36.72-18.66zm-54 42.18l40 20.34-.67 46.11L202 286.91zm69.35 66.47l.67-46.14 38-19.95v47.41zM46 240.93H15a15 15 0 000 30h31a15 15 0 000-30zM497 240.93h-31a15 15 0 000 30h31a15 15 0 000-30zM256 61a15 15 0 0015-15V15a15 15 0 00-30 0v31a15 15 0 0015 15zM96.9 118.05a15 15 0 0021.21-21.22L96.19 74.91A15 15 0 0075 96.13zM415.1 393.82A15 15 0 10393.89 415l21.92 22A15 15 0 00437 415.74zM96.9 393.82L75 415.74A15 15 0 1096.19 437l21.92-22a15 15 0 10-21.21-21.18zM415.81 74.91l-21.92 21.92A15 15 0 00415.1 118L437 96.13a15 15 0 00-21.21-21.22z"></path></svg>

<p class="mt-3 text-xs md:text-sm">Menghasilkan dan mengadopsi ide-ide baru dan inovasi produk.</p>
</div>
</div>
</div>
</div>
</div>
</div>
',
            'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">愿景和使命</h2>

<div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
<div class="h-52 md:h-96"><img alt="Mark Dynamics Vision" class="w-full h-full object-cover rounded-2xl" src="../img/vision.png" /></div>

<div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 lg:mx-36 text-black">
<div class="max-w-7xl mx-auto py-6 px-4 text-center sm:py-12 sm:px-6 lg:px-8">
<h2 class="text-2xl md:text-4xl font-extrabold">愿景</h2>

<p class="mt-6 text-xs md:text-sm lg:text-lg">保持在全球手套模具市场的领先地位，并为公司利益相关者实现经济价值。</p>
</div>
</div>
</div>

<div class="animate__fadeInUp animate__animated p-6 mt-12 relative">
<div class="h-52 md:h-96"><img alt="Mark Dynamics Mission" class="w-full h-full object-cover rounded-2xl" src="../img/mission.png" /></div>

<div class="bg-gray-100 rounded-2xl shadow-xl -mt-6 md:-mt-24 z-20 relative -mx-6 text-black">
<div class="max-w-7xl mx-auto py-6 px-4 sm:py-12 sm:px-6 lg:px-8">
<h2 class="text-2xl md:text-4xl font-extrabold text-center">使命</h2>

<div class="mt-10 grid text-center grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">
<div><svg class="h-8 mx-auto" viewbox="0 0 512 477.62" xmlns="http://www.w3.org/2000/svg"><path d="M472.3 248.21V15.06A15.06 15.06 0 00457.24 0H53.72a15.06 15.06 0 00-15.06 15.06v251.75A45.69 45.69 0 0018 275.34c-19.8 14.05-24.49 45.47-7.9 64.87l67.84 82.24c42 49.15 86.6 55.17 152.92 55.17 56.91 0 82.35.25 132-11.05l48.29-11.55a42.16 42.16 0 0034.24 18h23.79c23.64 0 42.87-20.26 42.87-45.16V293.24c-.05-23.78-17.59-43.31-39.75-45.03zm-67.7 31l-20.06-10.2a119.35 119.35 0 00-104.66-1.69c-9.15 3.6-29.09 15.67-39.44 15.26h-69.63a41.94 41.94 0 00-41.89 41.89v11c-.13-.14-.27-.27-.39-.41l-49.73-54a46 46 0 00-10-8.2V123.45H192v55.21a15.07 15.07 0 0015.07 15.06h95a15.06 15.06 0 0015.06-15.06v-55.21h125v124.76c-17.6 1.36-32.27 14-37.58 31zM222.16 123.45h64.91v40.15h-64.91zm220-30.12h-125V30.12h125v63.21zM287.07 30.12v63.21h-64.91V30.12zm-95 0v63.21H68.78V30.12zm163.75 407.15c-45.82 10.54-73.41 10.07-124.42 10.07-62.25 0-92.33-1-130.22-44.06l-67.84-82.24c-11.8-15.37 9.57-33.5 23.3-19.57l49.73 54c13.14 13.87 29.68 21.5 50.07 21.95H294.3a15.06 15.06 0 100-30.12H159v-22.84a11.78 11.78 0 0111.77-11.77h69.63c15.69 1.13 38.33-12 52.14-18.06a89.37 89.37 0 0178.35 1.24l31.54 16v114.24zm126.06-9.4c0 8.3-5.72 15-12.75 15h-23.79c-7 0-12.75-6.74-12.75-15V293.24c0-8.29 5.72-15 12.75-15h23.79c7 0 12.75 6.75 12.75 15z"></path></svg>

<p class="mt-3 text-xs md:text-sm">努力制造最高品质产品,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 330 330" xmlns="http://www.w3.org/2000/svg"><path d="M315 120h-22.69a135.36 135.36 0 00-5.47-13.2l16.05-16a15 15 0 000-21.21l-42.43-42.48a15 15 0 00-21.21 0l-16.05 16a135.36 135.36 0 00-13.2-5.42V15a15 15 0 00-15-15h-60a15 15 0 00-15 15v22.69a134.17 134.17 0 00-13.19 5.47l-16.06-16a15 15 0 00-21.21 0L27.11 69.54a15 15 0 000 21.21l16 16.06A134.17 134.17 0 0037.69 120H15a15 15 0 00-15 15v60a15 15 0 0015 15h22.69a135.36 135.36 0 005.47 13.2l-16 16.05a15 15 0 000 21.21l42.43 42.43a15 15 0 0021.21 0l16.06-16.05a134.17 134.17 0 0013.14 5.47V315a15 15 0 0015 15h60a15 15 0 0015-15v-22.69a133 133 0 0013.2-5.48l16.05 16.05a15 15 0 0021.21 0l42.43-42.42a15 15 0 000-21.22l-16.05-16.05a131.77 131.77 0 005.47-13.19H315a15 15 0 0015-15v-60a15 15 0 00-15-15zm-15 60h-18.78a15 15 0 00-14.53 11.26 103.75 103.75 0 01-11.23 27.06 15 15 0 002.31 18.24l13.3 13.29-21.22 21.22-13.29-13.3a15 15 0 00-18.24-2.3 104.07 104.07 0 01-27.06 11.22A15 15 0 00180 281.22V300h-30v-18.78a15 15 0 00-11.26-14.53 103.75 103.75 0 01-27.06-11.23 15 15 0 00-18.24 2.31l-13.29 13.3-21.22-21.22 13.3-13.29a15 15 0 002.31-18.24 104.09 104.09 0 01-11.23-27.06A15 15 0 0048.78 180H30v-30h18.78a15 15 0 0014.53-11.26 104.27 104.27 0 0111.22-27.06 15 15 0 00-2.3-18.24l-13.3-13.29 21.22-21.22 13.29 13.3a15 15 0 0018.24 2.31 104.09 104.09 0 0127.06-11.23A15 15 0 00150 48.78V30h30v18.78a15 15 0 0011.26 14.53 104 104 0 0127.06 11.23 15 15 0 0018.24-2.31l13.29-13.3 21.22 21.22-13.3 13.29a15 15 0 00-2.3 18.24 104.07 104.07 0 0111.22 27.06A15 15 0 00281.22 150H300z"></path><path d="M186.39 132.39L152 166.79l-9.39-9.4a15 15 0 10-21.22 21.22l20 20a15 15 0 0021.22 0l45-45a15 15 0 00-21.22-21.22z"></path></svg>

<p class="mt-3 text-xs md:text-sm">致力于降低生产成本以达到效率,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 511.98" xmlns="http://www.w3.org/2000/svg"><path d="M512 374a15 15 0 00-2.31-8l-39.29-86.35c-14.4-31.65-49.09-52.18-88.3-52.18h-35.44v-20.18a25 25 0 00-17.54-23.86c14.74-26.7 26.26-56.41 26.26-84.05a99.39 99.39 0 00-198.77 0c0 27.25 11.2 56.5 25.64 82.91H15a15 15 0 000 30h33.73v30H36a15 15 0 100 30h12.73V301H15a15 15 0 000 30h33.73v118.52a15 15 0 0015 15h42.62a50 50 0 0099.87 0l165.88.5a50 50 0 0099.8 0H497a15 15 0 0015-15v-75.68-.18-.16zm-61.53-65.7l23.07 50.7h-66.88v-40.29c0-5.55 7-10.41 15-10.41zM256 30a69.47 69.47 0 0169.38 69.38c0 28.52-16.27 61.46-34.15 89.06a14.16 14.16 0 00-1 1.52 475 475 0 01-34.23 45.6 471.82 471.82 0 01-34.28-45.65 15.54 15.54 0 00-.93-1.45c-17.9-27.6-34.18-60.55-34.18-89.08A69.47 69.47 0 01256 30zM78.73 331h42.56a15 15 0 000-30H78.73v-28.71h91.73a15 15 0 000-30H78.73v-30h121.88a476.29 476.29 0 0044.5 56.24 15 15 0 0021.77 0 475.12 475.12 0 0044.5-56.24h5.28v222.23H198a49.95 49.95 0 00-83.51 0H78.73zm77.56 151a20 20 0 1120-20 20 20 0 01-20 20zM422 482a20 20 0 01-19.25-25.38 14.46 14.46 0 001.07-2.91 20 20 0 0136.36 0 15.07 15.07 0 001.06 2.91A19.48 19.48 0 01442 462a20 20 0 01-20 20zm42.07-47a49.93 49.93 0 00-84.14 0h-33.27V257.47h35.44c20.49 0 39.5 8 51.63 20.83h-12.06c-24.82 0-45 18.13-45 40.41V374a15 15 0 0015 15H482v46z"></path><path d="M256 128.8a30 30 0 10-30-30 30 30 0 0030 30z"></path></svg>

<p class="mt-3 text-xs md:text-sm">向客户准时交货，与客户保持良好关系,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 510" xmlns="http://www.w3.org/2000/svg"><path d="M443.73 198.23A84.78 84.78 0 00472 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00402 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 00293.19 100H287a15 15 0 000 30h15v5a84.77 84.77 0 0029.58 64.36 115.09 115.09 0 00-32.43 21 94.38 94.38 0 00-28.15-9.17V205a15 15 0 00-30 0v6.19a93.94 93.94 0 00-28.14 9.19 115.23 115.23 0 00-32.43-21A84.79 84.79 0 00210 135v-5h15a15 15 0 000-30h-6.19A95.22 95.22 0 00140 21.19V15a15 15 0 00-30 0v6.19A95.22 95.22 0 0031.19 100H25a15 15 0 000 30h15v5a84.78 84.78 0 0028.27 63.23A110.17 110.17 0 000 300v95a15 15 0 0015 15h153.62A114.73 114.73 0 00131 495a15 15 0 0015 15h220a15 15 0 0015-15 114.73 114.73 0 00-37.62-85H497a15 15 0 0015-15v-95a110.17 110.17 0 00-68.27-101.77zM323.75 100A65.19 65.19 0 01372 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01450.25 100zM442 130v5a55 55 0 01-110 0v-5zM256 260a15 15 0 0015-15v-3.24A65.19 65.19 0 01319.25 290h-126.5A65.19 65.19 0 01241 241.76V245a15 15 0 0015 15zm55 65a55 55 0 01-110 0v-5h110zM61.75 100A65.19 65.19 0 01110 51.76V55a15 15 0 0030 0v-3.24A65.19 65.19 0 01188.25 100zM180 130v5a55 55 0 01-110 0v-5zM30 300a80.09 80.09 0 0180-80h25a85 85 0 0153.09 18.64 94.84 94.84 0 00-25.9 51.36H156a15 15 0 000 30h15v5a84.59 84.59 0 0020.27 55H30zm319.67 180H162.32A85.15 85.15 0 01246 410h20a85.13 85.13 0 0183.67 70zM482 380H320.73A84.59 84.59 0 00341 325v-5h15a15 15 0 000-30h-6.19a94.84 94.84 0 00-25.9-51.36A85 85 0 01377 220h25a80.09 80.09 0 0180 80z"></path></svg>

<p class="mt-3 text-xs md:text-sm">聘用并培养公司最优秀人才,</p>
</div>

<div><svg class="h-8 mx-auto" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 92.89h-1.08A164.53 164.53 0 00152.13 385a38.76 38.76 0 0114.42 30.13V497a15 15 0 0015 15h.09l148.9-.93a15 15 0 0014.91-15v-80.62A39.28 39.28 0 01360 384.92a164.52 164.52 0 00-104-292zm-59.46 389v-44h118.9v43.23zM341 361.68a69.16 69.16 0 00-25.15 46.25H196.16a68.67 68.67 0 00-25.07-46.17 134.52 134.52 0 0184-238.86h.91a134.53 134.53 0 0185 238.79z"></path><path d="M331.71 202.27l-69-34.5a15 15 0 00-13.42 0l-69 34.5a15 15 0 00-8.29 13.41v80.5a15 15 0 008.29 13.42l69 34.5a15.11 15.11 0 0013.24.09l69-33.35a15 15 0 008.47-13.51V215.9a15 15 0 00-8.29-13.63zM256 198l36.12 18L257 234.45l-36.72-18.66zm-54 42.18l40 20.34-.67 46.11L202 286.91zm69.35 66.47l.67-46.14 38-19.95v47.41zM46 240.93H15a15 15 0 000 30h31a15 15 0 000-30zM497 240.93h-31a15 15 0 000 30h31a15 15 0 000-30zM256 61a15 15 0 0015-15V15a15 15 0 00-30 0v31a15 15 0 0015 15zM96.9 118.05a15 15 0 0021.21-21.22L96.19 74.91A15 15 0 0075 96.13zM415.1 393.82A15 15 0 10393.89 415l21.92 22A15 15 0 00437 415.74zM96.9 393.82L75 415.74A15 15 0 1096.19 437l21.92-22a15 15 0 10-21.21-21.18zM415.81 74.91l-21.92 21.92A15 15 0 00415.1 118L437 96.13a15 15 0 00-21.21-21.22z"></path></svg>

<p class="mt-3 text-xs md:text-sm">产生并采用新想法以及产品创新</p>
</div>
</div>
</div>
</div>
</div>
</div>
',
            'created_at' => '2021-09-22 09:30:47',
            'updated_at' => '2021-09-22 09:30:47',
        ),
        4 => 
        array (
            'id' => 9,
            'menu' => 20,
            'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Milestones</h2>

<div class="animate__fadeInLeft animate__animated relative w-full sm:w-2/3 lg:w-2/3 mt-24 mx-auto">
<div class="border-r-2 border-gray-200 border-dotted absolute h-full top-0 z-10 left-2 sm:left-32 lg:left-60 sm:-ml-2">&nbsp;</div>

<ul class="list-none sm:ml-28 lg:ml-56 m-0 p-0 space-y-12">
<li>
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M168 160h16v16h-16zM168 192h16v16h-16zM168 224h16v16h-16zM168 256h16v16h-16zM200 160h16v16h-16zM200 192h16v16h-16zM200 224h16v16h-16zM200 256h16v16h-16zM232 160h16v16h-16zM232 192h16v16h-16zM232 224h16v16h-16zM232 256h16v16h-16zM264 160h16v16h-16zM200 128h16v16h-16zM232 128h16v16h-16zM264 128h16v16h-16zM264 192h16v16h-16zM264 224h16v16h-16zM264 256h16v16h-16zM296 160h16v16h-16zM296 192h16v16h-16zM296 224h16v16h-16zM296 256h16v16h-16z"></path><path d="M472.009 120H352V8a7.995 7.995 0 00-7.991-8H136a7.995 7.995 0 00-8 7.991V120H8a7.995 7.995 0 00-8 7.991V416a7.995 7.995 0 007.991 8h16.732a48.008 48.008 0 00-.723 8v40a7.995 7.995 0 007.991 8H448a7.995 7.995 0 008-7.991V432a47.797 47.797 0 00-.723-8H472a7.995 7.995 0 008-7.991V128a7.995 7.995 0 00-7.991-8zM344 344c0 8.837-7.163 16-16 16s-16-7.163-16-16 7.163-16 16-16c8.832.011 15.989 7.168 16 16zm-192-16c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16c.011-8.832 7.168-15.989 16-16zm-48 136H40v-32c0-17.673 14.327-32 32-32s32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm49.212 29.425a48.225 48.225 0 00-10.064-7.449c12.202-12.784 11.731-33.04-1.053-45.243s-33.04-11.731-45.243 1.053c-11.803 12.365-11.803 31.824 0 44.189a48.31 48.31 0 00-18.358 18.024H16V136h112v187.056c-10.986 12.327-10.615 31.039.852 42.92a48.136 48.136 0 00-23.64 31.449zM184 464h-64v-56c0-17.673 14.327-32 32-32s32 14.327 32 32v56zm96 0h-80v-56c0-22.091 17.909-40 40-40s40 17.909 40 40v56zm-64-136c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24c-13.249-.014-23.986-10.751-24-24zm72.722 52.495a56.35 56.35 0 00-22.953-22.16c16.897-14.232 19.057-39.467 4.826-56.364-14.232-16.897-39.467-19.057-56.364-4.826-16.897 14.232-19.057 39.467-4.826 56.364a39.997 39.997 0 004.826 4.826 56.35 56.35 0 00-22.953 22.16 48.318 48.318 0 00-16.13-14.519c12.265-12.547 12.037-32.662-.511-44.927A31.77 31.77 0 00144 313.136V16h192v297.136a31.632 31.632 0 00-8-1.136c-17.626-.047-31.953 14.204-32 31.831a31.916 31.916 0 008.852 22.145 48.318 48.318 0 00-16.13 14.519zM360 432v32h-64v-56c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v24zm80 32h-64v-32c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm72 40h-14.494a48.31 48.31 0 00-18.358-18.024c12.202-12.784 11.731-33.04-1.053-45.243-12.784-12.202-33.04-11.731-45.243 1.053-11.803 12.365-11.803 31.824 0 44.189a48.199 48.199 0 00-10.064 7.449 48.133 48.133 0 00-23.64-31.449c11.467-11.881 11.839-30.593.853-42.92V136h112v272z"></path><path d="M376 184h16v128h-16zM424 184h16v128h-16zM40 184h16v128H40zM88 184h16v128H88zM288.009 32H192a7.995 7.995 0 00-8 7.991V104a7.995 7.995 0 007.991 8H288a7.995 7.995 0 008-7.991V40a7.995 7.995 0 00-7.991-8zM280 96h-80V48h80v48z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2020</div>
</div>

<div class="ml-8 sm:ml-16">The establishment of a subsidiary in the name of PT. Megah Raya Sumatera, which reprocessed into toilet and gypsum products.<br />
The gradual increase in production capacity is accompanied by the start of the production of a New Factory in Dalu Ten A, with the total capacity of two factories increasing gradually and reaching <span class="font-bold">950.000</span> pcs per month in December 2020.<br />
Acquired PT. Berjaya Dynamics Indonesia &amp; PT. Agro Dynamics Indonesia.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 640 640" xmlns="http://www.w3.org/2000/svg"><path d="M629.33 373.34h-32.72L576 74a10.69 10.69 0 00-10.67-10h-64a10.69 10.69 0 00-10.67 10L470 373.34h-22v-64a10.67 10.67 0 00-17.34-8.34l-89.33 71.46v-63.12A10.66 10.66 0 00324 301l-89.33 71.46v-63.12A10.67 10.67 0 00224 298.67a10.54 10.54 0 00-6.66 2.34L128 372.47v-63.13a10.66 10.66 0 00-16.16-9.14l-106.67 64A10.66 10.66 0 000 373.34v256A10.67 10.67 0 0010.67 640h618.66A10.67 10.67 0 00640 629.34V384a10.67 10.67 0 00-10.67-10.66zm-118-288h44.08l19.86 288h-83.85zM362.66 618.67v-128h64v128zm256 0H448V480a10.67 10.67 0 00-10.67-10.66H352A10.67 10.67 0 00341.33 480v138.67h-320v-239.3l85.33-51.19v66.49A10.67 10.67 0 00124 403l89.33-71.46v63.13a10.66 10.66 0 0017.33 8.33L320 331.54v63.13a10.66 10.66 0 0017.33 8.33l89.33-71.46V384a10.67 10.67 0 0010.67 10.67h181.33v224zM362.59 21.34a39.67 39.67 0 0110.37 8 37.34 37.34 0 0023.84 13.33 38.9 38.9 0 0025.13-13.87 50.28 50.28 0 019-7.46c2.2.1 7.95 5.48 11 8.37a35.73 35.73 0 0023.09 13A41.65 41.65 0 00491.86 28c2.61-2.45 6.57-6.17 7.34-6.63 5.72 0 7 1.9 10.56 7a27 27 0 0023.57 14.35 10.67 10.67 0 100-21.33c-2.13 0-2.55-.15-6-5.15A31.53 31.53 0 00499.2 0a34.27 34.27 0 00-21.95 12.42c-3.55 3.34-9.48 8.92-11.74 9a43.48 43.48 0 01-9-7.24A39.62 39.62 0 00430.93 0a37 37 0 00-23.59 13.19 44.39 44.39 0 01-10.25 8.15 41.6 41.6 0 01-9.59-7.57A38.73 38.73 0 00362.66 0a10.67 10.67 0 00-.07 21.34z"></path><path d="M117.34 490.67H74.66A10.66 10.66 0 0064 501.33v64A10.66 10.66 0 0074.66 576h42.68A10.67 10.67 0 00128 565.33v-64a10.67 10.67 0 00-10.66-10.66zm-10.68 64H85.33V512h21.33zM202.67 490.67H160a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00160 576h42.67a10.67 10.67 0 0010.66-10.67v-64a10.67 10.67 0 00-10.66-10.66zm-10.67 64h-21.34V512H192zM288 490.67h-42.67a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00245.33 576H288a10.66 10.66 0 0010.66-10.67v-64A10.66 10.66 0 00288 490.67zm-10.67 64H256V512h21.33z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2019</div>
</div>

<div class="ml-8 sm:ml-16">New factory inauguration at Jalan Utama, Desa Dalu. Capacity was up to <span class="font-bold">610.000</span> pcs/month.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M448 128H336c5.32-12.13 8-22.83 8-32a96 96 0 00-192 0c0 9.17 2.69 19.87 8 32H48a48.05 48.05 0 00-48 48v272a48.05 48.05 0 0048 48h400a48.05 48.05 0 0048-48V176a48.05 48.05 0 00-48-48zM248 16a80.09 80.09 0 0180 80c0 15.62-10.95 38.77-31.81 67.46l-.06.08q-4.81 6.61-10.32 13.61c-14.88 18.9-29.92 35.14-37.81 43.39-7.89-8.25-22.93-24.49-37.81-43.39q-5.52-7-10.32-13.61l-.06-.08C179 134.77 168 111.62 168 96a80.09 80.09 0 0180-80zm96 248h104v16H344a8 8 0 00-8 8v160h-16V288a8 8 0 00-8-8H152a8 8 0 00-8 8v160h-16V336a8 8 0 00-8-8H48v-16h72a8 8 0 008-8V176h16v80a8 8 0 008 8h160a8 8 0 008-8v-80h16v80a8 8 0 008 8zm8-16v-72h96v72zm96 48v152h-96V296zm-144 0v152H160V296zm-192 48v104H48V344zm-64-48V176h64v120zm112-48v-72h29.17q4.07 5.48 8.55 11.18a618.17 618.17 0 0044.64 50.5 8 8 0 0011.28 0 618.17 618.17 0 0044.64-50.5q3-3.75 5.72-7.4V248zm320 200a32 32 0 01-32 32H48a32 32 0 01-32-32V176a32 32 0 0132-32h120.08q4.33 7.68 9.84 16H40a8 8 0 00-8 8v288a8 8 0 008 8h416a8 8 0 008-8V168a8 8 0 00-8-8H318.08q5.51-8.31 9.84-16H448a32 32 0 0132 32z"></path><path d="M248 112a32 32 0 10-32-32 32 32 0 0032 32zm0-48a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2018</div>
</div>

<div class="ml-8 sm:ml-16">Acquired a 90.000 m2 of land. A 1:5 stock split. Capacity was up to <span class="font-bold">540.000</span> pcs/month.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M0 480h496v16H0zM32 192h8v32h16v-32h8a8 8 0 008-8V72a8 8 0 00-8-8h-8V32H40v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96H40zM112 272h8v32h16v-32h8a8 8 0 008-8V152a8 8 0 00-8-8h-8v-32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM192 160h8v32h16v-32h8a8 8 0 008-8V40a8 8 0 00-8-8h-8V0h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM272 336h8v32h16v-32h8a8 8 0 008-8V216a8 8 0 00-8-8h-8v-32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM352 160h8v32h16v-32h8a8 8 0 008-8V40a8 8 0 00-8-8h-8V0h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM432 192h8v32h16v-32h8a8 8 0 008-8V72a8 8 0 00-8-8h-8V32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16z"></path><path d="M32 448a32 32 0 0032-32c0-1-.21-1.94-.3-2.9l102-51a31.79 31.79 0 0051.51 1.41l43.05 36.89A31.63 31.63 0 00256 416a32 32 0 0064 0 31.43 31.43 0 00-.41-4l127.79-112.78a32.57 32.57 0 10-11.11-11.54l-123.18 108.7a31.49 31.49 0 00-41.82-7.53L223.6 348a32.71 32.71 0 00.4-4 32 32 0 00-64 0c0 1 .21 1.94.3 2.9l-102 51A32 32 0 1032 448zm432-192a16 16 0 11-16 16 16 16 0 0116-16zM304 416a16 16 0 11-16-16 16 16 0 0116 16zm-112-88a16 16 0 11-16 16 16 16 0 0116-16zM32 400a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2017</div>
</div>

<div class="ml-8 sm:ml-16">Conducted an IPO and listed its shares on the Indonesia Stock Exchange</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M448 128H336c5.32-12.13 8-22.83 8-32a96 96 0 00-192 0c0 9.17 2.69 19.87 8 32H48a48.05 48.05 0 00-48 48v272a48.05 48.05 0 0048 48h400a48.05 48.05 0 0048-48V176a48.05 48.05 0 00-48-48zM248 16a80.09 80.09 0 0180 80c0 15.62-10.95 38.77-31.81 67.46l-.06.08q-4.81 6.61-10.32 13.61c-14.88 18.9-29.92 35.14-37.81 43.39-7.89-8.25-22.93-24.49-37.81-43.39q-5.52-7-10.32-13.61l-.06-.08C179 134.77 168 111.62 168 96a80.09 80.09 0 0180-80zm96 248h104v16H344a8 8 0 00-8 8v160h-16V288a8 8 0 00-8-8H152a8 8 0 00-8 8v160h-16V336a8 8 0 00-8-8H48v-16h72a8 8 0 008-8V176h16v80a8 8 0 008 8h160a8 8 0 008-8v-80h16v80a8 8 0 008 8zm8-16v-72h96v72zm96 48v152h-96V296zm-144 0v152H160V296zm-192 48v104H48V344zm-64-48V176h64v120zm112-48v-72h29.17q4.07 5.48 8.55 11.18a618.17 618.17 0 0044.64 50.5 8 8 0 0011.28 0 618.17 618.17 0 0044.64-50.5q3-3.75 5.72-7.4V248zm320 200a32 32 0 01-32 32H48a32 32 0 01-32-32V176a32 32 0 0132-32h120.08q4.33 7.68 9.84 16H40a8 8 0 00-8 8v288a8 8 0 008 8h416a8 8 0 008-8V168a8 8 0 00-8-8H318.08q5.51-8.31 9.84-16H448a32 32 0 0132 32z"></path><path d="M248 112a32 32 0 10-32-32 32 32 0 0032 32zm0-48a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2016</div>
</div>

<div class="ml-8 sm:ml-16">Acquired 2.400 m<sup>2</sup> of land to increase capacity and 30.000 m<sup>2</sup> of land for future expansion.<br />
Extension of 9001 and upgrade to ISO 9001:2015.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2014</div>
</div>

<div class="ml-8 sm:ml-16">Another upgrade to <span class="font-bold">300.000</span> pieces per month</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2011</div>
</div>

<div class="ml-8 sm:ml-16">Production capacity reached <span class="font-bold">220.000</span> pieces per month</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2009</div>
</div>

<div class="ml-8 sm:ml-16">Capacity was up to <span class="font-bold">110.000</span> pieces per month. ISO 9001 period extension and upgrade to ISO 9001:2008.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2008</div>
</div>

<div class="ml-8 sm:ml-16">Increased total capacity to <span class="font-bold">80.000</span>/month. Earned ISO 9001:2000 Quality Management Standard Certification</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M488 208h-80v-24a8 8 0 00-8-8 39.75 39.75 0 00-30.42 14.34 30.54 30.54 0 00-6.23-3l-16.41-5.48A16 16 0 01336 166.7V160h88a16 16 0 0016-16V16a16 16 0 00-16-16H200a16 16 0 00-16 16v128a16 16 0 0016 16h88v6.7a16 16 0 01-10.94 15.18l-16.41 5.47a30.12 30.12 0 00-19.5 20.65H144V72a8 8 0 00-8-8H40a8 8 0 00-8 8v136H8a8 8 0 00-8 8v272a8 8 0 008 8h32a8 8 0 008-8v-56h80v56a8 8 0 008 8h32a8 8 0 008-8V272h184v56H256a40 40 0 00-40 40v16a8 8 0 008 8h64v6.06A73.35 73.35 0 01268.47 448H256a24 24 0 000 48h112a24 24 0 000-48h-12.47A73.35 73.35 0 01336 398.06V392h48a24 24 0 0024-24v-96h40v216a8 8 0 008 8h32a8 8 0 008-8V216a8 8 0 00-8-8zM424 16v96H200V16zM200 128h224v16H200zm65.71 74.52l16.41-5.46A32 32 0 00304 166.7V160h16v6.7a32 32 0 0021.88 30.36l16.41 5.47a14 14 0 013.64 1.84 34.1 34.1 0 00-1.12 3.64H258.52a14.14 14.14 0 017.19-5.49zM128 160H48v-32h80zm0-80v32H48V80zm-80 96h80v32H48zM32 480H16V272h16zm96-208v64H48v-64zM48 416v-64h80v64zm112 64h-16V272h16zm8-224H16v-32h344v32zm208-40a24 24 0 0116-22.63V328h-16zm0 256a8 8 0 01-8 8H256a8 8 0 010-16h112a8 8 0 018 8zm-40.89-24h-46.22A89.36 89.36 0 00304 398.06V392h16v6.06A89.36 89.36 0 00335.11 448zM392 368a8 8 0 01-8 8H232v-8a24 24 0 0124-24h136zm16-144h72v32h-72zm72 256h-16V272h16z"></path><path d="M72 288h32v16H72zM72 368h32v16H72z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2007</div>
</div>

<div class="ml-8 sm:ml-16">Established a new office and meeting rooms located at Plant 2.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M472.004 0H8a7.998 7.998 0 00-8 7.996V472a7.998 7.998 0 007.996 8H472a7.998 7.998 0 008-7.996V8a7.998 7.998 0 00-7.996-8zM464 464H16V16h144.272c2.771 53.713 33.4 88 79.728 88h16c30.928 0 56 25.072 56 56s-25.072 56-56 56h-24c-43.063 0-72 33.758-72 84 .052 46.37 37.63 83.948 84 84h220v80zm0-96H244c-37.537-.043-67.957-30.463-68-68 0-31.367 14.664-68 56-68h24c39.765 0 72-32.236 72-72 0-39.765-32.235-72-72-72h-16c-43.943 0-61.525-35.838-63.738-72H464v352z"></path><path d="M72 32c-22.091 0-40 17.909-40 40s17.909 40 40 40c22.081-.026 39.974-17.919 40-40 0-22.091-17.909-40-40-40zm0 64c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24c-.014 13.249-10.751 23.986-24 24zM271.156 172.422l-24-48a8.33 8.33 0 00-14.313 0l-24 48A8.001 8.001 0 00215.999 184h48a8 8 0 007.157-11.578zM228.945 168L240 145.887 251.055 168h-22.11zM296.004 272H248a7.998 7.998 0 00-8 7.996V328a7.998 7.998 0 007.996 8H296a7.998 7.998 0 008-7.996V280a7.998 7.998 0 00-7.996-8zM288 320h-32v-32h32v32zM424 232v-24h-16v24h-24v16h24v24h16v-24h24v-16zM431.156 68.422l-16-32A8.002 8.002 0 00408 32h-32c-3.03 0-5.8 1.712-7.156 4.422l-16 32a8.008 8.008 0 000 7.156l16 32A8.002 8.002 0 00376 112h32c3.03 0 5.8-1.712 7.156-4.422l16-32a8.008 8.008 0 000-7.156zM403.055 96h-22.109l-12-24 12-24h22.109l12 24-12 24zM32 152h32v16H32zM80 152h32v16H80zM128 152h32v16h-32zM144 184h16v32h-16zM128 232h32v16h-32zM96 232h16v32H96zM96 280h16v32H96zM96 328h16v32H96zM96 376h32v16H96zM194.912 397.656L183.6 386.344l-16.968 16.968-16.976-16.968-11.312 11.312 16.968 16.968-16.968 16.976 11.312 11.312 16.976-16.976 16.968 16.976 11.312-11.312-16.968-16.976zM432 408h16v16h-16zM400 408h16v16h-16zM368 408h16v16h-16zM336 408h16v16h-16zM304 408h16v16h-16zM272 408h16v16h-16zM240 408h16v16h-16zM208 408h16v16h-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2005</div>
</div>

<div class="ml-8 sm:ml-16">Acquired a 3.500 m<sup>2</sup> land and additional capacity of <span class="font-bold">5.000</span> pieces per month</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 640 640" xmlns="http://www.w3.org/2000/svg"><path d="M629.33 373.34h-32.72L576 74a10.69 10.69 0 00-10.67-10h-64a10.69 10.69 0 00-10.67 10L470 373.34h-22v-64a10.67 10.67 0 00-17.34-8.34l-89.33 71.46v-63.12A10.66 10.66 0 00324 301l-89.33 71.46v-63.12A10.67 10.67 0 00224 298.67a10.54 10.54 0 00-6.66 2.34L128 372.47v-63.13a10.66 10.66 0 00-16.16-9.14l-106.67 64A10.66 10.66 0 000 373.34v256A10.67 10.67 0 0010.67 640h618.66A10.67 10.67 0 00640 629.34V384a10.67 10.67 0 00-10.67-10.66zm-118-288h44.08l19.86 288h-83.85zM362.66 618.67v-128h64v128zm256 0H448V480a10.67 10.67 0 00-10.67-10.66H352A10.67 10.67 0 00341.33 480v138.67h-320v-239.3l85.33-51.19v66.49A10.67 10.67 0 00124 403l89.33-71.46v63.13a10.66 10.66 0 0017.33 8.33L320 331.54v63.13a10.66 10.66 0 0017.33 8.33l89.33-71.46V384a10.67 10.67 0 0010.67 10.67h181.33v224zM362.59 21.34a39.67 39.67 0 0110.37 8 37.34 37.34 0 0023.84 13.33 38.9 38.9 0 0025.13-13.87 50.28 50.28 0 019-7.46c2.2.1 7.95 5.48 11 8.37a35.73 35.73 0 0023.09 13A41.65 41.65 0 00491.86 28c2.61-2.45 6.57-6.17 7.34-6.63 5.72 0 7 1.9 10.56 7a27 27 0 0023.57 14.35 10.67 10.67 0 100-21.33c-2.13 0-2.55-.15-6-5.15A31.53 31.53 0 00499.2 0a34.27 34.27 0 00-21.95 12.42c-3.55 3.34-9.48 8.92-11.74 9a43.48 43.48 0 01-9-7.24A39.62 39.62 0 00430.93 0a37 37 0 00-23.59 13.19 44.39 44.39 0 01-10.25 8.15 41.6 41.6 0 01-9.59-7.57A38.73 38.73 0 00362.66 0a10.67 10.67 0 00-.07 21.34z"></path><path d="M117.34 490.67H74.66A10.66 10.66 0 0064 501.33v64A10.66 10.66 0 0074.66 576h42.68A10.67 10.67 0 00128 565.33v-64a10.67 10.67 0 00-10.66-10.66zm-10.68 64H85.33V512h21.33zM202.67 490.67H160a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00160 576h42.67a10.67 10.67 0 0010.66-10.67v-64a10.67 10.67 0 00-10.66-10.66zm-10.67 64h-21.34V512H192zM288 490.67h-42.67a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00245.33 576H288a10.66 10.66 0 0010.66-10.67v-64A10.66 10.66 0 00288 490.67zm-10.67 64H256V512h21.33z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2003</div>
</div>

<div class="ml-8 sm:ml-16">Built the first factory on an area of 3.000 m<sup>2</sup> armed with a <span class="font-bold">50.000</span> pieces per month capacity</div>
</li>
<li class="sm:py-8 lg:py-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M168 160h16v16h-16zM168 192h16v16h-16zM168 224h16v16h-16zM168 256h16v16h-16zM200 160h16v16h-16zM200 192h16v16h-16zM200 224h16v16h-16zM200 256h16v16h-16zM232 160h16v16h-16zM232 192h16v16h-16zM232 224h16v16h-16zM232 256h16v16h-16zM264 160h16v16h-16zM200 128h16v16h-16zM232 128h16v16h-16zM264 128h16v16h-16zM264 192h16v16h-16zM264 224h16v16h-16zM264 256h16v16h-16zM296 160h16v16h-16zM296 192h16v16h-16zM296 224h16v16h-16zM296 256h16v16h-16z"></path><path d="M472.009 120H352V8a7.995 7.995 0 00-7.991-8H136a7.995 7.995 0 00-8 7.991V120H8a7.995 7.995 0 00-8 7.991V416a7.995 7.995 0 007.991 8h16.732a48.008 48.008 0 00-.723 8v40a7.995 7.995 0 007.991 8H448a7.995 7.995 0 008-7.991V432a47.797 47.797 0 00-.723-8H472a7.995 7.995 0 008-7.991V128a7.995 7.995 0 00-7.991-8zM344 344c0 8.837-7.163 16-16 16s-16-7.163-16-16 7.163-16 16-16c8.832.011 15.989 7.168 16 16zm-192-16c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16c.011-8.832 7.168-15.989 16-16zm-48 136H40v-32c0-17.673 14.327-32 32-32s32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm49.212 29.425a48.225 48.225 0 00-10.064-7.449c12.202-12.784 11.731-33.04-1.053-45.243s-33.04-11.731-45.243 1.053c-11.803 12.365-11.803 31.824 0 44.189a48.31 48.31 0 00-18.358 18.024H16V136h112v187.056c-10.986 12.327-10.615 31.039.852 42.92a48.136 48.136 0 00-23.64 31.449zM184 464h-64v-56c0-17.673 14.327-32 32-32s32 14.327 32 32v56zm96 0h-80v-56c0-22.091 17.909-40 40-40s40 17.909 40 40v56zm-64-136c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24c-13.249-.014-23.986-10.751-24-24zm72.722 52.495a56.35 56.35 0 00-22.953-22.16c16.897-14.232 19.057-39.467 4.826-56.364-14.232-16.897-39.467-19.057-56.364-4.826-16.897 14.232-19.057 39.467-4.826 56.364a39.997 39.997 0 004.826 4.826 56.35 56.35 0 00-22.953 22.16 48.318 48.318 0 00-16.13-14.519c12.265-12.547 12.037-32.662-.511-44.927A31.77 31.77 0 00144 313.136V16h192v297.136a31.632 31.632 0 00-8-1.136c-17.626-.047-31.953 14.204-32 31.831a31.916 31.916 0 008.852 22.145 48.318 48.318 0 00-16.13 14.519zM360 432v32h-64v-56c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v24zm80 32h-64v-32c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm72 40h-14.494a48.31 48.31 0 00-18.358-18.024c12.202-12.784 11.731-33.04-1.053-45.243-12.784-12.202-33.04-11.731-45.243 1.053-11.803 12.365-11.803 31.824 0 44.189a48.199 48.199 0 00-10.064 7.449 48.133 48.133 0 00-23.64-31.449c11.467-11.881 11.839-30.593.853-42.92V136h112v272z"></path><path d="M376 184h16v128h-16zM424 184h16v128h-16zM40 184h16v128H40zM88 184h16v128H88zM288.009 32H192a7.995 7.995 0 00-8 7.991V104a7.995 7.995 0 007.991 8H288a7.995 7.995 0 008-7.991V40a7.995 7.995 0 00-7.991-8zM280 96h-80V48h80v48z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2002</div>
</div>

<div class="ml-8 sm:ml-16">Establishment of PT Mark Dynamics Indonesia.</div>
</li>
</ul>
</div>
</div>
',
            'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Rekam Jejak</h2>

<div class="animate__fadeInLeft animate__animated relative w-full sm:w-2/3 lg:w-2/3 mt-24 mx-auto">
<div class="border-r-2 border-gray-200 border-dotted absolute h-full top-0 z-10 left-2 sm:left-32 lg:left-60 sm:-ml-2">&nbsp;</div>

<ul class="list-none sm:ml-28 lg:ml-56 m-0 p-0 space-y-12">
<li>
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M168 160h16v16h-16zM168 192h16v16h-16zM168 224h16v16h-16zM168 256h16v16h-16zM200 160h16v16h-16zM200 192h16v16h-16zM200 224h16v16h-16zM200 256h16v16h-16zM232 160h16v16h-16zM232 192h16v16h-16zM232 224h16v16h-16zM232 256h16v16h-16zM264 160h16v16h-16zM200 128h16v16h-16zM232 128h16v16h-16zM264 128h16v16h-16zM264 192h16v16h-16zM264 224h16v16h-16zM264 256h16v16h-16zM296 160h16v16h-16zM296 192h16v16h-16zM296 224h16v16h-16zM296 256h16v16h-16z"></path><path d="M472.009 120H352V8a7.995 7.995 0 00-7.991-8H136a7.995 7.995 0 00-8 7.991V120H8a7.995 7.995 0 00-8 7.991V416a7.995 7.995 0 007.991 8h16.732a48.008 48.008 0 00-.723 8v40a7.995 7.995 0 007.991 8H448a7.995 7.995 0 008-7.991V432a47.797 47.797 0 00-.723-8H472a7.995 7.995 0 008-7.991V128a7.995 7.995 0 00-7.991-8zM344 344c0 8.837-7.163 16-16 16s-16-7.163-16-16 7.163-16 16-16c8.832.011 15.989 7.168 16 16zm-192-16c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16c.011-8.832 7.168-15.989 16-16zm-48 136H40v-32c0-17.673 14.327-32 32-32s32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm49.212 29.425a48.225 48.225 0 00-10.064-7.449c12.202-12.784 11.731-33.04-1.053-45.243s-33.04-11.731-45.243 1.053c-11.803 12.365-11.803 31.824 0 44.189a48.31 48.31 0 00-18.358 18.024H16V136h112v187.056c-10.986 12.327-10.615 31.039.852 42.92a48.136 48.136 0 00-23.64 31.449zM184 464h-64v-56c0-17.673 14.327-32 32-32s32 14.327 32 32v56zm96 0h-80v-56c0-22.091 17.909-40 40-40s40 17.909 40 40v56zm-64-136c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24c-13.249-.014-23.986-10.751-24-24zm72.722 52.495a56.35 56.35 0 00-22.953-22.16c16.897-14.232 19.057-39.467 4.826-56.364-14.232-16.897-39.467-19.057-56.364-4.826-16.897 14.232-19.057 39.467-4.826 56.364a39.997 39.997 0 004.826 4.826 56.35 56.35 0 00-22.953 22.16 48.318 48.318 0 00-16.13-14.519c12.265-12.547 12.037-32.662-.511-44.927A31.77 31.77 0 00144 313.136V16h192v297.136a31.632 31.632 0 00-8-1.136c-17.626-.047-31.953 14.204-32 31.831a31.916 31.916 0 008.852 22.145 48.318 48.318 0 00-16.13 14.519zM360 432v32h-64v-56c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v24zm80 32h-64v-32c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm72 40h-14.494a48.31 48.31 0 00-18.358-18.024c12.202-12.784 11.731-33.04-1.053-45.243-12.784-12.202-33.04-11.731-45.243 1.053-11.803 12.365-11.803 31.824 0 44.189a48.199 48.199 0 00-10.064 7.449 48.133 48.133 0 00-23.64-31.449c11.467-11.881 11.839-30.593.853-42.92V136h112v272z"></path><path d="M376 184h16v128h-16zM424 184h16v128h-16zM40 184h16v128H40zM88 184h16v128H88zM288.009 32H192a7.995 7.995 0 00-8 7.991V104a7.995 7.995 0 007.991 8H288a7.995 7.995 0 008-7.991V40a7.995 7.995 0 00-7.991-8zM280 96h-80V48h80v48z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2020</div>
</div>

<div class="ml-8 sm:ml-16">Pendirian entitas anak perusahaan atas nama PT. Megah Raya Sumatera yang mengolah limbah MARK menjadi produk kloset dan gypsum.<br />
Peningkatan kapasitas produksi secara bertahap diiringi dengan mulai berproduksinya Pabrik Baru di Dalu Sepuluh A dengan total kapasitas kedua pabrik naik secara bertahap dan mencapai <span class="font-bold">950.000</span> pcs per bulan pada bulan Desember 2020<br />
Melakukan akuisisi terhadap PT. Berjaya Dynamics Indonesia &amp; PT. Agro Dynamics Indo.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 640 640" xmlns="http://www.w3.org/2000/svg"><path d="M629.33 373.34h-32.72L576 74a10.69 10.69 0 00-10.67-10h-64a10.69 10.69 0 00-10.67 10L470 373.34h-22v-64a10.67 10.67 0 00-17.34-8.34l-89.33 71.46v-63.12A10.66 10.66 0 00324 301l-89.33 71.46v-63.12A10.67 10.67 0 00224 298.67a10.54 10.54 0 00-6.66 2.34L128 372.47v-63.13a10.66 10.66 0 00-16.16-9.14l-106.67 64A10.66 10.66 0 000 373.34v256A10.67 10.67 0 0010.67 640h618.66A10.67 10.67 0 00640 629.34V384a10.67 10.67 0 00-10.67-10.66zm-118-288h44.08l19.86 288h-83.85zM362.66 618.67v-128h64v128zm256 0H448V480a10.67 10.67 0 00-10.67-10.66H352A10.67 10.67 0 00341.33 480v138.67h-320v-239.3l85.33-51.19v66.49A10.67 10.67 0 00124 403l89.33-71.46v63.13a10.66 10.66 0 0017.33 8.33L320 331.54v63.13a10.66 10.66 0 0017.33 8.33l89.33-71.46V384a10.67 10.67 0 0010.67 10.67h181.33v224zM362.59 21.34a39.67 39.67 0 0110.37 8 37.34 37.34 0 0023.84 13.33 38.9 38.9 0 0025.13-13.87 50.28 50.28 0 019-7.46c2.2.1 7.95 5.48 11 8.37a35.73 35.73 0 0023.09 13A41.65 41.65 0 00491.86 28c2.61-2.45 6.57-6.17 7.34-6.63 5.72 0 7 1.9 10.56 7a27 27 0 0023.57 14.35 10.67 10.67 0 100-21.33c-2.13 0-2.55-.15-6-5.15A31.53 31.53 0 00499.2 0a34.27 34.27 0 00-21.95 12.42c-3.55 3.34-9.48 8.92-11.74 9a43.48 43.48 0 01-9-7.24A39.62 39.62 0 00430.93 0a37 37 0 00-23.59 13.19 44.39 44.39 0 01-10.25 8.15 41.6 41.6 0 01-9.59-7.57A38.73 38.73 0 00362.66 0a10.67 10.67 0 00-.07 21.34z"></path><path d="M117.34 490.67H74.66A10.66 10.66 0 0064 501.33v64A10.66 10.66 0 0074.66 576h42.68A10.67 10.67 0 00128 565.33v-64a10.67 10.67 0 00-10.66-10.66zm-10.68 64H85.33V512h21.33zM202.67 490.67H160a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00160 576h42.67a10.67 10.67 0 0010.66-10.67v-64a10.67 10.67 0 00-10.66-10.66zm-10.67 64h-21.34V512H192zM288 490.67h-42.67a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00245.33 576H288a10.66 10.66 0 0010.66-10.67v-64A10.66 10.66 0 00288 490.67zm-10.67 64H256V512h21.33z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2019</div>
</div>

<div class="ml-8 sm:ml-16">Pembukaan pabrik baru di Jalan Utama, Desa Dalu.<br />
Meningkatkan kapasitas produksi menjadi <span class="font-bold">610.000</span> unit per bulan.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M448 128H336c5.32-12.13 8-22.83 8-32a96 96 0 00-192 0c0 9.17 2.69 19.87 8 32H48a48.05 48.05 0 00-48 48v272a48.05 48.05 0 0048 48h400a48.05 48.05 0 0048-48V176a48.05 48.05 0 00-48-48zM248 16a80.09 80.09 0 0180 80c0 15.62-10.95 38.77-31.81 67.46l-.06.08q-4.81 6.61-10.32 13.61c-14.88 18.9-29.92 35.14-37.81 43.39-7.89-8.25-22.93-24.49-37.81-43.39q-5.52-7-10.32-13.61l-.06-.08C179 134.77 168 111.62 168 96a80.09 80.09 0 0180-80zm96 248h104v16H344a8 8 0 00-8 8v160h-16V288a8 8 0 00-8-8H152a8 8 0 00-8 8v160h-16V336a8 8 0 00-8-8H48v-16h72a8 8 0 008-8V176h16v80a8 8 0 008 8h160a8 8 0 008-8v-80h16v80a8 8 0 008 8zm8-16v-72h96v72zm96 48v152h-96V296zm-144 0v152H160V296zm-192 48v104H48V344zm-64-48V176h64v120zm112-48v-72h29.17q4.07 5.48 8.55 11.18a618.17 618.17 0 0044.64 50.5 8 8 0 0011.28 0 618.17 618.17 0 0044.64-50.5q3-3.75 5.72-7.4V248zm320 200a32 32 0 01-32 32H48a32 32 0 01-32-32V176a32 32 0 0132-32h120.08q4.33 7.68 9.84 16H40a8 8 0 00-8 8v288a8 8 0 008 8h416a8 8 0 008-8V168a8 8 0 00-8-8H318.08q5.51-8.31 9.84-16H448a32 32 0 0132 32z"></path><path d="M248 112a32 32 0 10-32-32 32 32 0 0032 32zm0-48a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2018</div>
</div>

<div class="ml-8 sm:ml-16">Merampungkan akuisisi lahan seluas &plusmn; 9 ha.<br />
Meningkatkan kapasitas produksi menjadi <span class="font-bold">540.000</span> unit per bulan.<br />
Perseroan melakukan pemecahan nominal saham dengan rasio 1:5 dan mencatatkan saham dengan nominal baru Rp 20 per saham pada 11 Februari 2019.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M0 480h496v16H0zM32 192h8v32h16v-32h8a8 8 0 008-8V72a8 8 0 00-8-8h-8V32H40v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96H40zM112 272h8v32h16v-32h8a8 8 0 008-8V152a8 8 0 00-8-8h-8v-32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM192 160h8v32h16v-32h8a8 8 0 008-8V40a8 8 0 00-8-8h-8V0h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM272 336h8v32h16v-32h8a8 8 0 008-8V216a8 8 0 00-8-8h-8v-32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM352 160h8v32h16v-32h8a8 8 0 008-8V40a8 8 0 00-8-8h-8V0h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM432 192h8v32h16v-32h8a8 8 0 008-8V72a8 8 0 00-8-8h-8V32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16z"></path><path d="M32 448a32 32 0 0032-32c0-1-.21-1.94-.3-2.9l102-51a31.79 31.79 0 0051.51 1.41l43.05 36.89A31.63 31.63 0 00256 416a32 32 0 0064 0 31.43 31.43 0 00-.41-4l127.79-112.78a32.57 32.57 0 10-11.11-11.54l-123.18 108.7a31.49 31.49 0 00-41.82-7.53L223.6 348a32.71 32.71 0 00.4-4 32 32 0 00-64 0c0 1 .21 1.94.3 2.9l-102 51A32 32 0 1032 448zm432-192a16 16 0 11-16 16 16 16 0 0116-16zM304 416a16 16 0 11-16-16 16 16 0 0116 16zm-112-88a16 16 0 11-16 16 16 16 0 0116-16zM32 400a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2017</div>
</div>

<div class="ml-8 sm:ml-16">Perseroan mencatatkan saham perdana di Bursa Efek Indonesia pada 12 Juli 2017.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M448 128H336c5.32-12.13 8-22.83 8-32a96 96 0 00-192 0c0 9.17 2.69 19.87 8 32H48a48.05 48.05 0 00-48 48v272a48.05 48.05 0 0048 48h400a48.05 48.05 0 0048-48V176a48.05 48.05 0 00-48-48zM248 16a80.09 80.09 0 0180 80c0 15.62-10.95 38.77-31.81 67.46l-.06.08q-4.81 6.61-10.32 13.61c-14.88 18.9-29.92 35.14-37.81 43.39-7.89-8.25-22.93-24.49-37.81-43.39q-5.52-7-10.32-13.61l-.06-.08C179 134.77 168 111.62 168 96a80.09 80.09 0 0180-80zm96 248h104v16H344a8 8 0 00-8 8v160h-16V288a8 8 0 00-8-8H152a8 8 0 00-8 8v160h-16V336a8 8 0 00-8-8H48v-16h72a8 8 0 008-8V176h16v80a8 8 0 008 8h160a8 8 0 008-8v-80h16v80a8 8 0 008 8zm8-16v-72h96v72zm96 48v152h-96V296zm-144 0v152H160V296zm-192 48v104H48V344zm-64-48V176h64v120zm112-48v-72h29.17q4.07 5.48 8.55 11.18a618.17 618.17 0 0044.64 50.5 8 8 0 0011.28 0 618.17 618.17 0 0044.64-50.5q3-3.75 5.72-7.4V248zm320 200a32 32 0 01-32 32H48a32 32 0 01-32-32V176a32 32 0 0132-32h120.08q4.33 7.68 9.84 16H40a8 8 0 00-8 8v288a8 8 0 008 8h416a8 8 0 008-8V168a8 8 0 00-8-8H318.08q5.51-8.31 9.84-16H448a32 32 0 0132 32z"></path><path d="M248 112a32 32 0 10-32-32 32 32 0 0032 32zm0-48a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2016</div>
</div>

<div class="ml-8 sm:ml-16">Mengakuisisi lahan baru seluas 2.400 m<sup>2</sup> untuk peningkatan produksi.<br />
Mengakuisisi lahan lain seluas &plusmn; 3 ha untuk ekspansi masa depan.<br />
Perpanjangan sertifikasi ISO 9001 dan meningkatkan kualitasnya ke ISO 9001:2015.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2014</div>
</div>

<div class="ml-8 sm:ml-16">Meningkatkan kapasitas produksi menjadi <span class="font-bold">300.000</span> unit per bulan.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2011</div>
</div>

<div class="ml-8 sm:ml-16">Meningkatkan kapasitas produksi menjadi <span class="font-bold">220.000</span> unit per bulan.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2009</div>
</div>

<div class="ml-8 sm:ml-16">Kapasitas produksi dinaikkan menjadi <span class="font-bold">110.000</span> unit per bulan.<br />
Perpanjangan sertifikasi ISO 9001 dan meningkatkan kualifikasinya menjadi ISO 9001:2008.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2008</div>
</div>

<div class="ml-8 sm:ml-16">Menaikkan kapasitas produksi menjadi <span class="font-bold">80.000</span> unit per bulan.<br />
Memperoleh ISO 9001:2000 Sertifikasi Standar Manajemen Mutu.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M488 208h-80v-24a8 8 0 00-8-8 39.75 39.75 0 00-30.42 14.34 30.54 30.54 0 00-6.23-3l-16.41-5.48A16 16 0 01336 166.7V160h88a16 16 0 0016-16V16a16 16 0 00-16-16H200a16 16 0 00-16 16v128a16 16 0 0016 16h88v6.7a16 16 0 01-10.94 15.18l-16.41 5.47a30.12 30.12 0 00-19.5 20.65H144V72a8 8 0 00-8-8H40a8 8 0 00-8 8v136H8a8 8 0 00-8 8v272a8 8 0 008 8h32a8 8 0 008-8v-56h80v56a8 8 0 008 8h32a8 8 0 008-8V272h184v56H256a40 40 0 00-40 40v16a8 8 0 008 8h64v6.06A73.35 73.35 0 01268.47 448H256a24 24 0 000 48h112a24 24 0 000-48h-12.47A73.35 73.35 0 01336 398.06V392h48a24 24 0 0024-24v-96h40v216a8 8 0 008 8h32a8 8 0 008-8V216a8 8 0 00-8-8zM424 16v96H200V16zM200 128h224v16H200zm65.71 74.52l16.41-5.46A32 32 0 00304 166.7V160h16v6.7a32 32 0 0021.88 30.36l16.41 5.47a14 14 0 013.64 1.84 34.1 34.1 0 00-1.12 3.64H258.52a14.14 14.14 0 017.19-5.49zM128 160H48v-32h80zm0-80v32H48V80zm-80 96h80v32H48zM32 480H16V272h16zm96-208v64H48v-64zM48 416v-64h80v64zm112 64h-16V272h16zm8-224H16v-32h344v32zm208-40a24 24 0 0116-22.63V328h-16zm0 256a8 8 0 01-8 8H256a8 8 0 010-16h112a8 8 0 018 8zm-40.89-24h-46.22A89.36 89.36 0 00304 398.06V392h16v6.06A89.36 89.36 0 00335.11 448zM392 368a8 8 0 01-8 8H232v-8a24 24 0 0124-24h136zm16-144h72v32h-72zm72 256h-16V272h16z"></path><path d="M72 288h32v16H72zM72 368h32v16H72z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2007</div>
</div>

<div class="ml-8 sm:ml-16">Membangun gedung kantor baru dan ruang rapat yang berlokasi di Pabrik 2.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M472.004 0H8a7.998 7.998 0 00-8 7.996V472a7.998 7.998 0 007.996 8H472a7.998 7.998 0 008-7.996V8a7.998 7.998 0 00-7.996-8zM464 464H16V16h144.272c2.771 53.713 33.4 88 79.728 88h16c30.928 0 56 25.072 56 56s-25.072 56-56 56h-24c-43.063 0-72 33.758-72 84 .052 46.37 37.63 83.948 84 84h220v80zm0-96H244c-37.537-.043-67.957-30.463-68-68 0-31.367 14.664-68 56-68h24c39.765 0 72-32.236 72-72 0-39.765-32.235-72-72-72h-16c-43.943 0-61.525-35.838-63.738-72H464v352z"></path><path d="M72 32c-22.091 0-40 17.909-40 40s17.909 40 40 40c22.081-.026 39.974-17.919 40-40 0-22.091-17.909-40-40-40zm0 64c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24c-.014 13.249-10.751 23.986-24 24zM271.156 172.422l-24-48a8.33 8.33 0 00-14.313 0l-24 48A8.001 8.001 0 00215.999 184h48a8 8 0 007.157-11.578zM228.945 168L240 145.887 251.055 168h-22.11zM296.004 272H248a7.998 7.998 0 00-8 7.996V328a7.998 7.998 0 007.996 8H296a7.998 7.998 0 008-7.996V280a7.998 7.998 0 00-7.996-8zM288 320h-32v-32h32v32zM424 232v-24h-16v24h-24v16h24v24h16v-24h24v-16zM431.156 68.422l-16-32A8.002 8.002 0 00408 32h-32c-3.03 0-5.8 1.712-7.156 4.422l-16 32a8.008 8.008 0 000 7.156l16 32A8.002 8.002 0 00376 112h32c3.03 0 5.8-1.712 7.156-4.422l16-32a8.008 8.008 0 000-7.156zM403.055 96h-22.109l-12-24 12-24h22.109l12 24-12 24zM32 152h32v16H32zM80 152h32v16H80zM128 152h32v16h-32zM144 184h16v32h-16zM128 232h32v16h-32zM96 232h16v32H96zM96 280h16v32H96zM96 328h16v32H96zM96 376h32v16H96zM194.912 397.656L183.6 386.344l-16.968 16.968-16.976-16.968-11.312 11.312 16.968 16.968-16.968 16.976 11.312 11.312 16.976-16.976 16.968 16.976 11.312-11.312-16.968-16.976zM432 408h16v16h-16zM400 408h16v16h-16zM368 408h16v16h-16zM336 408h16v16h-16zM304 408h16v16h-16zM272 408h16v16h-16zM240 408h16v16h-16zM208 408h16v16h-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2005</div>
</div>

<div class="ml-8 sm:ml-16">Peningkatan kapasitas Pabrik 1 sebesar <span class="font-bold">55.000</span> unit per bulan dengan mengakuisisi lahan seluas 3.500 m<sup>2</sup>.</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 640 640" xmlns="http://www.w3.org/2000/svg"><path d="M629.33 373.34h-32.72L576 74a10.69 10.69 0 00-10.67-10h-64a10.69 10.69 0 00-10.67 10L470 373.34h-22v-64a10.67 10.67 0 00-17.34-8.34l-89.33 71.46v-63.12A10.66 10.66 0 00324 301l-89.33 71.46v-63.12A10.67 10.67 0 00224 298.67a10.54 10.54 0 00-6.66 2.34L128 372.47v-63.13a10.66 10.66 0 00-16.16-9.14l-106.67 64A10.66 10.66 0 000 373.34v256A10.67 10.67 0 0010.67 640h618.66A10.67 10.67 0 00640 629.34V384a10.67 10.67 0 00-10.67-10.66zm-118-288h44.08l19.86 288h-83.85zM362.66 618.67v-128h64v128zm256 0H448V480a10.67 10.67 0 00-10.67-10.66H352A10.67 10.67 0 00341.33 480v138.67h-320v-239.3l85.33-51.19v66.49A10.67 10.67 0 00124 403l89.33-71.46v63.13a10.66 10.66 0 0017.33 8.33L320 331.54v63.13a10.66 10.66 0 0017.33 8.33l89.33-71.46V384a10.67 10.67 0 0010.67 10.67h181.33v224zM362.59 21.34a39.67 39.67 0 0110.37 8 37.34 37.34 0 0023.84 13.33 38.9 38.9 0 0025.13-13.87 50.28 50.28 0 019-7.46c2.2.1 7.95 5.48 11 8.37a35.73 35.73 0 0023.09 13A41.65 41.65 0 00491.86 28c2.61-2.45 6.57-6.17 7.34-6.63 5.72 0 7 1.9 10.56 7a27 27 0 0023.57 14.35 10.67 10.67 0 100-21.33c-2.13 0-2.55-.15-6-5.15A31.53 31.53 0 00499.2 0a34.27 34.27 0 00-21.95 12.42c-3.55 3.34-9.48 8.92-11.74 9a43.48 43.48 0 01-9-7.24A39.62 39.62 0 00430.93 0a37 37 0 00-23.59 13.19 44.39 44.39 0 01-10.25 8.15 41.6 41.6 0 01-9.59-7.57A38.73 38.73 0 00362.66 0a10.67 10.67 0 00-.07 21.34z"></path><path d="M117.34 490.67H74.66A10.66 10.66 0 0064 501.33v64A10.66 10.66 0 0074.66 576h42.68A10.67 10.67 0 00128 565.33v-64a10.67 10.67 0 00-10.66-10.66zm-10.68 64H85.33V512h21.33zM202.67 490.67H160a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00160 576h42.67a10.67 10.67 0 0010.66-10.67v-64a10.67 10.67 0 00-10.66-10.66zm-10.67 64h-21.34V512H192zM288 490.67h-42.67a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00245.33 576H288a10.66 10.66 0 0010.66-10.67v-64A10.66 10.66 0 00288 490.67zm-10.67 64H256V512h21.33z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2003</div>
</div>

<div class="ml-8 sm:ml-16">Perseroan beroperasi dengan kapasitas <span class="font-bold">50.000</span> unit per bulan dan pembangunan Pabrik 1 seluas 3.000 m<sup>2</sup>.</div>
</li>
<li class="sm:py-8 lg:py-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M168 160h16v16h-16zM168 192h16v16h-16zM168 224h16v16h-16zM168 256h16v16h-16zM200 160h16v16h-16zM200 192h16v16h-16zM200 224h16v16h-16zM200 256h16v16h-16zM232 160h16v16h-16zM232 192h16v16h-16zM232 224h16v16h-16zM232 256h16v16h-16zM264 160h16v16h-16zM200 128h16v16h-16zM232 128h16v16h-16zM264 128h16v16h-16zM264 192h16v16h-16zM264 224h16v16h-16zM264 256h16v16h-16zM296 160h16v16h-16zM296 192h16v16h-16zM296 224h16v16h-16zM296 256h16v16h-16z"></path><path d="M472.009 120H352V8a7.995 7.995 0 00-7.991-8H136a7.995 7.995 0 00-8 7.991V120H8a7.995 7.995 0 00-8 7.991V416a7.995 7.995 0 007.991 8h16.732a48.008 48.008 0 00-.723 8v40a7.995 7.995 0 007.991 8H448a7.995 7.995 0 008-7.991V432a47.797 47.797 0 00-.723-8H472a7.995 7.995 0 008-7.991V128a7.995 7.995 0 00-7.991-8zM344 344c0 8.837-7.163 16-16 16s-16-7.163-16-16 7.163-16 16-16c8.832.011 15.989 7.168 16 16zm-192-16c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16c.011-8.832 7.168-15.989 16-16zm-48 136H40v-32c0-17.673 14.327-32 32-32s32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm49.212 29.425a48.225 48.225 0 00-10.064-7.449c12.202-12.784 11.731-33.04-1.053-45.243s-33.04-11.731-45.243 1.053c-11.803 12.365-11.803 31.824 0 44.189a48.31 48.31 0 00-18.358 18.024H16V136h112v187.056c-10.986 12.327-10.615 31.039.852 42.92a48.136 48.136 0 00-23.64 31.449zM184 464h-64v-56c0-17.673 14.327-32 32-32s32 14.327 32 32v56zm96 0h-80v-56c0-22.091 17.909-40 40-40s40 17.909 40 40v56zm-64-136c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24c-13.249-.014-23.986-10.751-24-24zm72.722 52.495a56.35 56.35 0 00-22.953-22.16c16.897-14.232 19.057-39.467 4.826-56.364-14.232-16.897-39.467-19.057-56.364-4.826-16.897 14.232-19.057 39.467-4.826 56.364a39.997 39.997 0 004.826 4.826 56.35 56.35 0 00-22.953 22.16 48.318 48.318 0 00-16.13-14.519c12.265-12.547 12.037-32.662-.511-44.927A31.77 31.77 0 00144 313.136V16h192v297.136a31.632 31.632 0 00-8-1.136c-17.626-.047-31.953 14.204-32 31.831a31.916 31.916 0 008.852 22.145 48.318 48.318 0 00-16.13 14.519zM360 432v32h-64v-56c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v24zm80 32h-64v-32c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm72 40h-14.494a48.31 48.31 0 00-18.358-18.024c12.202-12.784 11.731-33.04-1.053-45.243-12.784-12.202-33.04-11.731-45.243 1.053-11.803 12.365-11.803 31.824 0 44.189a48.199 48.199 0 00-10.064 7.449 48.133 48.133 0 00-23.64-31.449c11.467-11.881 11.839-30.593.853-42.92V136h112v272z"></path><path d="M376 184h16v128h-16zM424 184h16v128h-16zM40 184h16v128H40zM88 184h16v128H88zM288.009 32H192a7.995 7.995 0 00-8 7.991V104a7.995 7.995 0 007.991 8H288a7.995 7.995 0 008-7.991V40a7.995 7.995 0 00-7.991-8zM280 96h-80V48h80v48z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2002</div>
</div>

<div class="ml-8 sm:ml-16">PT Mark Dynamics Indonesia Tbk berdiri pada 10 April 2020.</div>
</li>
</ul>
</div>
</div>
',
            'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:pb-16 pt-32 lg:px-8">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">里程碑</h2>

<div class="animate__fadeInLeft animate__animated relative w-full sm:w-2/3 lg:w-2/3 mt-24 mx-auto">
<div class="border-r-2 border-gray-200 border-dotted absolute h-full top-0 z-10 left-2 sm:left-32 lg:left-60 sm:-ml-2">&nbsp;</div>

<ul class="list-none sm:ml-28 lg:ml-56 m-0 p-0 space-y-12">
<li>
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M168 160h16v16h-16zM168 192h16v16h-16zM168 224h16v16h-16zM168 256h16v16h-16zM200 160h16v16h-16zM200 192h16v16h-16zM200 224h16v16h-16zM200 256h16v16h-16zM232 160h16v16h-16zM232 192h16v16h-16zM232 224h16v16h-16zM232 256h16v16h-16zM264 160h16v16h-16zM200 128h16v16h-16zM232 128h16v16h-16zM264 128h16v16h-16zM264 192h16v16h-16zM264 224h16v16h-16zM264 256h16v16h-16zM296 160h16v16h-16zM296 192h16v16h-16zM296 224h16v16h-16zM296 256h16v16h-16z"></path><path d="M472.009 120H352V8a7.995 7.995 0 00-7.991-8H136a7.995 7.995 0 00-8 7.991V120H8a7.995 7.995 0 00-8 7.991V416a7.995 7.995 0 007.991 8h16.732a48.008 48.008 0 00-.723 8v40a7.995 7.995 0 007.991 8H448a7.995 7.995 0 008-7.991V432a47.797 47.797 0 00-.723-8H472a7.995 7.995 0 008-7.991V128a7.995 7.995 0 00-7.991-8zM344 344c0 8.837-7.163 16-16 16s-16-7.163-16-16 7.163-16 16-16c8.832.011 15.989 7.168 16 16zm-192-16c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16c.011-8.832 7.168-15.989 16-16zm-48 136H40v-32c0-17.673 14.327-32 32-32s32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm49.212 29.425a48.225 48.225 0 00-10.064-7.449c12.202-12.784 11.731-33.04-1.053-45.243s-33.04-11.731-45.243 1.053c-11.803 12.365-11.803 31.824 0 44.189a48.31 48.31 0 00-18.358 18.024H16V136h112v187.056c-10.986 12.327-10.615 31.039.852 42.92a48.136 48.136 0 00-23.64 31.449zM184 464h-64v-56c0-17.673 14.327-32 32-32s32 14.327 32 32v56zm96 0h-80v-56c0-22.091 17.909-40 40-40s40 17.909 40 40v56zm-64-136c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24c-13.249-.014-23.986-10.751-24-24zm72.722 52.495a56.35 56.35 0 00-22.953-22.16c16.897-14.232 19.057-39.467 4.826-56.364-14.232-16.897-39.467-19.057-56.364-4.826-16.897 14.232-19.057 39.467-4.826 56.364a39.997 39.997 0 004.826 4.826 56.35 56.35 0 00-22.953 22.16 48.318 48.318 0 00-16.13-14.519c12.265-12.547 12.037-32.662-.511-44.927A31.77 31.77 0 00144 313.136V16h192v297.136a31.632 31.632 0 00-8-1.136c-17.626-.047-31.953 14.204-32 31.831a31.916 31.916 0 008.852 22.145 48.318 48.318 0 00-16.13 14.519zM360 432v32h-64v-56c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v24zm80 32h-64v-32c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm72 40h-14.494a48.31 48.31 0 00-18.358-18.024c12.202-12.784 11.731-33.04-1.053-45.243-12.784-12.202-33.04-11.731-45.243 1.053-11.803 12.365-11.803 31.824 0 44.189a48.199 48.199 0 00-10.064 7.449 48.133 48.133 0 00-23.64-31.449c11.467-11.881 11.839-30.593.853-42.92V136h112v272z"></path><path d="M376 184h16v128h-16zM424 184h16v128h-16zM40 184h16v128H40zM88 184h16v128H88zM288.009 32H192a7.995 7.995 0 00-8 7.991V104a7.995 7.995 0 007.991 8H288a7.995 7.995 0 008-7.991V40a7.995 7.995 0 00-7.991-8zM280 96h-80V48h80v48z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2020</div>
</div>

<div class="ml-8 sm:ml-16">每月产能高达 <span class="font-bold">800,000</span> 件。<br />
收购 PT Berjaya Dynamics Indonesia。<br />
新工厂破土动工，每月产能为 <span class="font-bold">600,000</span> 件。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 640 640" xmlns="http://www.w3.org/2000/svg"><path d="M629.33 373.34h-32.72L576 74a10.69 10.69 0 00-10.67-10h-64a10.69 10.69 0 00-10.67 10L470 373.34h-22v-64a10.67 10.67 0 00-17.34-8.34l-89.33 71.46v-63.12A10.66 10.66 0 00324 301l-89.33 71.46v-63.12A10.67 10.67 0 00224 298.67a10.54 10.54 0 00-6.66 2.34L128 372.47v-63.13a10.66 10.66 0 00-16.16-9.14l-106.67 64A10.66 10.66 0 000 373.34v256A10.67 10.67 0 0010.67 640h618.66A10.67 10.67 0 00640 629.34V384a10.67 10.67 0 00-10.67-10.66zm-118-288h44.08l19.86 288h-83.85zM362.66 618.67v-128h64v128zm256 0H448V480a10.67 10.67 0 00-10.67-10.66H352A10.67 10.67 0 00341.33 480v138.67h-320v-239.3l85.33-51.19v66.49A10.67 10.67 0 00124 403l89.33-71.46v63.13a10.66 10.66 0 0017.33 8.33L320 331.54v63.13a10.66 10.66 0 0017.33 8.33l89.33-71.46V384a10.67 10.67 0 0010.67 10.67h181.33v224zM362.59 21.34a39.67 39.67 0 0110.37 8 37.34 37.34 0 0023.84 13.33 38.9 38.9 0 0025.13-13.87 50.28 50.28 0 019-7.46c2.2.1 7.95 5.48 11 8.37a35.73 35.73 0 0023.09 13A41.65 41.65 0 00491.86 28c2.61-2.45 6.57-6.17 7.34-6.63 5.72 0 7 1.9 10.56 7a27 27 0 0023.57 14.35 10.67 10.67 0 100-21.33c-2.13 0-2.55-.15-6-5.15A31.53 31.53 0 00499.2 0a34.27 34.27 0 00-21.95 12.42c-3.55 3.34-9.48 8.92-11.74 9a43.48 43.48 0 01-9-7.24A39.62 39.62 0 00430.93 0a37 37 0 00-23.59 13.19 44.39 44.39 0 01-10.25 8.15 41.6 41.6 0 01-9.59-7.57A38.73 38.73 0 00362.66 0a10.67 10.67 0 00-.07 21.34z"></path><path d="M117.34 490.67H74.66A10.66 10.66 0 0064 501.33v64A10.66 10.66 0 0074.66 576h42.68A10.67 10.67 0 00128 565.33v-64a10.67 10.67 0 00-10.66-10.66zm-10.68 64H85.33V512h21.33zM202.67 490.67H160a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00160 576h42.67a10.67 10.67 0 0010.66-10.67v-64a10.67 10.67 0 00-10.66-10.66zm-10.67 64h-21.34V512H192zM288 490.67h-42.67a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00245.33 576H288a10.66 10.66 0 0010.66-10.67v-64A10.66 10.66 0 00288 490.67zm-10.67 64H256V512h21.33z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2019</div>
</div>

<div class="ml-8 sm:ml-16">Jl. Utama, 大鲁村的新工厂落成典礼。每月生产能力高达 <span class="font-bold">610,000</span> 件。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M448 128H336c5.32-12.13 8-22.83 8-32a96 96 0 00-192 0c0 9.17 2.69 19.87 8 32H48a48.05 48.05 0 00-48 48v272a48.05 48.05 0 0048 48h400a48.05 48.05 0 0048-48V176a48.05 48.05 0 00-48-48zM248 16a80.09 80.09 0 0180 80c0 15.62-10.95 38.77-31.81 67.46l-.06.08q-4.81 6.61-10.32 13.61c-14.88 18.9-29.92 35.14-37.81 43.39-7.89-8.25-22.93-24.49-37.81-43.39q-5.52-7-10.32-13.61l-.06-.08C179 134.77 168 111.62 168 96a80.09 80.09 0 0180-80zm96 248h104v16H344a8 8 0 00-8 8v160h-16V288a8 8 0 00-8-8H152a8 8 0 00-8 8v160h-16V336a8 8 0 00-8-8H48v-16h72a8 8 0 008-8V176h16v80a8 8 0 008 8h160a8 8 0 008-8v-80h16v80a8 8 0 008 8zm8-16v-72h96v72zm96 48v152h-96V296zm-144 0v152H160V296zm-192 48v104H48V344zm-64-48V176h64v120zm112-48v-72h29.17q4.07 5.48 8.55 11.18a618.17 618.17 0 0044.64 50.5 8 8 0 0011.28 0 618.17 618.17 0 0044.64-50.5q3-3.75 5.72-7.4V248zm320 200a32 32 0 01-32 32H48a32 32 0 01-32-32V176a32 32 0 0132-32h120.08q4.33 7.68 9.84 16H40a8 8 0 00-8 8v288a8 8 0 008 8h416a8 8 0 008-8V168a8 8 0 00-8-8H318.08q5.51-8.31 9.84-16H448a32 32 0 0132 32z"></path><path d="M248 112a32 32 0 10-32-32 32 32 0 0032 32zm0-48a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2018</div>
</div>

<div class="ml-8 sm:ml-16">收购90, 000 m2土地。股票分割比列为1:5。每月生产能力高达 <span class="font-bold">540,000</span> 件。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M0 480h496v16H0zM32 192h8v32h16v-32h8a8 8 0 008-8V72a8 8 0 00-8-8h-8V32H40v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96H40zM112 272h8v32h16v-32h8a8 8 0 008-8V152a8 8 0 00-8-8h-8v-32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM192 160h8v32h16v-32h8a8 8 0 008-8V40a8 8 0 00-8-8h-8V0h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM272 336h8v32h16v-32h8a8 8 0 008-8V216a8 8 0 00-8-8h-8v-32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM352 160h8v32h16v-32h8a8 8 0 008-8V40a8 8 0 00-8-8h-8V0h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16zM432 192h8v32h16v-32h8a8 8 0 008-8V72a8 8 0 00-8-8h-8V32h-16v32h-8a8 8 0 00-8 8v112a8 8 0 008 8zm8-112h16v96h-16z"></path><path d="M32 448a32 32 0 0032-32c0-1-.21-1.94-.3-2.9l102-51a31.79 31.79 0 0051.51 1.41l43.05 36.89A31.63 31.63 0 00256 416a32 32 0 0064 0 31.43 31.43 0 00-.41-4l127.79-112.78a32.57 32.57 0 10-11.11-11.54l-123.18 108.7a31.49 31.49 0 00-41.82-7.53L223.6 348a32.71 32.71 0 00.4-4 32 32 0 00-64 0c0 1 .21 1.94.3 2.9l-102 51A32 32 0 1032 448zm432-192a16 16 0 11-16 16 16 16 0 0116-16zM304 416a16 16 0 11-16-16 16 16 0 0116 16zm-112-88a16 16 0 11-16 16 16 16 0 0116-16zM32 400a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2017</div>
</div>

<div class="ml-8 sm:ml-16">延长ISO 9001 并升级至 ISO 9001:2015。<br />
进行首次公开募股并将公司股票在 Indonesia Stock Exchange 上市交易。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M448 128H336c5.32-12.13 8-22.83 8-32a96 96 0 00-192 0c0 9.17 2.69 19.87 8 32H48a48.05 48.05 0 00-48 48v272a48.05 48.05 0 0048 48h400a48.05 48.05 0 0048-48V176a48.05 48.05 0 00-48-48zM248 16a80.09 80.09 0 0180 80c0 15.62-10.95 38.77-31.81 67.46l-.06.08q-4.81 6.61-10.32 13.61c-14.88 18.9-29.92 35.14-37.81 43.39-7.89-8.25-22.93-24.49-37.81-43.39q-5.52-7-10.32-13.61l-.06-.08C179 134.77 168 111.62 168 96a80.09 80.09 0 0180-80zm96 248h104v16H344a8 8 0 00-8 8v160h-16V288a8 8 0 00-8-8H152a8 8 0 00-8 8v160h-16V336a8 8 0 00-8-8H48v-16h72a8 8 0 008-8V176h16v80a8 8 0 008 8h160a8 8 0 008-8v-80h16v80a8 8 0 008 8zm8-16v-72h96v72zm96 48v152h-96V296zm-144 0v152H160V296zm-192 48v104H48V344zm-64-48V176h64v120zm112-48v-72h29.17q4.07 5.48 8.55 11.18a618.17 618.17 0 0044.64 50.5 8 8 0 0011.28 0 618.17 618.17 0 0044.64-50.5q3-3.75 5.72-7.4V248zm320 200a32 32 0 01-32 32H48a32 32 0 01-32-32V176a32 32 0 0132-32h120.08q4.33 7.68 9.84 16H40a8 8 0 00-8 8v288a8 8 0 008 8h416a8 8 0 008-8V168a8 8 0 00-8-8H318.08q5.51-8.31 9.84-16H448a32 32 0 0132 32z"></path><path d="M248 112a32 32 0 10-32-32 32 32 0 0032 32zm0-48a16 16 0 11-16 16 16 16 0 0116-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2016</div>
</div>

<div class="ml-8 sm:ml-16">收购 2,400 m<sup>2</sup>土地增加产能，并收购 30,000 m<sup>2</sup>土地用于未来扩张。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2014</div>
</div>

<div class="ml-8 sm:ml-16">每月生产能力再次升级至 <span class="font-bold">300, 000</span> 件。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2011</div>
</div>

<div class="ml-8 sm:ml-16">每月生产能力达到<span class="font-bold">220, 000</span> 件。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2009</div>
</div>

<div class="ml-8 sm:ml-16">月产能 <span class="font-bold">110,000</span> 件。延长ISO 9001并升级至ISO 9001:2008。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 494 460.37" xmlns="http://www.w3.org/2000/svg"><path d="M463.92 198.37H439a24.54 24.54 0 00-23.42-18H389v-65a6.87 6.87 0 00-3.35-6.07L198.08.94a7 7 0 00-7 0L3.48 109.28A7 7 0 000 115.37v216.66a7 7 0 003.5 6.06l187.65 108.34a7 7 0 003.5.94 7.33 7.33 0 003.6-.94L297 389.48v41.17a29.64 29.64 0 0029.56 29.72h137.36A29.81 29.81 0 00494 430.84V228.55a30.2 30.2 0 00-30.08-30.18zm-48.08-4A10.16 10.16 0 01426 204.53v.68a10.16 10.16 0 01-10.16 10.16h-40.68A10.16 10.16 0 01365 205.21v-.68a10.16 10.16 0 0110.16-10.16h40.68zM194.65 15.09l78 45L99 160.37l-78-45zM188 428.25L14 327.99V127.45l174 100.26zm6.65-212.66L113 168.44 286.63 68.19l81.67 47.18zm102.35 13v144.72l-95 54.94V227.71l173-100.26v52.92h.22a24.53 24.53 0 00-23.42 18h-24.91A30 30 0 00297 228.55zm183 202.1a15.79 15.79 0 01-15.87 15.68H326.89A15.63 15.63 0 01311 431.01V228.55a16 16 0 0115.86-16.18h25.21a24 24 0 0023.15 17h40.37a23.94 23.94 0 0023.14-17h25.19A16.19 16.19 0 01480 228.55z"></path><path d="M335 299.37h7.33a7 7 0 000-14H342v-19h19.31a6.74 6.74 0 006.65 4.73 7 7 0 007-7v-4.73a7.1 7.1 0 00-7.08-7H335a7 7 0 00-6.95 7v33a7 7 0 006.91 7zM335 363.37h33a7 7 0 007-7v-33a7 7 0 00-7-7h-33a7 7 0 00-7 7v33a7 7 0 007 7zm7-33h19v19h-19zM342.28 413.37H342v-19h18.93a7.035 7.035 0 0014.07 0v-6.74a7.3 7.3 0 00-7.08-7.27H335a7.19 7.19 0 00-6.95 7.27v33a6.76 6.76 0 006.75 6.76h7.53a7 7 0 000-14z"></path><path d="M384 260.96l-20.5 20.5-6.24-6.23a7 7 0 00-9.9 9.89l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM384 390.21l-20.5 20.5-6.24-6.24a7 7 0 00-9.9 9.9l11.19 11.19a7 7 0 009.9 0l25.45-25.45a7 7 0 10-9.9-9.9zM455.86 269.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 333.37h-44a7 7 0 000 14h44a7 7 0 000-14zM455.86 397.37h-44a7 7 0 000 14h44a7 7 0 000-14z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2008</div>
</div>

<div class="ml-8 sm:ml-16">总产量增加至每月 <span class="font-bold">80,000</span> 件。获得 ISO 9001:2000 质量管理体系认证。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg"><path d="M488 208h-80v-24a8 8 0 00-8-8 39.75 39.75 0 00-30.42 14.34 30.54 30.54 0 00-6.23-3l-16.41-5.48A16 16 0 01336 166.7V160h88a16 16 0 0016-16V16a16 16 0 00-16-16H200a16 16 0 00-16 16v128a16 16 0 0016 16h88v6.7a16 16 0 01-10.94 15.18l-16.41 5.47a30.12 30.12 0 00-19.5 20.65H144V72a8 8 0 00-8-8H40a8 8 0 00-8 8v136H8a8 8 0 00-8 8v272a8 8 0 008 8h32a8 8 0 008-8v-56h80v56a8 8 0 008 8h32a8 8 0 008-8V272h184v56H256a40 40 0 00-40 40v16a8 8 0 008 8h64v6.06A73.35 73.35 0 01268.47 448H256a24 24 0 000 48h112a24 24 0 000-48h-12.47A73.35 73.35 0 01336 398.06V392h48a24 24 0 0024-24v-96h40v216a8 8 0 008 8h32a8 8 0 008-8V216a8 8 0 00-8-8zM424 16v96H200V16zM200 128h224v16H200zm65.71 74.52l16.41-5.46A32 32 0 00304 166.7V160h16v6.7a32 32 0 0021.88 30.36l16.41 5.47a14 14 0 013.64 1.84 34.1 34.1 0 00-1.12 3.64H258.52a14.14 14.14 0 017.19-5.49zM128 160H48v-32h80zm0-80v32H48V80zm-80 96h80v32H48zM32 480H16V272h16zm96-208v64H48v-64zM48 416v-64h80v64zm112 64h-16V272h16zm8-224H16v-32h344v32zm208-40a24 24 0 0116-22.63V328h-16zm0 256a8 8 0 01-8 8H256a8 8 0 010-16h112a8 8 0 018 8zm-40.89-24h-46.22A89.36 89.36 0 00304 398.06V392h16v6.06A89.36 89.36 0 00335.11 448zM392 368a8 8 0 01-8 8H232v-8a24 24 0 0124-24h136zm16-144h72v32h-72zm72 256h-16V272h16z"></path><path d="M72 288h32v16H72zM72 368h32v16H72z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2007</div>
</div>

<div class="ml-8 sm:ml-16">在第二工厂设立了新的办公室和会议室。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M472.004 0H8a7.998 7.998 0 00-8 7.996V472a7.998 7.998 0 007.996 8H472a7.998 7.998 0 008-7.996V8a7.998 7.998 0 00-7.996-8zM464 464H16V16h144.272c2.771 53.713 33.4 88 79.728 88h16c30.928 0 56 25.072 56 56s-25.072 56-56 56h-24c-43.063 0-72 33.758-72 84 .052 46.37 37.63 83.948 84 84h220v80zm0-96H244c-37.537-.043-67.957-30.463-68-68 0-31.367 14.664-68 56-68h24c39.765 0 72-32.236 72-72 0-39.765-32.235-72-72-72h-16c-43.943 0-61.525-35.838-63.738-72H464v352z"></path><path d="M72 32c-22.091 0-40 17.909-40 40s17.909 40 40 40c22.081-.026 39.974-17.919 40-40 0-22.091-17.909-40-40-40zm0 64c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24c-.014 13.249-10.751 23.986-24 24zM271.156 172.422l-24-48a8.33 8.33 0 00-14.313 0l-24 48A8.001 8.001 0 00215.999 184h48a8 8 0 007.157-11.578zM228.945 168L240 145.887 251.055 168h-22.11zM296.004 272H248a7.998 7.998 0 00-8 7.996V328a7.998 7.998 0 007.996 8H296a7.998 7.998 0 008-7.996V280a7.998 7.998 0 00-7.996-8zM288 320h-32v-32h32v32zM424 232v-24h-16v24h-24v16h24v24h16v-24h24v-16zM431.156 68.422l-16-32A8.002 8.002 0 00408 32h-32c-3.03 0-5.8 1.712-7.156 4.422l-16 32a8.008 8.008 0 000 7.156l16 32A8.002 8.002 0 00376 112h32c3.03 0 5.8-1.712 7.156-4.422l16-32a8.008 8.008 0 000-7.156zM403.055 96h-22.109l-12-24 12-24h22.109l12 24-12 24zM32 152h32v16H32zM80 152h32v16H80zM128 152h32v16h-32zM144 184h16v32h-16zM128 232h32v16h-32zM96 232h16v32H96zM96 280h16v32H96zM96 328h16v32H96zM96 376h32v16H96zM194.912 397.656L183.6 386.344l-16.968 16.968-16.976-16.968-11.312 11.312 16.968 16.968-16.968 16.976 11.312 11.312 16.976-16.976 16.968 16.976 11.312-11.312-16.968-16.976zM432 408h16v16h-16zM400 408h16v16h-16zM368 408h16v16h-16zM336 408h16v16h-16zM304 408h16v16h-16zM272 408h16v16h-16zM240 408h16v16h-16zM208 408h16v16h-16z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2005</div>
</div>

<div class="ml-8 sm:ml-16">收购占地面积 3,500 m<sup>2</sup> 的土地，每月 <span class="font-bold">5,000</span> 件的额外产能。</div>
</li>
<li class="sm:pt-8 lg:pt-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 640 640" xmlns="http://www.w3.org/2000/svg"><path d="M629.33 373.34h-32.72L576 74a10.69 10.69 0 00-10.67-10h-64a10.69 10.69 0 00-10.67 10L470 373.34h-22v-64a10.67 10.67 0 00-17.34-8.34l-89.33 71.46v-63.12A10.66 10.66 0 00324 301l-89.33 71.46v-63.12A10.67 10.67 0 00224 298.67a10.54 10.54 0 00-6.66 2.34L128 372.47v-63.13a10.66 10.66 0 00-16.16-9.14l-106.67 64A10.66 10.66 0 000 373.34v256A10.67 10.67 0 0010.67 640h618.66A10.67 10.67 0 00640 629.34V384a10.67 10.67 0 00-10.67-10.66zm-118-288h44.08l19.86 288h-83.85zM362.66 618.67v-128h64v128zm256 0H448V480a10.67 10.67 0 00-10.67-10.66H352A10.67 10.67 0 00341.33 480v138.67h-320v-239.3l85.33-51.19v66.49A10.67 10.67 0 00124 403l89.33-71.46v63.13a10.66 10.66 0 0017.33 8.33L320 331.54v63.13a10.66 10.66 0 0017.33 8.33l89.33-71.46V384a10.67 10.67 0 0010.67 10.67h181.33v224zM362.59 21.34a39.67 39.67 0 0110.37 8 37.34 37.34 0 0023.84 13.33 38.9 38.9 0 0025.13-13.87 50.28 50.28 0 019-7.46c2.2.1 7.95 5.48 11 8.37a35.73 35.73 0 0023.09 13A41.65 41.65 0 00491.86 28c2.61-2.45 6.57-6.17 7.34-6.63 5.72 0 7 1.9 10.56 7a27 27 0 0023.57 14.35 10.67 10.67 0 100-21.33c-2.13 0-2.55-.15-6-5.15A31.53 31.53 0 00499.2 0a34.27 34.27 0 00-21.95 12.42c-3.55 3.34-9.48 8.92-11.74 9a43.48 43.48 0 01-9-7.24A39.62 39.62 0 00430.93 0a37 37 0 00-23.59 13.19 44.39 44.39 0 01-10.25 8.15 41.6 41.6 0 01-9.59-7.57A38.73 38.73 0 00362.66 0a10.67 10.67 0 00-.07 21.34z"></path><path d="M117.34 490.67H74.66A10.66 10.66 0 0064 501.33v64A10.66 10.66 0 0074.66 576h42.68A10.67 10.67 0 00128 565.33v-64a10.67 10.67 0 00-10.66-10.66zm-10.68 64H85.33V512h21.33zM202.67 490.67H160a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00160 576h42.67a10.67 10.67 0 0010.66-10.67v-64a10.67 10.67 0 00-10.66-10.66zm-10.67 64h-21.34V512H192zM288 490.67h-42.67a10.67 10.67 0 00-10.67 10.66v64A10.67 10.67 0 00245.33 576H288a10.66 10.66 0 0010.66-10.67v-64A10.66 10.66 0 00288 490.67zm-10.67 64H256V512h21.33z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2003</div>
</div>

<div class="ml-8 sm:ml-16">第一家工厂占地面积 3,000 m<sup>2</sup>，月产能<span class="font-bold">50, 000</span>件。</div>
</li>
<li class="sm:py-8 lg:py-16">
<div class="mb-4 sm:mb-0 sm:absolute"><svg class="h-36 xsm:h-40 sm:h-24 lg:h-36 lg:-mt-6 sm:-ml-28 lg:-ml-52" viewbox="0 0 480 480" xmlns="http://www.w3.org/2000/svg"><path d="M168 160h16v16h-16zM168 192h16v16h-16zM168 224h16v16h-16zM168 256h16v16h-16zM200 160h16v16h-16zM200 192h16v16h-16zM200 224h16v16h-16zM200 256h16v16h-16zM232 160h16v16h-16zM232 192h16v16h-16zM232 224h16v16h-16zM232 256h16v16h-16zM264 160h16v16h-16zM200 128h16v16h-16zM232 128h16v16h-16zM264 128h16v16h-16zM264 192h16v16h-16zM264 224h16v16h-16zM264 256h16v16h-16zM296 160h16v16h-16zM296 192h16v16h-16zM296 224h16v16h-16zM296 256h16v16h-16z"></path><path d="M472.009 120H352V8a7.995 7.995 0 00-7.991-8H136a7.995 7.995 0 00-8 7.991V120H8a7.995 7.995 0 00-8 7.991V416a7.995 7.995 0 007.991 8h16.732a48.008 48.008 0 00-.723 8v40a7.995 7.995 0 007.991 8H448a7.995 7.995 0 008-7.991V432a47.797 47.797 0 00-.723-8H472a7.995 7.995 0 008-7.991V128a7.995 7.995 0 00-7.991-8zM344 344c0 8.837-7.163 16-16 16s-16-7.163-16-16 7.163-16 16-16c8.832.011 15.989 7.168 16 16zm-192-16c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16c.011-8.832 7.168-15.989 16-16zm-48 136H40v-32c0-17.673 14.327-32 32-32s32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm49.212 29.425a48.225 48.225 0 00-10.064-7.449c12.202-12.784 11.731-33.04-1.053-45.243s-33.04-11.731-45.243 1.053c-11.803 12.365-11.803 31.824 0 44.189a48.31 48.31 0 00-18.358 18.024H16V136h112v187.056c-10.986 12.327-10.615 31.039.852 42.92a48.136 48.136 0 00-23.64 31.449zM184 464h-64v-56c0-17.673 14.327-32 32-32s32 14.327 32 32v56zm96 0h-80v-56c0-22.091 17.909-40 40-40s40 17.909 40 40v56zm-64-136c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24c-13.249-.014-23.986-10.751-24-24zm72.722 52.495a56.35 56.35 0 00-22.953-22.16c16.897-14.232 19.057-39.467 4.826-56.364-14.232-16.897-39.467-19.057-56.364-4.826-16.897 14.232-19.057 39.467-4.826 56.364a39.997 39.997 0 004.826 4.826 56.35 56.35 0 00-22.953 22.16 48.318 48.318 0 00-16.13-14.519c12.265-12.547 12.037-32.662-.511-44.927A31.77 31.77 0 00144 313.136V16h192v297.136a31.632 31.632 0 00-8-1.136c-17.626-.047-31.953 14.204-32 31.831a31.916 31.916 0 008.852 22.145 48.318 48.318 0 00-16.13 14.519zM360 432v32h-64v-56c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v24zm80 32h-64v-32c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32v32zm-48-96c0-8.837 7.163-16 16-16s16 7.163 16 16-7.163 16-16 16c-8.832-.011-15.989-7.168-16-16zm72 40h-14.494a48.31 48.31 0 00-18.358-18.024c12.202-12.784 11.731-33.04-1.053-45.243-12.784-12.202-33.04-11.731-45.243 1.053-11.803 12.365-11.803 31.824 0 44.189a48.199 48.199 0 00-10.064 7.449 48.133 48.133 0 00-23.64-31.449c11.467-11.881 11.839-30.593.853-42.92V136h112v272z"></path><path d="M376 184h16v128h-16zM424 184h16v128h-16zM40 184h16v128H40zM88 184h16v128H88zM288.009 32H192a7.995 7.995 0 00-8 7.991V104a7.995 7.995 0 007.991 8H288a7.995 7.995 0 008-7.991V40a7.995 7.995 0 00-7.991-8zM280 96h-80V48h80v48z"></path></svg></div>

<div class="flex items-center mb-1">
<div class="bg-mark-default rounded-full h-4 w-4 border-gray-200 border-2 z-10">&nbsp;</div>

<div class="flex-1 ml-4 sm:ml-12 font-bold text-2xl">2002</div>
</div>

<div class="ml-8 sm:ml-16">星河陶瓷公司成立。</div>
</li>
</ul>
</div>
</div>
',
            'created_at' => '2021-09-22 09:58:24',
            'updated_at' => '2021-09-28 06:29:46',
        ),
        5 => 
        array (
            'id' => 10,
            'menu' => 21,
            'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Organization Structure</h2>

<div class="mt-12 animate__fadeInUp animate__animated"><img class="mx-auto" src="../../img/Struktur-Perusahaan.png" /></div>
</div>
',
            'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Struktur Organisasi</h2>

<div class="mt-12 animate__fadeInUp animate__animated"><img class="mx-auto" src="../../img/Struktur-Perusahaan.png" /></div>
</div>
',
            'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">组织结构</h2>

<div class="mt-12 animate__fadeInUp animate__animated"><img class="mx-auto" src="../../img/Struktur-Perusahaan.png" /></div>
</div>
',
            'created_at' => '2021-09-22 11:19:06',
            'updated_at' => '2021-09-22 11:25:14',
        ),
        6 => 
        array (
            'id' => 11,
            'menu' => 22,
            'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">Audit Comittee</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Audit Comittee</p>

<div class="pt-24 mx-auto">
<div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/dompak-pasaribu.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Dompak Pasaribu</h1>

<p class="italic font-semibold text-mark-default">Independent Commissioner</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Indonesian</span> citizen, 46 years old residing in Medan. He was appointed as an Independent Commissioner of the Company based on the decision of the shareholders on 22 March 2017, in accordance with Notarial Deed No. 132 dated 22 March 2017.<br />
<br />
<span class="ml-12">A</span> holder of the Doctorate Degree in Accounting from the University of North Sumatra (USU) in 2018, a Masteral Degree of Accounting Science from the USU Faculty of Economics and Business in 2003 and a Bachelor of Economics in Accounting Study Program at the Faculty of Economics, Methodist University of Indonesia (UMI) in 1998. Having a Certified Public Accountant (CPA) from the Indonesian Institute of Certified Public Accountants in 2017. Active as a teaching staff in the Accounting Study Program of the Faculty of Economics and the Information Systems Study Program of the Faculty of Computer Science UMI. Dompak Pasaribu has served as Vice Dean II of Information Systems at the Faculty of Computer Science at UMI.<br />
<br />
<span class="ml-12">The</span> Secretary of the UMI Quality Assurance Agency in 2012-2016, was later appointed as the Chairperson of the UMI Quality Assurance Agency in 2016 until today. In addition, he also became the Chairperson of UMI Employee Cooperative Management Board since 2018. He served as a Branch Manager at PT. Etrading Securities in Medan from 2007 until 2013. Since 2015, he serves as the Audit Committee at PT. ATMINDO, Tbk.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/daulat-sihombing.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Daulat Sihombing</h1>

<p class="italic font-semibold text-mark-default">Members</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">An</span> Indonesian citizen, domiciled in Medan, 64 years old, holding a position as a member of the Audit Committee since March 22, 2017.<br />
<br />
<span class="ml-12">He</span> completed his education with a Bachelor&rsquo;s degree in Accounting from the Faculty of Economics, University of North Sumatra (USU) in 1984 and a Masteral degree in Accounting from Post Bachelor of University of North Sumatra (USU) in 2008.<br />
<br />
<span class="ml-12">In</span> addition to serving as a Member of the Audit Committee, he is also an Independent Commissioner of PT Atmindo Tbk (2015-present) and an Audit Committee of PT Toba Pulp Lestari Tbk (2008-present). Started his career in 1981 as an Internal Auditor at a Forwarding and Shipping Company in Medan. Then since 1984 as a permanent lecturer at the Methodist University of Indonesia in Medan, he has served as Assistant Dean I, II and III, then Dean and most recently as Deputy Chancellor II. Other positions that have been held include the President Director of PT Artha Siloam (1991-1995).</div>
</div>
</div>

<div class="grid grid-cols-1 gap-y-4 md:gap-4 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/septony-b-siahaan.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Septony B. Siahaan</h1>

<p class="italic font-semibold text-mark-default">Members</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">An</span> Indonesian citizen, domiciled in Medan, currently 48 years old and holding a position as a member of the Audit Committee since March 22, 2017.<br />
<br />
<span class="ml-12">He</span> completed his education with a Bachelor&rsquo;s degree in Accounting from the Faculty of Economics, University of North Sumatra, Medan in 1998 and a Masters in Accounting from the Post-Graduate University of North Sumatra Medan in 2008.<br />
<br />
<span class="ml-12">In</span> addition to serving as a Member of the Audit Committee, he has also been a teaching staff since 2007 at the Methodist University of Indonesia in Medan, after previously starting his career in 1996 as an Accounting Staff at PT Sinar Barat Persada in Medan. His career continued as an auditor at the Drs. Anggiat Sitohang and Partners, Jakarta in 2000, and Staff at the Indonesian Tax Consultant Services, Jakarta in 2002.<br />
<br />
<span class="ml-12">He</span> was also an auditor at PT Otehaes Dianeka Consultama, an affiliate of the Bismar, Salmon &amp; Partners Public Accounting Firm (2003 &ndash; 2007), and starting in 2005 became a Senior Staff at the Bina Mandiri Medan Tax Consultant Office.</div>
</div>
</div>
</div>
</div>
',
            'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">Komite Audit</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Komite Audit</p>

<div class="pt-24 mx-auto">
<div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/dompak-pasaribu.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Dompak Pasaribu</h1>

<p class="italic font-semibold text-mark-default">Komisaris Independen</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Warga</span> Negara Indonesia, 46 tahun bermukim di Medan. Beliau diangkat sebagai Komisaris Independen Perseroan berdasarkan keputusan pemegang saham pada tanggal 22 Maret 2017, sesuai dengan Akta Notaris No. 132 tanggal 22 Maret 2017.<br />
<br />
<span class="ml-12">Memiliki</span> Gelar Doktor Akuntansi dari Universitas Sumatera Utara (USU) pada tahun 2018, gelar Magister Ilmu Akuntansi dari Fakultas Ekonomi dan Bisnis USU pada tahun 2003 dan gelar Sarjana Ekonomi dalam Program Studi Akuntansi di Fakultas Ekonomi, Methodist University of Indonesia (UMI) pada tahun 1998. Memiliki Akuntan Publik Bersertifikat (BPA) dari Institut Akuntan Publik Bersertifikat Indonesia pada tahun 2017. Aktif sebagai staf pengajar di Program Studi Akuntansi Fakultas Ekonomi dan Program Studi Sistem Informasi Fakultas Ilmu Komputer UMI. Dompak Pasaribu pernah menjabat sebagai Wakil Dekan II Bidang Sistem Informasi di Fakultas Ilmu Komputer UMI.<br />
<br />
<span class="ml-12">Sekretaris</span> Badan Penjaminan Mutu UMI tahun 2012-2016, kemudian diangkat sebagai Ketua Badan Penjaminan Mutu UMI tahun 2016 hingga hari ini. Selain itu, ia juga menjadi Ketua Dewan Manajemen Koperasi Pegawai UMI sejak 2018. Beliau menjabat sebagai Branch Manager di PT. Etrading Securities di Medan dari tahun 2007 hingga 2013. Sejak 2015, beliau menjabat sebagai Komite Audit di PT. ATMINDO, Tbk.</div>
</div>
</div>

<div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/daulat-sihombing.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Daulat Sihombing</h1>

<p class="italic font-semibold text-mark-default">Anggota</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Seorang</span> warga negara Indonesia, yang berdomisili di Medan, 64 tahun, memegang jabatan sebagai anggota Komite Audit sejak 22 Maret 2017.<br />
<br />
<span class="ml-12">Beliau</span> menyelesaikan pendidikannya dengan gelar Sarjana Akuntansi dari Fakultas Ekonomi Universitas Sumatera Utara (USU) pada tahun 1984 dan gelar Masteral Akuntansi dari Post Bachelor of University of North Sumatra (USU) pada tahun 2008.<br />
<br />
<span class="ml-12">Selain</span> menjabat sebagai Anggota Komite Audit, beliau juga merupakan Komisaris Independen PT Atmindo Tbk (2015-sekarang) dan Komite Audit PT Toba Pulp Lestari Tbk (2008-sekarang). Memulai karirnya pada tahun 1981 sebagai Auditor Internal di Sebuah Perusahaan Penerusan dan Pelayaran di Medan. Kemudian sejak tahun 1984 sebagai dosen tetap di Universitas Methodist Indonesia di Medan, beliau menjabat sebagai Asisten Dekan I, II dan III, kemudian Dekan dan yang terbaru sebagai Wakil Rektor II. Jabatan lain yang pernah dijabat antara lain Direktur Utama PT Artha Siloam (1991-1995).</div>
</div>
</div>

<div class="grid grid-cols-1 gap-y-4 md:gap-4 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/septony-b-siahaan.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Septony B. Siahaan</h1>

<p class="italic font-semibold text-mark-default">Anggota</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">Seorang</span> warga negara Indonesia, yang berdomisili di Medan, saat ini berusia 48 tahun dan memegang jabatan sebagai anggota Komite Audit sejak 22 Maret 2017.<br />
<br />
<span class="ml-12">Beliau</span> menyelesaikan pendidikannya dengan gelar Sarjana Akuntansi dari Fakultas Ekonomi Universitas Sumatera Utara, Medan pada tahun 1998 dan magister Akuntansi dari Universitas Pasca Sarjana Sumatera Utara Medan pada tahun 2008.<br />
<br />
<span class="ml-12">Selain</span> menjabat sebagai Anggota Komite Audit, beliau juga telah menjadi staf pengajar sejak tahun 2007 di Universitas Methodist Indonesia di Medan, setelah sebelumnya memulai karirnya pada tahun 1996 sebagai Staf Akuntansi di PT Sinar Barat Persada di Medan. Karirnya berlanjut sebagai auditor di Drs. Anggiat Sitohang and Partners, Jakarta pada tahun 2000, dan Staf di Layanan Konsultan Pajak Indonesia, Jakarta pada tahun 2002.<br />
<br />
<span class="ml-12">Beliau</span> juga merupakan auditor di PT Otehaes Dianeka Consultama, afiliasi dari Bismar, Salmon &amp; Partners Public Accounting Firm (2003 &ndash; 2007), dan mulai tahun 2005 menjadi Staf Senior di Kantor Konsultan Pajak Bina Mandiri Medan.</div>
</div>
</div>
</div>
</div>
',
            'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">审计委员会</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">审计委员会</p>

<div class="pt-24 mx-auto">
<div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/dompak-pasaribu.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Dompak Pasaribu</h1>

<p class="italic font-semibold text-mark-default">Komisaris Independen</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一位</span> 46 岁的印度尼西亚人，居住于棉兰。在 2017 年 3 月 22 日，股东根据 2017 年 3 月 22 日的第 132 号公证契约选任他为独立委员。<br />
<br />
<span class="ml-12">他于</span> 2018 年获得北苏门答腊大学（USU）会计学博士学位，于2003 年获得USU经济与商业学院会计学硕士学位，并于1998 年获得印度尼西亚卫理公会大学 (UMI) 经济学院会计学经济学学士学位。2017 年获得印尼注册会计师协会的注册会计师（CPA）。他也是UMI 经济学院会计学习计划和计算机科学学院信息系统学习计划的教学人员。<br />
<br />
<span class="ml-12">Dompak Pasaribu</span> 曾担任 UMI 计算机 科学学院信息系统的二级副院长。2012 至 2016 年，他担任 UMI 的质量保证机构秘书。后来于 2016 年被任命为 UMI 质量保证机构主席，如今还继续任职。此外，他还自 2018 年起担任 UMI 员工合作管理委员会会长。2007 年至 2013 年，他在 PT. Etrading Securities 担任分公司经理。自 2015 年起，他在PT. ATMINDO, Tbk. 担任审计委员会。</div>
</div>
</div>

<div class="grid grid-cols-1 gap-y-4 md:gap-4 mb-24 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/daulat-sihombing.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Daulat Sihombing</h1>

<p class="italic font-semibold text-mark-default">成员</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">一</span>名居住于棉兰的 64 岁印度尼西亚人。自 2017 年 3 月 22 日起担任审计委员会成员。<br />
<br />
<span class="ml-12">他于</span> 1984 年在北苏门答腊大学（USU）经济学院获得会计学士学位，并于 2008 年在北苏门答腊大学（USU）获得会计学硕士学位。<br />
<br />
<span class="ml-12">除</span>了担任审计委员会成员外，他也是 PT Atmindo Tbk 的独立委员（2015 年至今）和 PT Toba Pulp Lestari Tbk 的审计委员会（2008 年至今）。他于 1981 年开始担任棉兰一家货运公司的内部审计员。自 1984 年以来，他一直担任棉兰印度尼西亚卫理公会大学的常任讲师，也担任过一、二、三级助理院长，然后是院长，而最近被任命为二级副院长。曾担任的其他职位包括 PT Artha Siloam 的董事长（1991 年至 1995 年）。</div>
</div>
</div>

<div class="grid grid-cols-1 gap-y-4 md:gap-4 md:grid-flow-col md:grid-cols-3">
<div class="col-span-1 md:row-span-3 "><img class="w-full mx-auto rounded-xl" src="../../img/septony-b-siahaan.png" /></div>

<div class="col-span-2">
<div class="col-span-1 mb-6 text-left md:ml-5 md:col-span-4">
<h1 class="text-2xl font-bold">Septony B. Siahaan</h1>

<p class="italic font-semibold text-mark-default">成员</p>
</div>

<div class="col-span-1 text-justify md:col-span-4 md:row-span-2 md:ml-5"><span class="ml-12">居</span>住于棉兰的 48 岁印度尼西亚人，自 2017 年 3 月 22 日起担任审计委员会成员。<br />
<br />
<span class="ml-12">他于</span> 1998 年在棉兰北苏门答腊大学经济学院获得会计学士学位，并于 2008 年在棉兰北苏门答腊大学获得会计硕士学位。<br />
<br />
<span class="ml-12">除</span>了担任审计委员会成员之外，自 2007 年起，他也担任了棉兰印度尼西亚卫理公会大学的教学人员。此前，他已于 1996 年在棉兰 PT Sinar Barat Persada 第一次担任了会计人员。他于 2000 年也曾在雅加达的 Drs. Anggiat Sihotang and Partners 担任审计师，并于 2002 年在雅加达的印尼税务咨询服务公司担任员工。<br />
<br />
<span class="ml-12">他</span>也曾在 PT Otehaes Dianeka Consultama，Bismar, Salmon &amp; Partners Public Accounting Firm 的附属公司担任审计员（2003 年至 2007 年）。2005 年起也成为了 Bina Mandiri Medan Tax Consultant Office 的高级职员。</div>
</div>
</div>
</div>
</div>
',
            'created_at' => '2021-09-22 11:24:35',
            'updated_at' => '2021-09-22 11:26:20',
        ),
        7 => 
        array (
            'id' => 12,
            'menu' => 23,
            'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Shareholders Information</h2>
<img alt="Mark Dynamics Shareholders" class="mt-12 lg:mt-24" src="../../img/shareholders.png" />
<div class="pt-12 lg:pt-24 space-y-12 text-left lg:space-y-24">
<div class="space-y-3">
<div class="font-bold lg:text-base sm:text-sm text-xs">Controlling Shareholders Composition of Mark as of 31 December 2020</div>
<img alt="Mark Dynamics Shareholders" src="../../img/shareholders-table-1-eng.png" /></div>

<div class="space-y-3">
<div class="font-bold lg:text-base sm:text-sm text-xs">Board Members Share Ownership as of 31 December 2020</div>
<img alt="Mark Dynamics Shareholders" src="../../img/shareholders-table-2-eng.png" /></div>
</div>
</div>
',
            'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Informasi Pemegang Saham</h2>
<img alt="Mark Dynamics Shareholders" class="mt-12 lg:mt-24" src="../../img/shareholders.png" />
<div class="pt-12 lg:pt-24 space-y-12 text-left lg:space-y-24">
<div class="space-y-3">
<div class="font-bold lg:text-base sm:text-sm text-xs">Komposisi Pemegang Saham Pengendali Mark per 31 Desember 2020</div>
<img alt="Mark Dynamics Shareholders" src="../../img/shareholders-table-1.png" /></div>

<div class="space-y-3">
<div class="font-bold lg:text-base sm:text-sm text-xs">Komposisi Pemegang Saham oleh Dewan Komisaris dan Direksi Per 31 Desember 2020</div>
<img alt="Mark Dynamics Shareholders" src="../../img/shareholders-table-2.png" /></div>
</div>
</div>
',
            'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">关于股东的信息</h2>
<img alt="Mark Dynamics Shareholders" class="mt-12 lg:mt-24" src="../../img/shareholders-cn.png" />
<div class="pt-12 lg:pt-24 space-y-12 text-left lg:space-y-24">
<div class="space-y-3">
<div class="font-bold lg:text-base sm:text-sm text-xs">2020 年 12 月 31 日公司控股股东构成</div>
<img alt="Mark Dynamics Shareholders" src="../../img/shareholders-table-1-cn.png" /></div>

<div class="space-y-3">
<div class="font-bold lg:text-base sm:text-sm text-xs">2020 年 12 月 31 日委员会和董事股东构成</div>
<img alt="Mark Dynamics Shareholders" src="../../img/shareholders-table-2-cn.png" /></div>
</div>
</div>
',
            'created_at' => '2021-09-22 14:33:15',
            'updated_at' => '2021-09-22 14:33:15',
        ),
        8 => 
        array (
            'id' => 13,
            'menu' => 24,
            'content_en' => '<div class="px-4 pt-32 pb-12 mx-auto text-center max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
<div class="animate__fadeInDown animate__animated text-2xl font-bold text-mark-default lg:text-4xl">
<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">Financial Highlight</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Operational Performance</p>
</div>

<div class="grid pt-12 sm:pt-24 md:pt-12 grid-cols-1 md:grid-cols-2 gap-12 sm:gap-24 md:gap-6 items-center justify-center">
<div class="sm:px-24 md:p-12"><img alt="Mark Dynamics Financial Highlight" class="w-full h-full" src="../../img/graphic-1-en.png" /></div>

<div class="sm:px-12 md:p-6"><img alt="Mark Dynamics Financial Highlight" class="w-full h-full" src="../../img/graphic-2-en.png" /></div>
</div>

<div class="pt-12 mb-5 text-2xl font-bold text-mark-default lg:pt-24 lg:text-4xl">
<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">Financial Highlight</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Balance Sheet</p>
</div>

<div class="w-full pt-12 sm:pt-24 md:pt-12 pb-12 sm:pb-0 md:h-screen sm:p-10 md:p-20"><img alt="Mark Dynamics Financial Highlight" class="md:h-full mx-auto" src="../../img/graphic-3-en.png" /></div>
</div>
',
            'content_id' => '<div class="px-4 pt-32 pb-12 mx-auto text-center max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
<div class="animate__fadeInDown animate__animated text-2xl font-bold text-mark-default lg:text-4xl">
<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">Sorotan Keuangan</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Kinerja Operasional</p>
</div>

<div class="grid pt-12 sm:pt-24 md:pt-12 grid-cols-1 md:grid-cols-2 gap-12 sm:gap-24 md:gap-6 items-center justify-center">
<div class="sm:px-24 md:p-12"><img alt="Mark Dynamics Financial Highlight" class="w-full h-full" src="../../img/graphic-1.png" /></div>

<div class="sm:px-12 md:p-6"><img alt="Mark Dynamics Financial Highlight" class="w-full h-full" src="../../img/graphic-2.png" /></div>
</div>

<div class="pt-12 mb-5 text-2xl font-bold text-mark-default lg:pt-24 lg:text-4xl">
<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">Sorotan Keuangan</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Neraca</p>
</div>

<div class="w-full pt-12 sm:pt-24 md:pt-12 pb-12 sm:pb-0 md:h-screen sm:p-10 md:p-20"><img alt="Mark Dynamics Financial Highlight" class="md:h-full mx-auto" src="../../img/graphic-3.png" /></div>
</div>
',
            'content_cn' => '<div class="px-4 pt-32 pb-12 mx-auto text-center max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
<div class="animate__fadeInDown animate__animated text-2xl font-bold text-mark-default lg:text-4xl">
<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">财务亮点</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">经营业绩</p>
</div>

<div class="grid pt-12 sm:pt-24 md:pt-12 grid-cols-1 md:grid-cols-2 gap-12 sm:gap-24 md:gap-6 items-center justify-center">
<div class="sm:px-24 md:p-12"><img alt="Mark Dynamics Financial Highlight" class="w-full h-full" src="../../img/graphic-1-cn.png" /></div>

<div class="sm:px-12 md:p-6"><img alt="Mark Dynamics Financial Highlight" class="w-full h-full" src="../../img/graphic-2-cn.png" /></div>
</div>

<div class="pt-12 mb-5 text-2xl font-bold text-mark-default lg:pt-24 lg:text-4xl">
<h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">财务亮点</h2>

<p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">资产负债表</p>
</div>

<div class="w-full pt-12 sm:pt-24 md:pt-12 pb-12 sm:pb-0 md:h-screen sm:p-10 md:p-20"><img alt="Mark Dynamics Financial Highlight" class="md:h-full mx-auto" src="../../img/graphic-3-cn.png" /></div>
</div>
',
            'created_at' => '2021-09-22 15:25:32',
            'updated_at' => '2021-09-22 15:25:32',
        ),
        9 => 
        array (
            'id' => 14,
            'menu' => 26,
            'content_en' => '<div class="flex items-center justify-center max-w-7xl mx-auto my-auto h-screen pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<div>
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">Prospectus</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Prospectus</p>

<p class="animate__fadeInDown animate__animated mx-auto mt-5 text-xl text-gray-500 max-w-prose">PT. Mark Dynamics Indonesia Tbk is listed in Indonesia Stock Exchange with ticker code of MARK. Please click on the following link to download.</p>

<div class="inline-block px-5 py-2 font-semibold text-white rounded-sm mt-12 cursor-pointer bg-mark-default hover:bg-mark-dark"><a class="animate__fadeInUp animate__animated flex justify-center" download="" href="../prospektus-pt-mdi-2017.pdf">Prospectus</a></div>
</div>
</div>
',
            'content_id' => '<div class="flex items-center justify-center max-w-7xl mx-auto my-auto h-screen pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<div>
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">Prospektus</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Prospektus</p>

<p class="animate__fadeInDown animate__animated mx-auto mt-5 text-xl text-gray-500 max-w-prose">Saham PT. Mark Dynamics Indonesia Tbk telah dicatatkan pada Bursa Efek Indonesia dengan kode saham MARK. Silakan klik pada tautan berikut untuk mengunduh</p>

<div class="inline-block px-5 py-2 font-semibold mt-12 text-white rounded-sm cursor-pointer bg-mark-default hover:bg-mark-dark"><a class="animate__fadeInUp animate__animated flex justify-center" download="" href="../prospektus-pt-mdi-2017.pdf">Prospektus</a></div>
</div>
</div>
',
            'content_cn' => '<div class="flex items-center justify-center max-w-7xl mx-auto my-auto h-screen pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<div>
<h2 class="animate__fadeInDown animate__animated text-base font-semibold tracking-wider uppercase text-mark-default">招股说明书</h2>

<p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">招股说明书</p>

<p class="animate__fadeInDown animate__animated mx-auto mt-5 text-xl text-gray-500 max-w-prose">Mark Dynamics Indonesia Tbk 有限公司在印度尼西亚证券交易所上市，股票代码为 MARK。 请点击以下链接下载。</p>

<div class="inline-block px-5 py-2 font-semibold mt-12 text-white rounded-sm cursor-pointer bg-mark-default hover:bg-mark-dark"><a class="animate__fadeInUp animate__animated flex justify-center" download="" href="../prospektus-pt-mdi-2017.pdf">招股说明书</a></div>
</div>
</div>
',
            'created_at' => '2021-09-22 15:59:51',
            'updated_at' => '2021-09-22 16:06:39',
        ),
        10 => 
        array (
            'id' => 15,
            'menu' => 27,
            'content_en' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Dividend Information</h2>

<div class="w-full mt-12 lg:mt-24"><img alt="Mark Dynamics Dividend Information" class="w-full" src="../../img/deviden-eng.png" /></div>
</div>
',
            'content_id' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">Informasi Dividen</h2>

<div class="w-full mt-12 lg:mt-24"><img alt="Mark Dynamics Dividend Information" class="w-full" src="../../img/deviden.png" /></div>
</div>
',
            'content_cn' => '<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 pt-32 lg:pb-16 lg:px-8 text-center">
<h2 class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">股利信息</h2>

<div class="w-full mt-12 lg:mt-24"><img alt="Mark Dynamics Dividend Information" class="w-full" src="../../img/deviden-cn.png" /></div>
</div>
',
            'created_at' => '2021-09-22 16:09:47',
            'updated_at' => '2021-09-22 16:09:47',
        ),
    ));
        
        
    }
}