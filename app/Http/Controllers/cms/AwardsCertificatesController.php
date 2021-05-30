<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\AwardsCertificates;
use Illuminate\Http\Request;

class AwardsCertificatesController extends Controller
{
    public function index()
    {
        return view('cms.awards-certificates.index');
    }

    public function create()
    {
        return view('cms.awards-certificates.create')->render();
    }

    public function update($id)
    {
        $query  = AwardsCertificates::where('id', $id)->firstOrFail();

        return view('cms.awards-certificates.update', compact('query'))->render();
    }

}
