<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AwardsCertificates;

class AboutUsController extends Controller
{
    public function awardsCertificates()
    {
        $ac = AwardsCertificates::orderBy('created_at', 'desc')->paginate(5);
        return view('aboutus.awards', [
            'ac'        => $ac
        ]);
    }
}
