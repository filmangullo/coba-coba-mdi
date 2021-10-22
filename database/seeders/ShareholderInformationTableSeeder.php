<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShareholderInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shareholder_information')->delete();
        
        \DB::table('shareholder_information')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file' => 'file/Informasi Pemegang Saham Januari 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Januari 2021","en":"Informasi Pemegang Saham Januari 2021","cn":"Informasi Pemegang Saham Januari 2021"}',
                'created_at' => '2021-10-22 02:53:20',
                'updated_at' => '2021-10-22 02:59:34',
            ),
            1 => 
            array (
                'id' => 2,
                'file' => 'file/Informasi Pemegang Saham Februari 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Februari 2021","en":"Informasi Pemegang Saham Februari 2021","cn":"Informasi Pemegang Saham Februari 2021"}',
                'created_at' => '2021-10-22 02:53:21',
                'updated_at' => '2021-10-22 03:00:46',
            ),
            2 => 
            array (
                'id' => 3,
                'file' => 'file/Informasi Pemegang Saham Maret 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Maret 2021","en":"Informasi Pemegang Saham Maret 2021","cn":"Informasi Pemegang Saham Maret 2021"}',
                'created_at' => '2021-10-22 02:53:22',
                'updated_at' => '2021-10-22 03:01:44',
            ),
            3 => 
            array (
                'id' => 4,
                'file' => 'file/Informasi Pemegang Saham Mei 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Mei 2021","en":"Informasi Pemegang Saham Mei 2021","cn":"Informasi Pemegang Saham Mei 2021"}',
                'created_at' => '2021-10-22 02:53:24',
                'updated_at' => '2021-10-22 02:53:21',
            ),
            4 => 
            array (
                'id' => 5,
                'file' => 'file/Informasi Pemegang Saham April 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham April 2021","en":"Informasi Pemegang Saham April 2021","cn":"Informasi Pemegang Saham April 2021"}',
                'created_at' => '2021-10-22 02:53:23',
                'updated_at' => '2021-10-22 03:02:55',
            ),
            5 => 
            array (
                'id' => 6,
                'file' => 'file/Informasi Pemegang Saham Juni 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Juni 2021","en":"Informasi Pemegang Saham Juni 2021","cn":"Informasi Pemegang Saham Juni 2021"}',
                'created_at' => '2021-10-22 02:53:25',
                'updated_at' => '2021-10-22 02:53:21',
            ),
            6 => 
            array (
                'id' => 7,
                'file' => 'file/Informasi Pemegang Saham Juli 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Juli 2021.pdf","en":"Informasi Pemegang Saham Juli 2021.pdf","cn":"Informasi Pemegang Saham Juli 2021.pdf"}',
                'created_at' => '2021-10-22 02:53:26',
                'updated_at' => '2021-10-22 02:53:21',
            ),
            7 => 
            array (
                'id' => 8,
                'file' => 'file/Informasi Pemegang Saham Agustus 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Agustus 2021","en":"Informasi Pemegang Saham Agustus 2021","cn":"Informasi Pemegang Saham Agustus 2021"}',
                'created_at' => '2021-10-22 02:53:27',
                'updated_at' => '2021-10-22 02:53:21',
            ),
            8 => 
            array (
                'id' => 9,
                'file' => 'file/Informasi Pemegang Saham Oktober 2021.pdf',
                'title' => '{"id":"Informasi Pemegang Saham Oktober 2021","en":"Informasi Pemegang Saham Oktober 2021","cn":"Informasi Pemegang Saham Oktober 2021"}',
                'created_at' => '2021-10-22 02:53:28',
                'updated_at' => '2021-10-22 02:53:21',
            ),
        ));
        
        
    }
}