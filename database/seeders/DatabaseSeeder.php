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
        $this->call(AnnualGeneralMeetingYearsTableSeeder::class);
        $this->call(AnnualGeneralMeetingsTableSeeder::class);
        $this->call(FinancialReportYearsTableSeeder::class);
        $this->call(FinancialReportsTableSeeder::class);
        $this->call(PublicExposeYearsTableSeeder::class);
        $this->call(PublicExposesTableSeeder::class);
        $this->call(AnnualReportsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(OurProductsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
