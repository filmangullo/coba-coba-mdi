<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinancialReportYearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('financial_report_years')->delete();
        
        \DB::table('financial_report_years')->insert(array (
            0 => 
            array (
                'id' => 1,
                'year' => 2018,
                'created_at' => '2021-09-17 15:35:54',
                'updated_at' => '2021-09-17 15:35:54',
            ),
            1 => 
            array (
                'id' => 2,
                'year' => 2019,
                'created_at' => '2021-09-17 16:09:24',
                'updated_at' => '2021-09-17 16:09:24',
            ),
            2 => 
            array (
                'id' => 3,
                'year' => 2017,
                'created_at' => '2021-09-17 16:23:50',
                'updated_at' => '2021-09-17 16:23:50',
            ),
            3 => 
            array (
                'id' => 4,
                'year' => 2020,
                'created_at' => '2021-09-17 16:23:50',
                'updated_at' => '2021-09-17 16:23:50',
            ),
            4 => 
            array (
                'id' => 5,
                'year' => 2021,
                'created_at' => '2021-09-17 16:36:32',
                'updated_at' => '2021-09-17 16:36:32',
            ),
        ));
        
        
    }
}