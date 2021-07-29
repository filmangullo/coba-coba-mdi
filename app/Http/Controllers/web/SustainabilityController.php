<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Csr;

class SustainabilityController extends Controller
{
    public function csr()
    {
        return view('sustainability.csr');
    }

    public function environment()
    {
        return view('sustainability.environment');
    }
}
