<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function mergeDB()
    // {
    //     $wp_posts = DB::table('wp_posts')->get();
    //     $data = [];
    //     foreach($wp_posts as $key => $posts)
    //     {
    //         $data [] = [
    //             'author_id'                 => 3,
    //             'slug'                      => $posts->post_name,
    //             'news_date'                 => date("Y-m-d", strtotime($posts->post_date)),
    //             'status'                    => true,
    //             'cover'                     => 'img/general_news.png',
    //             'title_id'                  => $posts->post_title,
    //             'title_en'                  => $posts->post_title,
    //             'brief_description_id'      => strip_tags($posts->post_content),
    //             'brief_description_en'      => strip_tags($posts->post_content),
    //             'content_id'                => $posts->post_content,
    //             'content_en'                => $posts->post_content,
    //             'created_at'                => $posts->post_date,
    //             'updated_at'                => $posts->post_modified
    //         ];
    //         if(News::where('slug', $data[$key]['slug'])->doesntExist())
    //         {
    //             News::create($data[$key]);
    //         }

    //     }

    // }
}
