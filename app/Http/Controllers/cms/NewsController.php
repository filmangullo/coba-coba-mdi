<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

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
            'news'      => null
        ])->render();
    }

    public function update($id)
    {
        return view('cms.news.update', [
            'news'      => News::where('id', $id)->firstOrFail()
        ])->render();
    }

    public function show()
    {
        return view('livewire.cms.news.show', [

        ])->render();
    }
}
