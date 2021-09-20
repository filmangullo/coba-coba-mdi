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
        ));
        
        
    }
}