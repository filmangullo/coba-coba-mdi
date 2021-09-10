<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CsrsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('csrs')->delete();

        \DB::table('csrs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'date' => '2020-12-31',
                'slug' => '2020-12-31-wl6dyuIneqJlnr4yh71VlUnZr4p5WPu5KMxTyGre',
                'description_id' => 'MARK menyelenggarakan program berbagi kasi di pabrik Dalu kepada warga Desa Dalu.',
                'description_en' => 'MARK organized a Love and Care program in the Dalu factory with the locals of Dalu Village. ',
                'description_cn' => '公司与大鲁村的当地人一起在大鲁工厂组织了爱与关怀计划（Love and Care program）。',
                'img' => 'img/CSR/13. CSR Berbagi Kasih (31 Des 2020).jpg',
                'created_at' => '2021-07-16 13:20:08',
                'updated_at' => '2021-08-09 13:50:50',
            ),
            1 =>
            array (
                'id' => 3,
                'date' => '2020-10-15',
                'slug' => '2020-10-15-AZBibUB0erigVuZL12FLJ82DgMm4r3vAnsv7T3XW',
                'description_id' => 'MARK memberikan bantuan dana Bedah Rumah 2020 kepada pemerintah Kabupaten Deli Serdang.',
                'description_en' => 'MARK provided fund to aid the Home Renovation Program (Bedah Rumah 2020) to the Local Government of Deli Serdang Regency.',
                'description_cn' => '公司向日里雪冷县的地方政府供给资金，协助房屋装修计划（Bedah Rumah 2020）。',
                'img' => 'img/CSR/12. CSR Bedah Rumah 2020 (15 Okt 2020).JPG',
                'created_at' => '2021-07-16 13:20:09',
                'updated_at' => '2021-08-09 13:53:58',
            ),
            2 =>
            array (
                'id' => 4,
                'date' => '2020-08-03',
                'slug' => '2020-08-03-Ak0RW64pZ3qJQEjG7Q9oGrJJB4d8q2NOQdOFH8jO',
                'description_id' => 'MARK memberikan bantuan beasiswa melalui ikatan alumni Sutung / Sutomo.',
                'description_en' => 'MARK provided compensation in the form of scholarships through the community of Sutung/Sutomo alumni.',
                'description_cn' => '公司通过苏东校友会以奖学金方式供给补偿金。',
                'img' => 'img/CSR/11. CSR Bantuan Beasiswa Alumni Sutung  Sutomo 3 Agustus 2020.JPG',
                'created_at' => '2021-07-16 13:20:10',
                'updated_at' => '2021-08-09 13:54:31',
            ),
            3 =>
            array (
                'id' => 5,
                'date' => '2020-05-18',
                'slug' => '2020-05-18-9LJrH7yf77cgHPaS4brNy7YAPrZvDQt4T2mnRi2m',
                'description_id' => 'MARK memberikan bantuan sumbangan berupa masker dalam rangka Peduli Covid-19 kepada Pemerintah Kabupaten Deli Serdang dan Kepolisian Resor Deli Serdang',
                'description_en' => 'MARK donated masks to the Local Government and Police Department of Deli Serdang Regency on the occasion of #PeduliCovid-19. ',
                'description_cn' => '的 #PeduliCovid-19 之际，公司向日里雪冷县的地方政府和警察人员免费分发口罩。',
                'img' => 'img/CSR/10. Peduli Covid-19, MARK Sumbang Masker (18 Mei 2020).JPG',
                'created_at' => '2021-07-16 13:20:11',
                'updated_at' => '2021-08-09 14:07:55',
            ),
            4 =>
            array (
                'id' => 6,
                'date' => '2019-12-23',
                'slug' => '2019-12-23-chNP6l1tGISEJREtoCAiHZ6ue97KbWLyK7vBVhz8',
                'description_id' => 'MARK memberikan bantuan dana tahunan kepada Yayasan Pendidikan Tunanetra Sumatera yang berlokasi di Tanjung Morawa.',
                'description_en' => 'MARK contributed annual aid-fund to Yayasan Pendidikan Tunanetra Sumatera in Tanjong Morawa.',
                'description_cn' => '为丹绒摩拉瓦的 Yayasan Pendidikan Tunanetra Sumatera 提供年度援助基金。',
                'img' => 'img/CSR/09. CSR YAPENTRA (23 DES 2019).JPG',
                'created_at' => '2021-07-16 13:20:12',
                'updated_at' => '2021-08-09 14:09:15',
            ),
            5 =>
            array (
                'id' => 7,
                'date' => '2019-09-03',
                'slug' => '2019-09-03-0bMO8kFfdtApcBxOvMSC1O0Ta1n0B1Kv2ueDPpsr',
                'description_id' => 'MARK bekerja sama dengan Pemerintah Kabupaten Deli Serdang dalam Program Bedah Rumah tahun 2018/2019.',
                'description_en' => 'MARK was in collaboration with the Local Government of Deli Serdang Regency to hold a Home Renovation Program in 2018/2019.',
                'description_cn' => '与日里雪冷县的当地政府合作，进行了2018年至2019年的房屋装修计划。',
                'img' => 'img/CSR/08. CSR - DANA BEDAH RUMAH (03 Sept 2019).JPEG',
                'created_at' => '2021-07-16 13:20:13',
                'updated_at' => '2021-08-09 14:10:00',
            ),
            6 =>
            array (
                'id' => 8,
                'date' => '2019-09-01',
                'slug' => 'REUNION-RUN',
                'description_id' => 'CSR - REUNION RUN 1 September 2019',
                'description_en' => 'CSR - REUNION RUN 1 September 2019',
                'description_cn' => '2019年9月1日CSR - REUNION RUN',
                'img' => 'img/CSR/07. CSR - REUNION RUN 1 September 2019.JPG',
                'created_at' => '2021-07-16 13:20:14',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            7 =>
            array (
                'id' => 9,
                'date' => '2019-03-08',
                'slug' => '2019-03-08-ndpjo0xwsKe3UfasbvNCguAYLOXwZsUoUKfFXkO8',
                'description_id' => 'MARK mendukung Wushu Sumut pada Kejurda Wushu Sanda Pra Yunior, Yunior dan Senior 2019.',
                'description_en' => 'MARK supported North Sumatera Wushu in the event of Kejurda Wushu Sanda Pra Yunior, Yunior and Senior 2019.',
                'description_cn' => '公司在 Kejurda Wushu Sanda Pra Yunior, Yunior dan Senior 活动支持北苏门答腊武术。',
                'img' => 'img/CSR/06. CSR - KEJURDA WUSHU 08-10 Maret 2019.JPG',
                'created_at' => '2021-07-16 13:20:15',
                'updated_at' => '2021-08-09 14:11:57',
            ),
            8 =>
            array (
                'id' => 10,
                'date' => '2019-03-08',
                'slug' => '2019-03-08-oi2FLyR7XsdnrnLXLFhwiPrOcERRC7UFfLRHFJLV',
                'description_id' => 'MARK mendukung Wushu Sumut pada Wushu Sanda Champion Piala Kapoldasu 2018 ',
                'description_en' => 'MARK supported North Sumatera Wushu in the event of Wushu Sanda Champion Piala Kapoldasu.',
                'description_cn' => '公司在 Wushu Sanda Champion Piala Kapoldasu 比赛支持北苏门答腊武术。',
                'img' => 'img/CSR/05. CSR - MARK Dukung Wushu Sanda  Piala Kapoldasu 2018 (27 Sept 2018).JPG',
                'created_at' => '2021-07-16 13:20:16',
                'updated_at' => '2021-08-09 13:49:35',
            ),
            9 =>
            array (
                'id' => 11,
                'date' => '2018-07-13',
                'slug' => '2018-07-13-zrutEqyLquAKGfvm7miv9pmY5j7uwapfIlbG2ena',
                'description_id' => 'MARK memberikan bantuan dana pendidikan kepada siswa kurang mampu yang tinggal di Tanjung Morawa dan sekitarnya sebesar Rp. 53.400,000,-',
                'description_en' => 'MARK provided educational funding as much as Rp 53.400.000,-to help the underprivileged students in area around Tanjung Morawa.',
                'description_cn' => '公司提供了高达 Rp 53.400.000,- 的教育资金，帮助丹绒摩拉瓦附近的贫困学生。',
                'img' => 'img/CSR/04. CSR BANTUAN PENDIDIKAN (13 Juli 2018).JPG',
                'created_at' => '2021-07-16 13:20:17',
                'updated_at' => '2021-08-09 13:49:08',
            ),
            10 =>
            array (
                'id' => 12,
                'date' => '2018-05-30',
                'slug' => '2018-05-30-Ysbg3a1WA01bBEQI6NPWnBYW7iziN8EFGehFEBWa',
                'description_id' => 'MARK berbuka puasa bersama anak Panti Asuhan Putra Putri Yayasan Amal Sosial Al-Jamiyatul Washliyah Lubuk Pakam.',
                'description_en' => 'MARK organized the Iftar event with the orphans from Panti Asuhan Putra Putri Yayasan Amal Sosial Al-Jamiyatul Washliyah of Lubuk Pakam Regency.',
                'description_cn' => '公司为鲁布巴干Panti Asuhan Putra Putri Yayasan Amal Sosial Al-Jamiyatul Washliyah 的孤儿组织了开斋活动。',
                'img' => 'img/CSR/03. CSR - BUKBER BERSAMA 80 ANAK YATIM PIATU (30 Mei 2018).JPG',
                'created_at' => '2021-07-16 13:20:18',
                'updated_at' => '2021-08-09 13:48:30',
            ),
            11 =>
            array (
                'id' => 13,
                'date' => '2018-03-26',
                'slug' => '2018-03-26-0lM3I9Wws2W6qI2UceUMkM4vBN6f0FbO7QlpfUcd',
                'description_id' => 'MARK mendukung Wushu Sumut pada Kejurnas Wushu Junior dan Senior 2018 di Yogyakarta',
                'description_en' => 'MARK supported North Sumatera Wushu in the event of National Wushu Competition for both Junior and Senior stage held in Yogyakarta.',
                'description_cn' => '公司在日惹举办的全国初级和高级武术比赛支持北苏门答腊武术。',
                'img' => 'img/CSR/02. CSR DUKUNG WUSHU (26 Mar 2018).jpg',
                'created_at' => '2021-07-16 13:20:19',
                'updated_at' => '2021-08-09 13:47:38',
            ),
            12 =>
            array (
                'id' => 14,
                'date' => '2018-02-08',
                'slug' => '2018-02-08-kKm3y1s2bS3FEf4tpMVo8GGxuG2HKJIS7HzySAQk',
                'description_id' => 'MARK bekerja sama dengan Pemerintah Kabupaten Deli Serdang dalam Program Bedah Rumah tahun 2017/2018',
                'description_en' => 'MARK was in collaboration with the Local Government of Deli Serdang Regency to hold a Home Renovation Program in 2017/2018.',
                'description_cn' => '本公司与日历雪冷县的摄政政府在2017-2018年的房屋装修计划进行合作。',
                'img' => 'img/CSR/01. CSR BEDAH RUMAH  (08 Feb 2018).jpg',
                'created_at' => '2021-07-16 13:20:20',
                'updated_at' => '2021-08-09 13:40:40',
            ),
        ));


    }
}
