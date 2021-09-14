<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnualGeneralMeetingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('annual_general_meetings')->delete();
        
        \DB::table('annual_general_meetings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'year_id' => 3,
                'title_id' => 'Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders',
                'file' => 'panggilan-RUPSEng-768x2086.jpg',
                'created_at' => '2021-09-14 08:11:48',
                'updated_at' => '2021-09-14 08:11:48',
            ),
            1 => 
            array (
                'id' => 2,
                'year_id' => 3,
                'title_id' => 'Annual General Meeting of Shareholders in APRIL 2018 - Notice to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in APRIL 2018 - Notice to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in APRIL 2018 - Notice to Shareholders',
                'file' => 'PEMBERITAHUAN-RUPSeng-724x1024.jpg',
                'created_at' => '2021-09-14 08:20:05',
                'updated_at' => '2021-09-14 08:20:05',
            ),
            2 => 
            array (
                'id' => 3,
                'year_id' => 3,
                'title_id' => 'Annual General Meeting of Shareholders in DECEMBER 2018 - Invitation to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in DECEMBER 2018 - Invitation to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in DECEMBER 2018 - Invitation to Shareholders',
                'file' => 'NOTICE-RUPS-2018.pdf',
                'created_at' => '2021-09-14 08:24:39',
                'updated_at' => '2021-09-14 08:24:39',
            ),
            3 => 
            array (
                'id' => 4,
                'year_id' => 4,
                'title_id' => '
Annual General Meeting of Shareholders in MAY 2019 - Notice to Shareholders',
                'title_en' => '
Annual General Meeting of Shareholders in MAY 2019 - Notice to Shareholders',
                'title_cn' => '
Annual General Meeting of Shareholders in MAY 2019 - Notice to Shareholders',
                'file' => 'NOTICE-RUPS-2019.pdf',
                'created_at' => '2021-09-14 14:41:58',
                'updated_at' => '2021-09-14 14:41:58',
            ),
            4 => 
            array (
                'id' => 5,
                'year_id' => 4,
                'title_id' => 'Annual General Meeting of Shareholders in MAY 2019 - Invitation to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in MAY 2019 - Invitation to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in MAY 2019 - Invitation to Shareholders',
                'file' => 'PEMANGGILAN-RUPS-MAY-EN-2019.pdf',
                'created_at' => '2021-09-14 14:41:58',
                'updated_at' => '2021-09-14 14:41:58',
            ),
            5 => 
            array (
                'id' => 6,
                'year_id' => 5,
                'title_id' => 'Annual General Meeting of Shareholders in AUG 2020 - Announcement to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in AUG 2020 - Announcement to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in AUG 2020 - Announcement to Shareholders',
                'file' => 'Announcement-Aug-2020.pdf',
                'created_at' => '2021-09-14 14:41:58',
                'updated_at' => '2021-09-14 14:41:58',
            ),
            6 => 
            array (
                'id' => 7,
                'year_id' => 5,
                'title_id' => 'Annual General Meeting of Shareholders in AUG 2020 - Invitation to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in AUG 2020 - Invitation to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in AUG 2020 - Invitation to Shareholders',
                'file' => 'PEMANGGILAN-RUPS-MARK-2020.pdf',
                'created_at' => '2021-09-14 14:41:58',
                'updated_at' => '2021-09-14 14:41:58',
            ),
            7 => 
            array (
                'id' => 8,
                'year_id' => 6,
                'title_id' => 'Annual General Meeting of Shareholders in MAY 2021 - Announcement to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in MAY 2021 - Announcement to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in MAY 2021 - Announcement to Shareholders',
                'file' => 'Announcement-to-Shareholders-2021.pdf',
                'created_at' => '2021-09-14 14:41:58',
                'updated_at' => '2021-09-14 14:41:58',
            ),
            8 => 
            array (
                'id' => 9,
                'year_id' => 6,
                'title_id' => 'Annual General Meeting of Shareholders in MAY 2021 - Invitation to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in MAY 2021 - Invitation to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in MAY 2021 - Invitation to Shareholders',
                'file' => 'Pemanggilan-RUPS-2021.pdf',
                'created_at' => '2021-09-14 14:41:58',
                'updated_at' => '2021-09-14 14:41:58',
            ),
        ));
        
        
    }
}