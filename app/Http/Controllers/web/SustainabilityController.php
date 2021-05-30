<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Csr;

class SustainabilityController extends Controller
{
    public function csr()
    {
        $csr    = Csr::orderBy('created_at', 'desc')->paginate(5);
        return view('sustainability.csr', [
            'csr'       => $csr
        ]);
    }

    public function environment()
    {
        return view('sustainability.environment');
    }
}
