<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        return view('cms.awards.index');
    }

    public function create()
    {
        return view('cms.awards.create')->render();
    }

    public function update($id)
    {
        $query  = Award::where('id', $id)->firstOrFail();

        return view('cms.awards.update', compact('query'))->render();
    }

}
