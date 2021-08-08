<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Environment;
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
        $dataEnv = Environment::get();
        return view('sustainability.environment', compact('dataEnv'));
    }
}
