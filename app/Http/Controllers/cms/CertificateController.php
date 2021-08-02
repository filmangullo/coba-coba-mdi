<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        return view('cms.certificates.index');
    }

    public function create()
    {
        return view('cms.certificates.create')->render();
    }

    public function update($id)
    {
        $query  = Certificate::where('id', $id)->firstOrFail();

        return view('cms.certificates.update', compact('query'))->render();
    }

}
