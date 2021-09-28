<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinancialReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('financial_reports')->delete();

        \DB::table('financial_reports')->insert(array (
            0 =>
            array (
                'id' => 1,
                'year_id' => 3,
                'title_id' => 'Q2',
                'title_en' => 'Q2',
                'title_cn' => 'Q2',
                'month' => '2017-06',
                'file' => 'fs-mark-2q17.pdf
',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            1 =>
            array (
                'id' => 2,
                'year_id' => 1,
                'title_id' => 'Q1',
                'title_en' => 'Q1',
                'title_cn' => 'Q1',
                'month' => '2018-03',
                'file' => 'fs-mark-1q18.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            2 =>
            array (
                'id' => 3,
                'year_id' => 3,
                'title_id' => 'Q3',
                'title_en' => 'Q3',
                'title_cn' => 'Q3',
                'month' => '2017-09',
                'file' => 'fs-mark-3q17.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            3 =>
            array (
                'id' => 4,
                'year_id' => 3,
                'title_id' => 'Q4',
                'title_en' => 'Q4',
                'title_cn' => 'Q4',
                'month' => '2017-12',
                'file' => 'fs-mark-4q17.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            4 =>
            array (
                'id' => 5,
                'year_id' => 1,
                'title_id' => 'Q2',
                'title_en' => 'Q2',
                'title_cn' => 'Q2',
                'month' => '2018-06',
                'file' => 'fs-mark-2q18.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            5 =>
            array (
                'id' => 6,
                'year_id' => 1,
                'title_id' => 'Q3',
                'title_en' => 'Q3',
                'title_cn' => 'Q3',
                'month' => '2018-09',
                'file' => 'fs-mark-3q18.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            6 =>
            array (
                'id' => 7,
                'year_id' => 1,
                'title_id' => 'Q4',
                'title_en' => 'Q4',
                'title_cn' => 'Q4',
                'month' => '2018-12',
                'file' => 'fs-mark-4q18.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            7 =>
            array (
                'id' => 8,
                'year_id' => 2,
                'title_id' => 'Q1',
                'title_en' => 'Q1',
                'title_cn' => 'Q1',
                'month' => '2019-03',
                'file' => 'fs-mark-1q19.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            8 =>
            array (
                'id' => 9,
                'year_id' => 2,
                'title_id' => 'Q2',
                'title_en' => 'Q2',
                'title_cn' => 'Q2',
                'month' => '2019-06',
                'file' => 'fs-mark-2q19.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            9 =>
            array (
                'id' => 10,
                'year_id' => 2,
                'title_id' => 'Q3',
                'title_en' => 'Q3',
                'title_cn' => 'Q3',
                'month' => '2019-09',
                'file' => 'fs-mark-3q19.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            10 =>
            array (
                'id' => 11,
                'year_id' => 2,
                'title_id' => 'Q4',
                'title_en' => 'Q4',
                'title_cn' => 'Q4',
                'month' => '2019-12',
                'file' => 'fs-mark-4q19.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            11 =>
            array (
                'id' => 12,
                'year_id' => 4,
                'title_id' => 'Q1',
                'title_en' => 'Q1',
                'title_cn' => 'Q1',
                'month' => '2020-03',
                'file' => 'fs-mark-1q20.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            12 =>
            array (
                'id' => 13,
                'year_id' => 4,
                'title_id' => 'Q2',
                'title_en' => 'Q2',
                'title_cn' => 'Q2',
                'month' => '2020-06',
                'file' => 'fs-mark-2q20.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            13 =>
            array (
                'id' => 14,
                'year_id' => 4,
                'title_id' => 'Q3',
                'title_en' => 'Q3',
                'title_cn' => 'Q3',
                'month' => '2020-09',
                'file' => 'fs-mark-3q20.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            14 =>
            array (
                'id' => 15,
                'year_id' => 4,
                'title_id' => 'Q4',
                'title_en' => 'Q4',
                'title_cn' => 'Q4',
                'month' => '2020-12',
                'file' => 'fs-mark-4q20.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
            15 =>
            array (
                'id' => 16,
                'year_id' => 5,
                'title_id' => 'Q1',
                'title_en' => 'Q1',
                'title_cn' => 'Q1',
                'month' => '2021-03',
                'file' => 'fs-mark-1q21.pdf',
                'created_at' => '2021-09-17 16:23:42',
                'updated_at' => '2021-09-17 16:23:42',
            ),
        ));


    }
}
