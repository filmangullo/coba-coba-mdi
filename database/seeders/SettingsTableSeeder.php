<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'career',
                'key' => NULL,
                'value' => NULL,
                'index' => NULL,
                'active' => 1,
                'created_at' => '2021-09-20 15:49:32',
                'updated_at' => '2021-09-20 15:49:32',
            ),
        ));
        
        
    }
}