<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    public function list()
    {
        return view('product-gallery.list');
    }
}
