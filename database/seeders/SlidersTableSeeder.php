<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title_id' => 'Produsen Cetakan Sarung Tangan Terkemuka di Dunia',
                'title_en' => 'World’s Leading Hand-Former Manufacturer',
                'title_cn' => '世界领先手套模具制造商',
                'description_id' => 'Melayani 40% pangsa pasar global, kami telah berperan besar dalam membantu industri sarung tangan.',
                'description_en' => 'Serving 40% of global market share, we have been a big player in helping the gloves industry.',
                'description_cn' => '占据全球 40% 市场份额，在手套行业方面具有重要作用。',
                'button_id' => 'Bisnis',
                'button_en' => 'Our Business',
                'button_cn' => '业务',
                'button1_id' => '',
                'button1_en' => '',
                'button1_cn' => '',
                'url' => 'https://markdynamicsindo.com/our-business',
                'url1' => '',
                'imgwidth' => 'full',
                'file' => 'img/slider-1.jpg',
                'created_at' => '2021-09-22 09:16:07',
                'updated_at' => '2021-09-23 09:49:53',
                'active' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'title_id' => 'Esa Hilang Dua Terbilang.',
                'title_en' => 'A great oak was once a nut.',
                'title_cn' => '宝剑锋从磨砺出, 梅花香自苦寒来',
                'description_id' => 'Kami memulai perjalanan ini sebagai perusahaan yang hampir tidak dikenal oleh siapapun. Kami terus berusaha untuk maju dan hanya fokus untuk memproduksi produk dengan kualitas tertinggi kepada pelanggan kami. Di sisi lain, kami juga selalu membawa senyuman kepada seluruh pemegang saham kami karena kinerja bisnis kami yang sangat efisien.',
                'description_en' => 'Our journey started from a barely recognized company. We keep pushing ourselves to produce only the highest quality products for our customers. On the other hand, we always draw a smile on our shareholders’ faces as our business runs very efficiently.',
                'description_cn' => '我们初次只是一家毫无名气的公司。不过，我们不断推动自己以优质产品服务顾客。 另外，我们的业务运行的非常高效。',
                'button_id' => 'Visi dan Misi',
                'button_en' => 'Vision & Mission',
                'button_cn' => '愿景和使命',
                'button1_id' => 'Pesan Presiden Direktur',
                'button1_en' => 'CEO Message',
                'button1_cn' => '总裁致辞',
                'url' => 'https://markdynamicsindo.com/vision-mission',
                'url1' => 'https://markdynamicsindo.com/about/ceo-message',
                'imgwidth' => 'half',
                'file' => 'img/slider-2e.png',
                'created_at' => '2021-09-22 09:16:07',
                'updated_at' => '2021-09-23 09:55:34',
                'active' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'title_id' => 'Pertumbuhan Fundamental Yang Pesat',
                'title_en' => 'Rapidly Growing Fundamentals',
                'title_cn' => '快速增长',
                'description_id' => 'Setelah IPO, kinerja operasional kami bertumbuh sangat pesat dan disertai dengan posisi neraca yang kuat.',
                'description_en' => 'After going public, we can see a rapid growth in our financials, accompanied by a solid balance sheet.',
                'description_cn' => '上市后，我们的财务状况持续改善，资产负债表也基本稳定。',
                'button_id' => 'Sorotan Keuangan',
                'button_en' => 'Financial Highlight',
                'button_cn' => '财务亮点 ',
                'button1_id' => '',
                'button1_en' => '',
                'button1_cn' => '',
                'url' => 'https://markdynamicsindo.com/financial-highlight',
                'url1' => '',
                'imgwidth' => 'half',
                'file' => 'img/slider-3.jpg',
                'created_at' => '2021-09-22 09:16:07',
                'updated_at' => '2021-09-24 08:39:36',
                'active' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'title_id' => 'Penghargaan',
                'title_en' => 'Awards',
                'title_cn' => '里程碑',
                'description_id' => 'Kinerja apik kami telah menghadiahkan kami beragam piagam dan penghargaan yang bergengsi.',
                'description_en' => 'Our excellent performance has brought us numerous prestigious recognition and awards.',
                'description_cn' => '我们的卓越表现给我们带来了无数奖项和认可。',
                'button_id' => 'Piagam & Penghargaan',
                'button_en' => 'Awards',
                'button_cn' => '奖项',
                'button1_id' => '',
                'button1_en' => '',
                'button1_cn' => '',
                'url' => 'https://markdynamicsindo.com/about-us/awards',
                'url1' => '',
                'imgwidth' => 'full',
                'file' => 'img/slider-4.jpg',
                'created_at' => '2021-09-22 09:16:07',
                'updated_at' => '2021-09-24 08:43:43',
                'active' => 1,
            ),
        ));


    }
}
