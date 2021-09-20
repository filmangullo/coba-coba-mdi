<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicExposeYearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('public_expose_years')->delete();
        
        \DB::table('public_expose_years')->insert(array (
            0 => 
            array (
                'id' => 1,
                'year' => 2018,
                'created_at' => '2021-09-20 08:00:27',
                'updated_at' => '2021-09-20 08:00:27',
            ),
            1 => 
            array (
                'id' => 2,
                'year' => 2019,
                'created_at' => '2021-09-20 08:01:05',
                'updated_at' => '2021-09-20 08:01:05',
            ),
            2 => 
            array (
                'id' => 3,
                'year' => 2020,
                'created_at' => '2021-09-20 08:01:09',
                'updated_at' => '2021-09-20 08:01:09',
            ),
            3 => 
            array (
                'id' => 4,
                'year' => 2021,
                'created_at' => '2021-09-20 08:01:13',
                'updated_at' => '2021-09-20 08:01:13',
            ),
        ));
        
        
    }
}