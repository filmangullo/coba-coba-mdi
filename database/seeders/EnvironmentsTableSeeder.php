<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnvironmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('environments')->delete();

        \DB::table('environments')->insert(array (
            0 =>
            array (
                'id' => 2,
                'img' => 'img/envi-1.jpg',
                'created_at' => '2021-05-30 07:13:45',
                'updated_at' => '2021-05-30 07:13:45',
            ),
            1 =>
            array (
                'id' => 3,
                'img' => 'img/envi-2.jpg',
                'created_at' => '2021-05-30 07:46:10',
                'updated_at' => '2021-05-30 07:46:10',
            ),
            2 =>
            array (
                'id' => 4,
                'img' => 'img/envi-3.jpg',
                'created_at' => '2021-05-30 07:46:19',
                'updated_at' => '2021-05-30 07:46:19',
            ),
        ));


    }
}
