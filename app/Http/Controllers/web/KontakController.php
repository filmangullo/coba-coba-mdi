<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index   ');
    }
}
