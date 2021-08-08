<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('certificates')->delete();
        
        \DB::table('certificates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_id' => 'ISO 9001:2015 Quality Management Systems',
                'title_en' => 'ISO 9001:2015 Quality Management Systems',
                'img' => 'img/certificates/quality-management-systems.png',
                'created_at' => '2021-08-02 15:33:29',
                'updated_at' => '2021-08-02 16:02:57',
            ),
        ));
        
        
    }
}