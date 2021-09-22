<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OurProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('our_products')->delete();
        
        \DB::table('our_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_id' => 'Agrikultur',
                'title_en' => 'Agriculture',
                'title_cn' => '农业',
                'description_id' => 'Produk pertanian seperti bahan-bahan kimia, pestisida, dan peralatan pertanian modern.',
                'description_en' => 'Farming products like chemicals, pesticides, and modern agriculture products.',
                'description_cn' => '各种农产品，如农用化学品、农药以及现代农产品。',
                'url' => 'https://agrodynamicsindo.com/',
                'file' => 'img/agriculture.png',
                'created_at' => '2021-09-22 09:18:44',
                'updated_at' => '2021-09-22 09:18:44',
            ),
            1 => 
            array (
                'id' => 2,
                'title_id' => 'Cetakan Sarung Tangan',
                'title_en' => 'Hand Former',
                'title_cn' => '手套模具',
                'description_id' => 'Cetakan berupa keramik yang digunakan untuk membuat sarung tangan Nitril dan Latex untuk keperluan medis.',
                'description_en' => 'Ceramic molds are used to make Nitrile and Latex gloves for medical purposes.',
                'description_cn' => '用于制造医用的丁腈手套和乳胶手套的陶瓷手套模具。',
                'url' => 'https://markdynamicsindo.com/product-gallery',
                'file' => 'img/handformer.png',
                'created_at' => '2021-09-22 09:18:44',
                'updated_at' => '2021-09-22 09:18:44',
            ),
            2 => 
            array (
                'id' => 3,
                'title_id' => 'Produk Saniter',
                'title_en' => 'Sanitary Wares',
                'title_cn' => '卫生洁具',
                'description_id' => 'Residu bahan baku cetakan sarung tangan digunakan untuk membuat beragam jenis mangkuk toilet.',
                'description_en' => 'Residue from hand former making is used to produce various toilet bowls.',
                'description_cn' => '2制造手套模具过程中剩下的废物用来制造各种马桶。',
                'url' => 'https://berjayadynamicsindonesia.web.indotrading.com/',
                'file' => 'img/toilet.png',
                'created_at' => '2021-09-22 09:18:44',
                'updated_at' => '2021-09-22 09:18:44',
            ),
        ));
        
        
    }
}