<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\News;

class CareerController extends Controller
{
    public function index()
    {
        return view('career.index', [
            'career'    => Career::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function show($slug)
    {
        return view('career.show', [
            'career'    => Career::where('slug', $slug)->firstOrFail(),
            'news'  => News::where('status', 1)->orderBy('created_at', 'desc')->limit(5)->get()
        ]);
    }

    public function form()
    {
        return view('career.form', [

        ]);
    }
}
