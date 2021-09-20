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
                'name_id' => 'Pesan Presiden Direktur',
                'name_cn' => '总裁致辞',
                'active' => 1,
                'created_at' => '2021-09-20 05:02:08',
                'updated_at' => '2021-09-20 07:45:21',
            ),
            1 => 
            array (
                'id' => 13,
                'type' => 'main',
                'parent' => NULL,
                'slug' => 'investor-relation',
                'name_en' => 'Investor Relation',
                'name_id' => 'Relasi Investor',
                'name_cn' => '投资家',
                'active' => 1,
                'created_at' => '2021-09-20 07:42:38',
                'updated_at' => '2021-09-20 07:42:38',
            ),
            2 => 
            array (
                'id' => 14,
                'type' => 'main',
                'parent' => 13,
                'slug' => 'corporate-governance',
                'name_en' => 'Corporate Governance',
                'name_id' => 'Tata Kelola Perusahaan',
                'name_cn' => '公司治理',
                'active' => 1,
                'created_at' => '2021-09-20 08:29:03',
                'updated_at' => '2021-09-20 08:29:03',
            ),
            3 => 
            array (
                'id' => 15,
                'type' => 'page',
                'parent' => 14,
                'slug' => 'board-member',
                'name_en' => 'Board Member',
                'name_id' => 'Anggota Dewan',
                'name_cn' => '董事会成员',
                'active' => 1,
                'created_at' => '2021-09-20 08:38:32',
                'updated_at' => '2021-09-20 09:12:14',
            ),
            4 => 
            array (
                'id' => 16,
                'type' => 'main',
                'parent' => 13,
                'slug' => 'reports-publication',
                'name_en' => 'Reports / Publication',
                'name_id' => 'Laporan / Publikasi',
                'name_cn' => '报告与刊物',
                'active' => 1,
                'created_at' => '2021-09-20 15:07:12',
                'updated_at' => '2021-09-20 15:07:12',
            ),
            5 => 
            array (
                'id' => 17,
                'type' => 'main',
                'parent' => NULL,
                'slug' => 'sustainability',
                'name_en' => 'Sustainability',
                'name_id' => 'Keberlanjutan',
                'name_cn' => '可持续发展',
                'active' => 1,
                'created_at' => '2021-09-20 15:15:13',
                'updated_at' => '2021-09-20 15:15:13',
            ),
        ));
        
        
    }
}