<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('cms.news.index', [

        ])->render();
    }

    public function create()
    {
        return view('cms.news.create', [

        ])->render();
    }

    public function show()
    {
        return view('livewire.cms.news.show', [

        ])->render();
    }
}
