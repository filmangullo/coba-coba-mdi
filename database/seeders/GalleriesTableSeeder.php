<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('galleries')->delete();

        \DB::table('galleries')->insert(array (
            0 =>
            array (
                'id' => 2,
                'is_product' => 1,
                'img' => 'img/product/WhatsApp Image 2021-08-21 at 9.44.28 PM.jpeg',
                'title' => 'Examination Former',
                'created_at' => '2021-08-18 08:07:04',
                'updated_at' => '2021-08-18 08:07:04',
            ),
            1 =>
            array (
                'id' => 3,
                'is_product' => 1,
                'img' => 'img/product/WhatsApp Image 2021-08-21 at 9.44.31 PM.jpeg',
                'title' => 'Surgical Former',
                'created_at' => '2021-08-18 08:07:09',
                'updated_at' => '2021-08-18 08:07:09',
            ),
            2 =>
            array (
                'id' => 5,
                'is_product' => 1,
                'img' => 'img/product/WhatsApp Image 2021-08-21 at 9.44.37 PM.jpeg',
                'title' => 'Household Former',
                'created_at' => '2021-08-18 08:07:22',
                'updated_at' => '2021-08-18 08:07:22',
            ),
            3 =>
            array (
                'id' => 8,
                'is_product' => 1,
                'img' => 'img/product/WhatsApp Image 2021-08-21 at 9.44.44 PM.jpeg',
                'title' => 'Custom Made Former',
                'created_at' => '2021-08-18 08:07:47',
                'updated_at' => '2021-08-18 08:07:47',
            ),
            4 =>
            array (
                'id' => 10,
                'is_product' => 1,
                'img' => 'img/product/WhatsApp Image 2021-08-21 at 9.44.46 PM.jpeg',
                'title' => 'Industrial Former',
                'created_at' => '2021-08-18 08:07:59',
                'updated_at' => '2021-08-18 08:07:59',
            ),
        ));


    }
}
