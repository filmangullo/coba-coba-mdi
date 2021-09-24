<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicExposesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('public_exposes')->delete();

        \DB::table('public_exposes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'year_id' => 1,
                'title_id' => 'Pubex MARK 2018',
                'title_en' => 'Pubex MARK 2018',
                'title_cn' => 'Pubex MARK 2018',
                'file' => 'pubex-mark-2018.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            1 =>
            array (
                'id' => 2,
                'year_id' => 1,
                'title_id' => 'Pubex QnA MARK 2018',
                'title_en' => 'Pubex QnA MARK 2018',
                'title_cn' => 'Pubex QnA MARK 2018',
                'file' => 'pubex-qna-mark-2018.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            2 =>
            array (
                'id' => 3,
                'year_id' => 2,
                'title_id' => 'Pubex MARK 2019',
                'title_en' => 'Pubex MARK 2019',
                'title_cn' => 'Pubex MARK 2019',
                'file' => 'pubex-mark-2019.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            3 =>
            array (
                'id' => 4,
                'year_id' => 2,
                'title_id' => 'Pubex QnA MARK 2019',
                'title_en' => 'Pubex QnA MARK 2019',
                'title_cn' => 'Pubex QnA MARK 2019',
                'file' => 'pubex-qna-mark-2019.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            4 =>
            array (
                'id' => 5,
                'year_id' => 3,
                'title_id' => 'Pubex MARK 2020',
                'title_en' => 'Pubex MARK 2020',
                'title_cn' => 'Pubex MARK 2020',
                'file' => 'pubex-mark-2020.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            5 =>
            array (
                'id' => 6,
                'year_id' => 3,
                'title_id' => 'Pubex QnA MARK 2020',
                'title_en' => 'Pubex QnA MARK 2020',
                'title_cn' => 'Pubex QnA MARK 2020',
                'file' => 'pubex-qna-mark-2020.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            6 =>
            array (
                'id' => 7,
                'year_id' => 4,
                'title_id' => 'Pubex MARK 2021',
                'title_en' => 'Pubex MARK 2021',
                'title_cn' => 'Pubex MARK 2021',
                'file' => 'pubex-mark-2021.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
            7 =>
            array (
                'id' => 8,
                'year_id' => 4,
                'title_id' => 'Pubex QnA MARK 2021',
                'title_en' => 'Pubex QnA MARK 2021',
                'title_cn' => 'Pubex QnA MARK 2021',
                'file' => 'pubex-qna-mark-2021.pdf',
                'created_at' => '2021-09-20 08:01:43',
                'updated_at' => '2021-09-20 08:01:43',
            ),
        ));


    }
}
