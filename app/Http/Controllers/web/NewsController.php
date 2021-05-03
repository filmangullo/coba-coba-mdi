<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        ]);
    }
}
