<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnualReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('annual_reports')->delete();
        
        \DB::table('annual_reports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'year_id' => NULL,
                'title_id' => 'Annual Report MARK 2017',
                'title_en' => 'Annual Report MARK 2017',
                'title_cn' => 'Annual Report MARK 2017',
                'file' => 'img/annual-2017.png',
                'created_at' => '2021-09-18 06:43:52',
                'updated_at' => '2021-09-18 06:43:52',
            ),
            1 => 
            array (
                'id' => 2,
                'year_id' => NULL,
                'title_id' => 'Annual Report MARK 2018',
                'title_en' => 'Annual Report MARK 2018',
                'title_cn' => 'Annual Report MARK 2018',
                'file' => 'img/annual-2018.png',
                'created_at' => '2021-09-18 06:43:52',
                'updated_at' => '2021-09-18 06:43:52',
            ),
            2 => 
            array (
                'id' => 3,
                'year_id' => NULL,
                'title_id' => 'Annual Report MARK 2019',
                'title_en' => 'Annual Report MARK 2019',
                'title_cn' => 'Annual Report MARK 2019',
                'file' => 'img/annual-2019.png',
                'created_at' => '2021-09-18 06:43:52',
                'updated_at' => '2021-09-18 06:43:52',
            ),
            3 => 
            array (
                'id' => 4,
                'year_id' => NULL,
                'title_id' => 'Annual Report MARK 2020',
                'title_en' => 'Annual Report MARK 2020',
                'title_cn' => 'Annual Report MARK 2020',
                'file' => 'img/annual-2020.png',
                'created_at' => '2021-09-18 06:43:52',
                'updated_at' => '2021-09-18 06:43:52',
            ),
        ));
        
        
    }
}