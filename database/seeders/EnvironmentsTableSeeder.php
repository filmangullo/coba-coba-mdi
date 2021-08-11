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
                'id' => 1,
                'title_id' => 'Siklus Daur Ulang Penggunaan Air',
                'title_en' => 'Water Usage Recycling Cycle of PT Mark Dynamics Indonesia, Tbk',
            'description_id' => '<p>Air dari sisa proses produksi dialirkan ke dalam Waste Water Treatment (WWT). Proses meliputi pencampuran air limbah dengan chemical (PAC dan Floculan). Selanjutnya, lumpur dan air dipisahkan di dalam Clarifier dan Filter Press. Air yang telah melalui proses pemurnian kemudian di filtrasi ulang dan melalui proses UV, kemudian diuji sesuai dengan Baku Mutu Air Limbah 05/MENLH/2014 sebelum digunakan kembali ke proses produksi.</p>
',
            'description_en' => '<p>Residual water is channeled into Waste Water Treatment (WWT). The process involves the mixing of wastewater with chemicals like PAC and Floculan. The sludge and water are later to be separated within the Clarifier and Filter Press. The water that has gone through the purification process is then re-filtrated through UV process in order to be tested to conform to Wastewater Quality Standard 05/MENLH/2014 prior to being reused in the production process.</p>
',
                'created_at' => '2021-08-08 11:21:13',
                'updated_at' => '2021-08-08 11:21:13',
            ),
            1 => 
            array (
                'id' => 2,
                'title_id' => 'Jembatan',
                'title_en' => 'Bridge ',
            'description_id' => '<p>Pada tahun 2018, MARK turut berkontribusi kepada lingkungan dengan membangun sebuah jembatan dengan panjang 40 meter dan lebar 8 meter. Jembatan tersebut menghubungkan Dusun I Desa Dalu X-A dengan Jalan Sultan Serdang Batang Kuis, daerah dimana Bandara Internasional Kualanamu (KNO) berada. Pembangunan jembatan yang membutuhkan dana Rp 8.45 Milyar tersebut dimulai di November 2018 dan telah rampung di Agustus 2019.</p>
',
            'description_en' => '<p>In 2018, the company contributed to the environment by building a bridge of 40 meters long and 8 meters wide that connects Dusun I Desa Dalu X-A to Jalan Sultan Serdang Batang Kuis, where Kualanamu International Airport (KNO) is located. The construction of the Rp 8.45 billion bridge was started in November 2018 and finished in August 2019.</p>
',
                'created_at' => '2021-08-08 11:24:07',
                'updated_at' => '2021-08-08 11:24:07',
            ),
        ));
        
        
    }
}