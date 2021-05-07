<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
class CareerController extends Controller
{
    public function index()
    {
        return view('cms.career.index');
    }

    public function create()
    {
        return view('cms.career.create')->render();
    }

    public function update($id)
    {
        $query  = Career::where('id', $id)->firstOrFail();

        return view('cms.career.update', compact('query'))->render();
    }

    public function show($id)
    {
        $query  = Career::where('id', $id)->firstOrFail();

        return view('cms.career.show', compact('query'))->render();
    }
}
