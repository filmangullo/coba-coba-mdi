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
                'updated_at' => '2021-09-22 10:46:37',
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
            6 => 
            array (
                'id' => 18,
                'type' => 'about',
                'parent' => NULL,
                'slug' => 'our-business',
                'name_en' => 'Our Business',
                'name_id' => 'Bisnis',
                'name_cn' => '业务',
                'active' => 1,
                'created_at' => '2021-09-22 08:55:54',
                'updated_at' => '2021-09-22 09:00:12',
            ),
            7 => 
            array (
                'id' => 19,
                'type' => 'about',
                'parent' => NULL,
                'slug' => 'vision-&-mission',
                'name_en' => 'Vision & Mission',
                'name_id' => 'Visi dan Misi',
                'name_cn' => '愿景和使命',
                'active' => 1,
                'created_at' => '2021-09-22 09:30:47',
                'updated_at' => '2021-09-22 09:30:47',
            ),
            8 => 
            array (
                'id' => 20,
                'type' => 'about',
                'parent' => NULL,
                'slug' => 'milestones',
                'name_en' => 'Milestones',
                'name_id' => 'Rekam Jejak',
                'name_cn' => '里程碑',
                'active' => 1,
                'created_at' => '2021-09-22 09:58:24',
                'updated_at' => '2021-09-22 10:01:56',
            ),
            9 => 
            array (
                'id' => 21,
                'type' => 'page',
                'parent' => 14,
                'slug' => 'organization-structure',
                'name_en' => 'Organization Structure',
                'name_id' => 'Struktur Organisasi',
                'name_cn' => '组织结构',
                'active' => 1,
                'created_at' => '2021-09-22 11:19:06',
                'updated_at' => '2021-09-22 11:25:14',
            ),
            10 => 
            array (
                'id' => 22,
                'type' => 'page',
                'parent' => 14,
                'slug' => 'audit-committee',
                'name_en' => 'Audit Committee',
                'name_id' => 'Komite Audit',
                'name_cn' => '审计委员会',
                'active' => 1,
                'created_at' => '2021-09-22 11:24:35',
                'updated_at' => '2021-09-22 11:26:20',
            ),
            11 => 
            array (
                'id' => 23,
                'type' => 'page',
                'parent' => 13,
                'slug' => 'shareholders-information',
                'name_en' => 'Shareholders Information',
                'name_id' => 'Informasi Pemegang Saham',
                'name_cn' => '关于股东的信息',
                'active' => 1,
                'created_at' => '2021-09-22 14:33:15',
                'updated_at' => '2021-09-22 14:33:15',
            ),
            12 => 
            array (
                'id' => 24,
                'type' => 'page',
                'parent' => 13,
                'slug' => 'financial-highlight',
                'name_en' => 'Financial Highlight',
                'name_id' => 'Sorotan Keuangan',
                'name_cn' => '财务亮点',
                'active' => 1,
                'created_at' => '2021-09-22 15:25:32',
                'updated_at' => '2021-09-22 15:26:53',
            ),
            13 => 
            array (
                'id' => 26,
                'type' => 'page',
                'parent' => 13,
                'slug' => 'prospectus',
                'name_en' => 'Prospectus',
                'name_id' => 'Prospektus',
                'name_cn' => '招股说明书',
                'active' => 1,
                'created_at' => '2021-09-22 15:59:51',
                'updated_at' => '2021-09-22 16:06:39',
            ),
            14 => 
            array (
                'id' => 27,
                'type' => 'page',
                'parent' => 16,
                'slug' => 'dividend-information',
                'name_en' => 'Dividend Information',
                'name_id' => 'Informasi Dividen',
                'name_cn' => '股利信息',
                'active' => 1,
                'created_at' => '2021-09-22 16:09:47',
                'updated_at' => '2021-09-22 16:09:47',
            ),
        ));
        
        
    }
}