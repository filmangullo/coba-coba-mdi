<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 12,
                'type' => 'about',
                'parent' => NULL,
                'slug' => 'ceo-message',
                'name_en' => 'CEO Message',
                'name_id' => 'CEO Message',
                'name_cn' => 'CEO Message',
                'active' => 1,
                'created_at' => '2021-09-20 05:02:08',
                'updated_at' => '2021-09-20 07:15:47',
            ),
        ));
        
        
    }
}