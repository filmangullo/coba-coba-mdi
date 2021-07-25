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
                'slug' => 'CSR-Berbagi-Kasih',
                'title_id' => 'CSR Berbagi Kasih',
                'title_en' => 'CSR Sharing Love',
            'description_id' => 'CSR Berbagi Kasih (31 Des 2020)',
            'description_en' => 'CSR Sharing Love (31 Dec 2020)',
            'img' => 'img/CSR/13. CSR Berbagi Kasih (31 Des 2020).jpg',
                'created_at' => '2021-07-16 13:20:08',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            1 => 
            array (
                'id' => 3,
                'date' => '2020-10-15',
                'slug' => 'CSR-Bedah-Rumah-2020',
                'title_id' => 'CSR Bedah Rumah 2020',
                'title_en' => 'CSR Home Surgery 2020',
            'description_id' => 'CSR Bedah Rumah 2020 (15 Okt 2020)',
            'description_en' => 'Home Renovation CSR 2020 (15 Oct 2020)',
            'img' => 'img/CSR/12. CSR Bedah Rumah 2020 (15 Okt 2020).JPG',
                'created_at' => '2021-07-16 13:20:09',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            2 => 
            array (
                'id' => 4,
                'date' => '2020-08-30',
                'slug' => 'CSR-Bantuan-Beasiswa-Alumni-Sutung-Sutomo',
                'title_id' => 'CSR Bantuan Beasiswa Alumni Sutung  Sutomo',
                'title_en' => 'CSR Sutung Sutomo Alumni Scholarship Assistance',
                'description_id' => 'CSR Bantuan Beasiswa Alumni Sutung  Sutomo 3 Agustus 2020',
                'description_en' => 'CSR Sutung Sutomo Alumni Scholarship Assistance August 3, 2020',
                'img' => 'img/CSR/11. CSR Bantuan Beasiswa Alumni Sutung  Sutomo 3 Agustus 2020.JPG',
                'created_at' => '2021-07-16 13:20:10',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            3 => 
            array (
                'id' => 5,
                'date' => '2020-05-18',
                'slug' => 'Peduli-Covid-19',
                'title_id' => 'Peduli Covid-19',
                'title_en' => 'Care for Covid-19',
            'description_id' => 'Peduli Covid-19, MARK Sumbang Masker (18 Mei 2020)',
            'description_en' => 'Concerning Covid-19, MARK Donates Masks (18 May 2020)',
            'img' => 'img/CSR/10. Peduli Covid-19, MARK Sumbang Masker (18 Mei 2020).JPG',
                'created_at' => '2021-07-16 13:20:11',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            4 => 
            array (
                'id' => 6,
                'date' => '2019-12-23',
                'slug' => 'CSR-YAPENTRA',
                'title_id' => 'CSR YAPENTRA',
                'title_en' => 'CSR YAPENTRA',
            'description_id' => 'CSR YAPENTRA (23 DES 2019)',
            'description_en' => 'CSR YAPENTRA (23 DES 2019)',
            'img' => 'img/CSR/09. CSR YAPENTRA (23 DES 2019).JPG',
                'created_at' => '2021-07-16 13:20:12',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            5 => 
            array (
                'id' => 7,
                'date' => '2019-09-03',
                'slug' => 'HOME-SURGERY-FUND',
                'title_id' => 'DANA BEDAH RUMAH',
                'title_en' => 'HOME SURGERY FUND',
            'description_id' => 'CSR - DANA BEDAH RUMAH (03 Sept 2019)',
            'description_en' => 'CSR - HOME SURGERY FUND (03 Sept 2019)',
            'img' => 'img/CSR/08. CSR - DANA BEDAH RUMAH (03 Sept 2019).JPEG',
                'created_at' => '2021-07-16 13:20:13',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            6 => 
            array (
                'id' => 8,
                'date' => '2019-09-01',
                'slug' => 'REUNION-RUN',
                'title_id' => 'REUNION RUN',
                'title_en' => 'REUNION RUN',
                'description_id' => 'CSR - REUNION RUN 1 September 2019',
                'description_en' => 'CSR - REUNION RUN 1 September 2019',
                'img' => 'img/CSR/07. CSR - REUNION RUN 1 September 2019.JPG',
                'created_at' => '2021-07-16 13:20:14',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            7 => 
            array (
                'id' => 9,
                'date' => '2019-03-08',
                'slug' => 'WUSHU-KEJURDA',
                'title_id' => 'KEJURDA WUSHU',
                'title_en' => 'WUSHU KEJURDA',
                'description_id' => 'CSR - KEJURDA WUSHU 08-10 Maret 2019',
                'description_en' => 'CSR - KEJURDA WUSHU 08-10 Maret 2019',
                'img' => 'img/CSR/06. CSR - KEJURDA WUSHU 08-10 Maret 2019.JPG',
                'created_at' => '2021-07-16 13:20:15',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            8 => 
            array (
                'id' => 10,
                'date' => '2019-03-08',
                'slug' => 'MARK-Dukung-Wushu-Sanda-Piala-Kapoldasu',
                'title_id' => 'KEJURDA WUSHU',
                'title_en' => 'MARK Supports Wushu Sanda Trophy Kapoldasu',
                'description_id' => 'CSR - MARK Dukung Wushu Sanda Piala Kapoldasu',
                'description_en' => 'CSR - MARK Supports Wushu Sanda Trophy Kapoldasu',
            'img' => 'img/CSR/05. CSR - MARK Dukung Wushu Sanda  Piala Kapoldasu 2018 (27 Sept 2018).JPG',
                'created_at' => '2021-07-16 13:20:16',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            9 => 
            array (
                'id' => 11,
                'date' => '2018-07-13',
                'slug' => 'CSR-BANTUAN-PENDIDIKAN',
                'title_id' => 'CSR BANTUAN PENDIDIKAN',
                'title_en' => 'CSR EDUCATION ASSISTANCE',
            'description_id' => 'CSR BANTUAN PENDIDIKAN (13 Juli 2018)',
            'description_en' => 'CSR EDUCATION ASSISTANCE (13 July 2018)',
            'img' => 'img/CSR/04. CSR BANTUAN PENDIDIKAN (13 Juli 2018).JPG',
                'created_at' => '2021-07-16 13:20:17',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            10 => 
            array (
                'id' => 12,
                'date' => '2018-05-30',
                'slug' => 'BUKBER-BERSAMA-80-ANAK-YATIM-PIATU',
                'title_id' => 'BUKBER BERSAMA 80 ANAK YATIM PIATU',
                'title_en' => 'BUKBER WITH 80 ORPHANS',
            'description_id' => 'CSR - BUKBER BERSAMA 80 ANAK YATIM PIATU (30 Mei 2018)',
            'description_en' => 'CSR - BUKBER WITH 80 ORPHANS (May 30, 2018)',
            'img' => 'img/CSR/03. CSR - BUKBER BERSAMA 80 ANAK YATIM PIATU (30 Mei 2018).JPG',
                'created_at' => '2021-07-16 13:20:18',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            11 => 
            array (
                'id' => 13,
                'date' => '2018-03-26',
                'slug' => 'CSR-DUKUNG-WUSHU-2018',
                'title_id' => 'CSR DUKUNG WUSHU 2018',
                'title_en' => 'CSR SUPPORTS WUSHU 2018',
            'description_id' => 'CSR DUKUNG WUSHU (26 Mar 2018)',
            'description_en' => 'CSR SUPPORTS WUSHU (26 Mar 2018)',
            'img' => 'img/CSR/02. CSR DUKUNG WUSHU (26 Mar 2018).jpg',
                'created_at' => '2021-07-16 13:20:19',
                'updated_at' => '2021-07-16 13:29:42',
            ),
            12 => 
            array (
                'id' => 14,
                'date' => '2018-02-08',
                'slug' => 'CSR-BEDAH-RUMAH-2018',
                'title_id' => 'BEDAH RUMAH',
                'title_en' => 'HOME SURGERY',
            'description_id' => 'CSR BEDAH RUMAH  (08 Feb 2018)',
                'description_en' => 'CSR HOME SURGERY',
            'img' => 'img/CSR/01. CSR BEDAH RUMAH  (08 Feb 2018).jpg',
                'created_at' => '2021-07-16 13:20:20',
                'updated_at' => '2021-07-16 13:29:42',
            ),
        ));
        
        
    }
}