<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function update()
    {
        return view('cms.career.update')->render();
    }
}
