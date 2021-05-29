<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Csr;

class CsrController extends Controller
{
    public function index()
    {
        return view('cms.csr.index');
    }

    public function create()
    {
        return view('cms.csr.create')->render();
    }

    public function update($id)
    {
        $query  = Csr::where('id', $id)->firstOrFail();

        return view('cms.csr.update', compact('query'))->render();
    }

    public function show($id)
    {
        $query  = Csr::where('id', $id)->firstOrFail();

        return view('cms.csr.show', compact('query'))->render();
    }
}
