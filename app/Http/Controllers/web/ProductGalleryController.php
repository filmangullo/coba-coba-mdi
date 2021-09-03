<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class ProductGalleryController extends Controller
{
    public function list()
    {
        $product = Gallery::where('is_product', true)
                                    ->orderBy('created_at', 'desc')
                                    ->get();
        return view('product-gallery.list', [
            'product'       => $product
        ]);
    }
}
