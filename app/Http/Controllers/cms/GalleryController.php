<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        return view('cms.gallery.index');
    }

    public function create()
    {
        return view('cms.gallery.create', [
            'image'         => null
        ]);
    }

    public function update($id)
    {
        return view('cms.gallery.update', [
            'image'         => Gallery::findOrFail($id)
        ]);
    }
}
