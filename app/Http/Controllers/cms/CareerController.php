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
        return view('livewire.cms.career.create')->render();
    }
}
