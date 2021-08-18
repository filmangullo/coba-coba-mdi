<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_product' => 1,
                'img' => 'storage/MaMqzcjQxutdjVzgTEPgvtDKPQ8LAcCG3nC6uQSR.jpg',
                'created_at' => '2021-08-18 08:06:17',
                'updated_at' => '2021-08-18 08:06:17',
            ),
            1 => 
            array (
                'id' => 2,
                'is_product' => 1,
                'img' => 'storage/eQdxuW9NIXoNvYcYpeL041GM1wPRN4mubzX2ksEZ.jpg',
                'created_at' => '2021-08-18 08:07:04',
                'updated_at' => '2021-08-18 08:07:04',
            ),
            2 => 
            array (
                'id' => 3,
                'is_product' => 1,
                'img' => 'storage/THiBVZex0ONrks2iNqFBud6mQwi1nJaLijTNB9eg.jpg',
                'created_at' => '2021-08-18 08:07:09',
                'updated_at' => '2021-08-18 08:07:09',
            ),
            3 => 
            array (
                'id' => 4,
                'is_product' => 1,
                'img' => 'storage/cMwkLPXczfJe8jO0P0GfGJ44eWQgVINSz1A0ILma.jpg',
                'created_at' => '2021-08-18 08:07:17',
                'updated_at' => '2021-08-18 08:07:17',
            ),
            4 => 
            array (
                'id' => 5,
                'is_product' => 1,
                'img' => 'storage/yv5gJr0G3lLUX4cRmrEjzdhjmQnYC8EjaEgs8HtM.jpg',
                'created_at' => '2021-08-18 08:07:22',
                'updated_at' => '2021-08-18 08:07:22',
            ),
            5 => 
            array (
                'id' => 6,
                'is_product' => 1,
                'img' => 'storage/fnqQC3cNoBv3vLcYsMltvqgy53gAN8NCSmlMi4Un.jpg',
                'created_at' => '2021-08-18 08:07:32',
                'updated_at' => '2021-08-18 08:07:32',
            ),
            6 => 
            array (
                'id' => 7,
                'is_product' => 1,
                'img' => 'storage/AfWhg0df9FdhRm6keugEOYjVVuM9ka1oSvtBqdDq.jpg',
                'created_at' => '2021-08-18 08:07:40',
                'updated_at' => '2021-08-18 08:07:40',
            ),
            7 => 
            array (
                'id' => 8,
                'is_product' => 1,
                'img' => 'storage/tOdGgZxl7OU06kgdnm1nvzd9BF04v0YEOttsHkGW.jpg',
                'created_at' => '2021-08-18 08:07:47',
                'updated_at' => '2021-08-18 08:07:47',
            ),
            8 => 
            array (
                'id' => 9,
                'is_product' => 1,
                'img' => 'storage/TABB83DtKZCv2HOKXVCKah4A5YufJxupA10TBmvZ.jpg',
                'created_at' => '2021-08-18 08:07:53',
                'updated_at' => '2021-08-18 08:07:53',
            ),
            9 => 
            array (
                'id' => 10,
                'is_product' => 1,
                'img' => 'storage/CjY7DScJkixpi4kvpD5qcfsfx98UP1c4yHFPcucs.jpg',
                'created_at' => '2021-08-18 08:07:59',
                'updated_at' => '2021-08-18 08:07:59',
            ),
            10 => 
            array (
                'id' => 11,
                'is_product' => 1,
                'img' => 'storage/msKXmpdJdtKSpCjGit45QAZnsW3cKkmoTkfvsHRb.jpg',
                'created_at' => '2021-08-18 08:08:06',
                'updated_at' => '2021-08-18 08:08:06',
            ),
            11 => 
            array (
                'id' => 12,
                'is_product' => 1,
                'img' => 'storage/scBeratyfRTRcnhbjBJGFzfvUj6Y3Zp9MDsharbK.jpg',
                'created_at' => '2021-08-18 08:08:12',
                'updated_at' => '2021-08-18 08:08:12',
            ),
            12 => 
            array (
                'id' => 13,
                'is_product' => 1,
                'img' => 'storage/fbhKmdg368aIAAlPLIPb1UAjHlQG4TyO0vIGOgxP.jpg',
                'created_at' => '2021-08-18 08:08:18',
                'updated_at' => '2021-08-18 08:08:18',
            ),
            13 => 
            array (
                'id' => 14,
                'is_product' => 1,
                'img' => 'storage/A0ph5xyyYwPKis8RPoDadEBAfGFUNqRfqazMQE7H.jpg',
                'created_at' => '2021-08-18 08:08:24',
                'updated_at' => '2021-08-18 08:08:24',
            ),
            14 => 
            array (
                'id' => 15,
                'is_product' => 1,
                'img' => 'storage/f07gb1OINwzXHQkpy36YRi5J1FsXAA1MTr7Q00Sl.jpg',
                'created_at' => '2021-08-18 08:08:30',
                'updated_at' => '2021-08-18 08:08:30',
            ),
            15 => 
            array (
                'id' => 16,
                'is_product' => 1,
                'img' => 'storage/Ylq0QMpqGOhqLWSflE8VKAIMfqcKan9aWknrkuhD.jpg',
                'created_at' => '2021-08-18 08:08:36',
                'updated_at' => '2021-08-18 08:08:36',
            ),
            16 => 
            array (
                'id' => 17,
                'is_product' => 1,
                'img' => 'storage/Tce9Z3vdyaGQ3NgQMsun3i7UyVjp5PYpIHkIFdtd.jpg',
                'created_at' => '2021-08-18 08:08:41',
                'updated_at' => '2021-08-18 08:08:41',
            ),
            17 => 
            array (
                'id' => 18,
                'is_product' => 1,
                'img' => 'storage/qY5fQFbAXdbTeJm4bRJ2xJJt7G84vw8CG6MVCJ3L.jpg',
                'created_at' => '2021-08-18 08:08:47',
                'updated_at' => '2021-08-18 08:08:47',
            ),
        ));
        
        
    }
}