<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\Certificate;

class AboutUsController extends Controller
{
    public function awards()
    {
        $ac = Award::orderBy('year', 'asc')->get();
        return view('aboutus.awards', [
            'ac'        => $ac
        ]);
    }

    public function certificates()
    {
        $ac = Certificate::orderBy('created_at', 'desc')->get();
        return view('aboutus.certificates', [
            'ac'        => $ac
        ]);
    }
}
