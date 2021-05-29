<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Testing',
                'email' => 'testing@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::('testing'),
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-05-29 12:21:55',
                'updated_at' => '2021-05-29 12:21:55',
            ),
        ));
        
        
    }
}