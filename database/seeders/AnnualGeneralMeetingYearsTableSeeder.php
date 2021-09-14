<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnualGeneralMeetingYearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('annual_general_meeting_years')->delete();
        
        \DB::table('annual_general_meeting_years')->insert(array (
            0 => 
            array (
                'id' => 3,
                'year' => 2018,
                'created_at' => '2021-09-14 07:42:49',
                'updated_at' => '2021-09-14 07:42:49',
            ),
            1 => 
            array (
                'id' => 4,
                'year' => 2019,
                'created_at' => '2021-09-14 07:47:40',
                'updated_at' => '2021-09-14 07:47:40',
            ),
            2 => 
            array (
                'id' => 5,
                'year' => 2020,
                'created_at' => '2021-09-14 09:01:58',
                'updated_at' => '2021-09-14 09:01:58',
            ),
            3 => 
            array (
                'id' => 6,
                'year' => 2021,
                'created_at' => '2021-09-14 09:02:04',
                'updated_at' => '2021-09-14 09:02:04',
            ),
        ));
        
        
    }
}