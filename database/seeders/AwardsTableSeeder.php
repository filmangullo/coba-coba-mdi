<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AwardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('awards')->delete();

        \DB::table('awards')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title_id' => 'Hartalega, Malaysia ',
                'title_en' => 'Hartalega, Malaysia',
                'title_cn' => '',
                'description_id' => 'Perseroan mendapatkan apresiasi dari pelanggan Malaysia, Hartalega atas dukungan dan kerjasama baik selama bertahun-tahun.',
                'description_en' => 'Mark Dynamics has received appreciation from Malaysia customer, Hartalega for the support and good cooperation over the years',
                'description_cn' => '',
                'year' => 2013,
                'img' => 'img/award/01.jpg',
                'created_at' => '2021-08-01 05:17:25',
                'updated_at' => '2021-08-08 07:05:12',
            ),
            1 =>
            array (
                'id' => 2,
                'title_id' => 'Certificate From Sekolah Jenis Kebangsaan Cina Tai Thung, Salak Selatan',
                'title_en' => 'Certificate From Sekolah Jenis Kebangsaan Cina Tai Thung, Salak Selatan',
                'title_cn' => '',
                'description_id' => 'Sekolah Jenis Kebangsaan Cina Tai Thung, Salak Selatan memberikan sertifikat apresiasi atas bantuan dari perseroan untuk pembangunan kantin, kantor dan ruangan kelas.',
                'description_en' => 'Sekolah Jenis Kebangsaan Cina Tai Thung, Salak Selatan gave a certificate of appreciation for the support from the company for the construction of canteens, offices and classrooms.',
                'description_cn' => '',
                'year' => 2014,
                'img' => 'img/award/03.jpg',
                'created_at' => '2021-08-01 05:17:25',
                'updated_at' => '2021-08-08 07:17:18',
            ),
            2 =>
            array (
                'id' => 3,
                'title_id' => 'Zero Accident Award',
                'title_en' => 'Zero Accident Award',
                'title_cn' => '',
                'description_id' => 'Menteri Tenaga Kerja dan Transmigrasi Republik Indonesia, Drs. H.A. Muhaimin Iskandar, M.Si memberikan sertifikat Penghargaan Kecelakaan Nihil (Zero Accident Award) dalam periode 1 Januari 2011 – 31 Desember 2013.',
                'description_en' => 'The Minister of Manpower and Transmigration of the Republic of Indonesia, Drs. HA. Muhaimin Iskandar, M.Si gave a Zero Accident Award certificate for the period January 1, 2011 – December 31, 2013',
                'description_cn' => '',
                'year' => 2013,
                'img' => 'img/award/02.jpg',
                'created_at' => '2021-08-01 05:17:25',
                'updated_at' => '2021-08-08 07:14:51',
            ),
            3 =>
            array (
                'id' => 4,
                'title_id' => 'Penghargaan Wanita Buddhis Indonesia',
                'title_en' => 'Penghargaan Wanita Buddhis Indonesia',
                'title_cn' => '',
                'description_id' => 'Wanita Buddhis Indonesia Provinsi Sumatera Utara memberikan sertifikat penghargaan atas dukungan dari perseroan untuk acara Musyawarah Daerah Wanita Buddhis Indonesia Provinsi Sumatera Utara tanggal 16 Mei  2015.',
                'description_en' => 'Indonesian Buddhist Women in North Sumatra Province gave a certificate of appreciation for the support from the company for the Regional Conference of Indonesian Buddhist Women in North Sumatra Province on May 16, 2015.',
                'description_cn' => '',
                'year' => 2015,
                'img' => 'img/award/04.jpg',
                'created_at' => '2021-08-01 05:17:25',
                'updated_at' => '2021-08-08 07:19:20',
            ),
            4 =>
            array (
                'id' => 5,
                'title_id' => 'Certificate of Malaysia Rubber Glove Manufacture Association',
                'title_en' => 'Certificate of Malaysia Rubber Glove Manufacture Association',
                'title_cn' => '',
                'description_id' => 'Perseroan mendapatkan sertifikat atas keanggotaan asosiasi (MARGMA) Malaysia Rubber Glove Manufacture Association.',
                'description_en' => 'Mark Dynamics has received a certificate for membership of (MARGMA) Malaysia Rubber Glove Manufacture Association.',
                'description_cn' => '',
                'year' => 2016,
                'img' => 'img/award/05.jpg',
                'created_at' => '2021-08-08 07:08:43',
                'updated_at' => '2021-08-08 07:08:43',
            ),
            5 =>
            array (
                'id' => 6,
                'title_id' => 'Halyard, Safeskin, Thailand',
                'title_en' => 'Halyard, Safeskin, Thailand',
                'title_cn' => '',
                'description_id' => 'Perseroan mendapatkan apresiasi dari pelanggan Thailand, Halyard atas dukungan dan kerjasama baik selama bertahun-tahun.',
                'description_en' => 'Mark Dynamics has received appreciation from Thailand customer, Halyard for the support and good cooperation over the years',
                'description_cn' => '',
                'year' => 2016,
                'img' => 'img/award/06.jpg',
                'created_at' => '2021-08-08 07:22:40',
                'updated_at' => '2021-08-08 07:22:40',
            ),
            6 =>
            array (
                'id' => 7,
                'title_id' => 'Quality Management Systems ISO 9001:2015',
                'title_en' => 'Quality Management Systems ISO 9001:2015',
                'title_cn' => '',
                'description_id' => 'Perusahaan telah mendapatkan sertifikat persetujuan penerapan sistem manajemen mutu ISO 9001:2015 pada pembuatan produk keramik.',
                'description_en' => 'Mark Dynamics has received a certificate of approval for ISO 9001:2015 quality management systems implementation at the manufacture of ceramic products.',
                'description_cn' => '',
                'year' => 2017,
                'img' => 'img/award/07.png',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            7 =>
            array (
                'id' => 8,
            'title_id' => 'Kantor Pajak Pratama (KPP) Lubuk Pakam ',
            'title_en' => 'Kantor Pajak Pratama (KPP) Lubuk Pakam ',
            'title_cn' => '',
            'description_id' => 'Perseroan mendapatkan apresiasi dari Kantor Pajak Pratama (KPP) Lubuk Pakam atas dedikasi dan peranan baik sebagai bagian dari pengamanan penerimaan tahun 2018.',
                'description_en' => 'Mark Dynamics has received appreciation from Lubuk Pakam Tax Office for the dedication and good role as part of securing 2018 revenue.',
                'description_cn' => '',
                'year' => 2018,
                'img' => 'img/award/08.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            8 =>
            array (
                'id' => 9,
                'title_id' => 'Bisnis Indonesia Award',
                'title_en' => 'Bisnis Indonesia Award',
                'title_cn' => '印度尼西亚商业奖',
                'description_id' => 'Perseroan terpilih sebagai emiten dengan kinerja terbaik dari sektor industri dasar dan kimia dalam ajang tahunan Bisnis Indonesia Award 2019.',
                'description_en' => 'Mark Dynamics was crowned with this prestigious award as the best performing listed company within the Basic Chemicals sector in the annual event of Bisnis Indonesia Award 2019.',
                'description_cn' => '在基础化学工业领域中，星河陶瓷被视为表现最佳的上市公司。因而于2019年，本公司获得了Bisnis Indonesia Award 年度盛会的一名奖项。',
                'year' => 2019,
                'img' => 'img/award/09.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            9 =>
            array (
                'id' => 10,
                'title_id' => 'CSA Award 2019',
                'title_en' => 'CSA Award 2019',
            'title_cn' => '2019 年 CSA 奖',
            'description_id' => 'Perseroan terpilih sebagai emiten dengan kinerja terbaik hasil kerjasama antara Asosiasi Analis Efek Indonesia (AAEI) dan CSA Research dalam ajang CSA Award 2019.',
            'description_en' => 'Mark Dynamics’ outstanding performance was acknowledged through CSA Award 2019 by the Security Analysts Association of Indonesia (AAEI) and CSA Research as the best performing listed company.',
            'description_cn' => '-星河陶瓷被印度尼西亚证券分析师学会（Asosiasi Analis Efek Indonesia）认为表现最佳的上市公司，因而获得了2019 年 CSA 奖。',
            'year' => 2019,
                'img' => 'img/award/10.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            10 =>
            array (
                'id' => 11,
                'title_id' => 'IDX Channel Award 2019',
                'title_en' => 'IDX Channel Award 2019',
            'title_cn' => '2019 年 IDX Channel FOT Award',
            'description_id' => 'Perseroan memperoleh ‘The Best Rookie Company (Start Up)’ dalam IDX Channel Innovation Award 2019',
            'description_en' => 'Mark Dynamics was recognized for The Best Rookie Company (Start Up) in the event of IDX Channel Innovation Award 2019',
            'description_cn' => '2019 年，公司在 IDX Channel Innovation Award 获得了最佳新创公司奖项（The Best Rookie Company (Start Up) ）。',
            'year' => 2019,
                'img' => 'img/award/11.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            11 =>
            array (
                'id' => 12,
                'title_id' => 'Galeri Investasi & KSPM Universitas Methodis Indonesia 2019',
                'title_en' => 'Galeri Investasi & KSPM Universitas Methodis Indonesia',
                'title_cn' => '2019年投资廊·印度尼西亚卫理公会大学资本市场研究社会奖项',
                'description_id' => 'Perseroan mendapat ucapan terima kasih dari Galeri Investasi & KSPM Universitas Methodist Indonesia  atas dukungan dan sumbangan pada Perayaan Natal dan Kunjungan ke Panti Jompo pada Desember 2019.
                Mark Dynamics was honored with a gratitude award by Investment Gallery & KSPM of Methodist University of Indonesia through the support and donation to Methodist University of Indonesia Christmas celebration and a visit to a nursing home in December 2019.',
                'description_en' => 'Mark Dynamics was honored with a gratitude award by Investment Gallery & KSPM of Methodist University of Indonesia through the support and donation to Methodist University of Indonesia Christmas celebration and a visit to a nursing home in December 2019.',
                'description_cn' => '由于公司支持并捐助印度尼西亚卫理公会大学的圣诞节庆祝活动和探望养老院活动，公司获得了2019 年投资廊·印度尼西亚卫理公会大学资本市场研究社会的感恩奖。',
                'year' => 2019,
                'img' => 'img/award/12.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            12 =>
            array (
                'id' => 13,
                'title_id' => 'Galeri Investasi & KSPM Universitas Methodis Indonesia 2020',
                'title_en' => 'Galeri Investasi & KSPM Universitas Methodis Indonesia',
                'title_cn' => '2020年投资廊·印度尼西亚卫理公会大学资本市场研究社会奖项',
                'description_id' => 'Penghargaan atas Partisipasi dari Galeri Investasi & KSPM Universitas Methodist Indonesia dalam Acara Webinar dan Donasi pada Bakti Sosial Natal Tahun 2020
                Mark Dynamics was honored with an appreciation award by Investment Gallery & KSPM of Methodist University of Indonesia for being a participant and donator in the event of Christmas social service 2020',
                'description_en' => 'Mark Dynamics was honored with an appreciation award by Investment Gallery & KSPM of Methodist University of Indonesia for being a participant and donator in the event of Christmas social service 2020.',
                'description_cn' => '本公司于 2020 年作为圣诞节社会服务活动的参与者和捐赠者，因此荣获了投资廊·印度尼西亚卫理公会大学资本市场研究社会的感恩奖。',
                'year' => 2020,
                'img' => 'img/award/14.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            13 =>
            array (
                'id' => 14,
            'title_id' => 'Quality Management Systems ISO 9001:2015 (2020)',
            'title_en' => 'Quality Management Systems ISO 9001:2015 (2020)',
            'title_cn' => '',
            'description_id' => 'Perusahaan telah mendapatkan perpanjangan sertifikat persetujuan penerapan sistem manajemen mutu ISO 9001:2015 pada pembuatan produk keramik sampai tahun 2023',
                'description_en' => 'Mark Dynamics has received a renewal certificate of approval for ISO 9001:2015 quality management systems implementation at the manufacture of ceramic products valid until 2023',
                'description_cn' => '',
                'year' => 2020,
                'img' => 'img/award/13.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            14 =>
            array (
                'id' => 15,
                'title_id' => 'Kenang-Kenangan dari Fakultas Ekonomi Bisnis Universitas Harapan Medan',
                'title_en' => 'Kenang-Kenangan dari Fakultas Ekonomi Bisnis Universitas Harapan Medan',
                'title_cn' => '-棉兰哈拉潘大学商业经济学院赠送纪念品',
                'description_id' => 'Kenang-Kenangan dari Fakultas Ekonomi Bisnis Universitas Harapan Medan.',
                'description_en' => 'Honorable souvenirs from the Economy-Business Faculty of Harapan University of Medan.',
                'description_cn' => '棉兰哈拉潘大学商业经济学院赠送了荣誉纪念品。',
                'year' => 2020,
                'img' => 'img/award/15.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            15 =>
            array (
                'id' => 16,
                'title_id' => 'Kenang-Kenangan dari Bupati Deli Serdang',
                'title_en' => 'Kenang-Kenangan dari Bupati Deli Serdang',
                'title_cn' => '日里雪冷县（Deli Serdang）摄政赠送纪念品',
                'description_id' => 'Kenang-Kenangan Bupati Deli Serdang atas apresiasi kegiatan CSR Bedah Rumah kepada penduduk kurang mampu.',
                'description_en' => 'Honorable souvenirs from Mayor of Deli Serdang Regency for an active role in aiding home renovations for the less fortunate resident.',
                'description_cn' => '因公司为不幸居民装修房屋，以表示赞赏，日里雪冷县摄政赠送了荣誉纪念品。',
                'year' => 2020,
                'img' => 'img/award/16.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            16 =>
            array (
                'id' => 17,
                'title_id' => 'Lions Club Medan Finance',
                'title_en' => 'Lions Club Medan Finance',
                'title_cn' => '棉兰狮子会',
                'description_id' => 'Penghargaan atas partisipasi sebagai Sponsorship dalam acara 4th Anniversary Lions Club Medan Finance.',
                'description_en' => 'An appreciation award as the sponsors in the 4th Anniversary Lion’s Club Medan Finance event.',
                'description_cn' => '本公司在Lions Club Medan Finance 四周年庆祝活动作为赞助商，获得了赞赏奖。',
                'year' => 2020,
                'img' => 'img/award/17.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            17 =>
            array (
                'id' => 18,
                'title_id' => 'Bisnis Indonesia Award 2020',
                'title_en' => 'Bisnis Indonesia Award 2020',
                'title_cn' => '-2020年印度尼西亚商业奖',
                'description_id' => 'Perseroan terpilih dengan kategori The Most Promising for Basic and Chemical Industry dan penghargaan kepada Bapak Ridwan terpilih sebagai Rising Star CEO dalam ajang Bisnis Indonesia Award 2020.',
                'description_en' => 'Mark Dynamics was recognized as The Most Promising Company for Basic and Chemical Industry and  Mr. Ridwan was acknowledged as Rising Star CEO in Bisnis Indonesia Award 2020.',
                'description_cn' => '由于公司展现出的光明前景，本公司于 2020 年印度尼西亚商业奖被提名为基础化学工业最有前途公司。与此同时，Ridwan 先生，本公司的总裁，被公认为新星总裁（Rising Star CEO）。',
                'year' => 2020,
                'img' => 'img/award/18.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            18 =>
            array (
                'id' => 19,
                'title_id' => 'IDX Channel Innovation Award',
                'title_en' => 'IDX Channel Innovation Award',
                'title_cn' => '2020 年 IDX Channel Innovation Award',
                'description_id' => 'Perseroan terpilih dengan kategori Proses Internal atas Inovasi Pengolahan Bahan Baku Sarung Tanganoleh IDX Channel Innovation Award 2020. Selain itu, Bapak Ridwan selaku CEO PT. Mark Dynamics Indonesia Tbk juga berhasil menyambet penghargaan dengan kategori Rising Star CEO.',
                'description_en' => 'Mark Dynamics was honored with a award in the category of Internal Process for Raw Materials Processing and Mr. Ridwan was also crowned with the reputable award in the category of Rising Star CEO.',
                'description_cn' => '由于公司的高效创新，本公司在 2020 年 IDX Channel Innovation Award 中荣获原材料加工创新内部流程类别的奖项。此外，Ridwan 先生，本公司的总裁，还获得了新星总裁（Rising Star CEO） 类别的奖项。',
                'year' => 2020,
                'img' => 'img/award/19.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            19 =>
            array (
                'id' => 20,
                'title_id' => 'National Award Foundation 2020 / Indonesia Best Choice Award 2020',
                'title_en' => 'National Award Foundation 2020 / Indonesia Best Choice Award 2020',
                'title_cn' => '2020 年 National Award Foundation / 2020 年 Indonesia Best Choice Award',
                'description_id' => 'Perseroan terpilih dalam kategori Best Choice in Business oleh National Award Foundation 2020.',
                'description_en' => 'Mark Dynamics was recognized as a winner in the category of Best Choice in Business by National Award Foundation 2020.',
                'description_cn' => '本公司在 National Award Foundation 2020 中被选为商业最佳选择（Best Choice in Business）类别的获奖者。',
                'year' => 2020,
                'img' => 'img/award/20.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            20 =>
            array (
                'id' => 21,
                'title_id' => 'Majalah Investor Award ',
                'title_en' => 'Majalah Investor Award',
                'title_cn' => '2020 年《投之家》杂志奖 （Majalah Investor Award 2020）',
                'description_id' => 'Perseroan terpilih sebagai Emiten Terbaik 2020 dengan kategori sektor Industri Dasar dalam ajang Majalah Investor Award Best Listed Company 2020.',
                'description_en' => 'Mark Dynamics was recognized for The Best Listed Public Company 2020 in Basic and Chemical Industry category by Majalah Investor Award 2020.',
                'description_cn' => '公司在2020 年《投资家》杂志奖基础化学工业行业类别被评为2020 年最佳上市公司。',
                'year' => 2020,
                'img' => 'img/award/21.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            21 =>
            array (
                'id' => 22,
                'title_id' => 'Bea Cukai Medan Awards',
                'title_en' => 'Bea Cukai Medan Awards',
                'title_cn' => '',
                'description_id' => 'Perseroan terpilih sebagai Sarana Prasarana Terbaik dalam penghargaan Bea Cukai Medan Awards 2021.',
                'description_en' => 'Mark Dynamics was recognized for The Best Infrastructure Facility in the Medan Customs Award 2021.',
                'description_cn' => '',
                'year' => 2021,
                'img' => 'img/award/22.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            22 =>
            array (
                'id' => 23,
                'title_id' => 'iNews Maker Award',
                'title_en' => 'iNews Maker Award',
                'title_cn' => '',
                'description_id' => 'Perseroan terpilih sebagai The Best Innovation in Operations dalam penghargaan iNews Maker Award  2021.',
                'description_en' => 'Mark Dynamics was recognized for The Best Innovation in Operations from iNews Maker Award  2021.',
                'description_cn' => '',
                'year' => 2021,
                'img' => 'img/award/23.jpg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
            23 =>
            array (
                'id' => 24,
                'title_id' => 'Investor Award',
                'title_en' => 'Investor Award',
                'title_cn' => '',
                'description_id' => 'Perseroan terpilih sebagai Top Performing Listed Companies 2021 dalam Kategori Kapitalisasi Pasar di atas Rp 1 Triliun – Rp 5 Triliun pada ajang Investor Award 2021.',
                'description_en' => 'Mark Dynamics was selected as Top Performing Listed Companies 2021 in the Market Capitalization Above IDR 1 Trillion – IDR 5 Trillion from Investor Award 2021.',
                'description_cn' => '',
                'year' => 2021,
                'img' => 'img/award/24.jpeg',
                'created_at' => '2021-08-08 07:26:53',
                'updated_at' => '2021-08-08 07:26:53',
            ),
        ));


    }
}
