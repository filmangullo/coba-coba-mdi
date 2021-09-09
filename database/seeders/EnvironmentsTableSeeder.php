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
                'title_cn' => 'PT Mark Dynamics Indonesia, Tbk 中水回用系统',
                'description_id' => 'Air dari sisa proses produksi dialirkan ke dalam Waste Water Treatment (WWT). Proses meliputi pencampuran air limbah dengan chemical (PAC dan Floculan). Selanjutnya, lumpur dan air dipisahkan di dalam Clarifier dan Filter Press. Air yang telah melalui proses pemurnian kemudian di filtrasi ulang dan melalui proses UV, kemudian diuji sesuai dengan Baku Mutu Air Limbah 05/MENLH/2014 sebelum digunakan kembali ke proses produksi.
',
            'description_en' => 'Residual water is channeled into Waste Water Treatment (WWT). The process involves the mixing of wastewater with chemicals like PAC and Floculan. The sludge and water are later to be separated within the Clarifier and Filter Press. The water that has gone through the purification process is then re-filtrated through UV process in order to be tested to conform to Wastewater Quality Standard 05/MENLH/2014 prior to being reused in the production process.
',
                'description_cn' => '废水被引导至废水处理（Waste Water Treatment/WWT）之过程。这个过程将废水与一些化学物质（如PAC、Floculan等）混合。污泥和废水稍后在澄清器和压滤机中被分开。废水首先进行净化过程，接着通过紫外线过程重新过滤，然后被测试是否已符合废水排放质量标准 05/MENLH/2014，最后在生产过程中重新使用。',
                'created_at' => '2021-08-08 11:21:13',
                'updated_at' => '2021-08-08 11:21:13',
            ),
            1 =>
            array (
                'id' => 2,
                'title_id' => 'Jembatan',
                'title_en' => 'Bridge ',
                'title_cn' => '桥梁',
                'description_id' => 'Pada tahun 2018, MARK turut berkontribusi kepada lingkungan dengan membangun sebuah jembatan dengan panjang 40 meter dan lebar 8 meter. Jembatan tersebut menghubungkan Dusun I Desa Dalu X-A dengan Jalan Sultan Serdang Batang Kuis, daerah dimana Bandara Internasional Kualanamu (KNO) berada. Pembangunan jembatan yang membutuhkan dana Rp 8.45 Milyar tersebut dimulai di November 2018 dan telah rampung di Agustus 2019.
',
            'description_en' => 'In 2018, the company contributed to the environment by building a bridge of 40 meters long and 8 meters wide that connects Dusun I Desa Dalu X-A to Jalan Sultan Serdang Batang Kuis, where Kualanamu International Airport (KNO) is located. The construction of the Rp 8.45 billion bridge was started in November 2018 and finished in August 2019.
',
                'description_cn' => '在2018年，公司建造了一座长 40 米、宽 8 米的桥梁，连接 Dusun I 大鲁村 X-A 和瓜拉娜穆国际机场（KNO）的 Sultan Serdang Batang Kuis 街。这座耗资印尼币 84.5 亿的桥梁，于 2018 年 11 月开工，2019 年 8 月竣工。',
                'created_at' => '2021-08-08 11:24:07',
                'updated_at' => '2021-08-08 11:24:07',
            ),
        ));


    }
}
