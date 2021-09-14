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
                'year_id' => 4,
                'title_id' => 'dasdasd',
                'title_en' => 'adasdas',
                'title_cn' => 'asdasd',
                'file' => '1cc63099da15b0abbc919f2a69a715aa.doc',
                'created_at' => '2021-09-14 08:11:48',
                'updated_at' => '2021-09-14 08:11:48',
            ),
            1 => 
            array (
                'id' => 2,
                'year_id' => 4,
                'title_id' => 'asdasd',
                'title_en' => 'aasdsa',
                'title_cn' => 'asdasd',
                'file' => '6b43fc6eea539f636027d54e320b5a3b.docx',
                'created_at' => '2021-09-14 08:20:05',
                'updated_at' => '2021-09-14 08:20:05',
            ),
            2 => 
            array (
                'id' => 3,
                'year_id' => 3,
                'title_id' => 'Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders',
                'title_en' => 'Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders',
                'title_cn' => 'Annual General Meeting of Shareholders in APRIL 2018 - Invitation to Shareholders',
                'file' => '8a0dac2abf4b1c7f567d84ea97fa98fb.docx',
                'created_at' => '2021-09-14 08:24:39',
                'updated_at' => '2021-09-14 08:24:39',
            ),
        ));
        
        
    }
}