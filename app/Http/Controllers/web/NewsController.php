<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function list()
    {
        return view('news.list', [

        ]);
    }

    public function show($slug)
    {
        return view('news.show', [
            'news'  => News::where('slug', $slug)->firstOrFail(),
            'list'  => News::where('status', 1)->orderBy('created_at', 'desc')->limit(5)->get()
        ]);
    }
}
