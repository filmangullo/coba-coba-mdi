<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CsrsTableSeeder::class);
        $this->call(AwardsTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(EnvironmentsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(EnvironmentImgsTableSeeder::class);
    }
}
