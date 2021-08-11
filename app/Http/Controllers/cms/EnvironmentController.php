<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\EnvironmentImg;
use Illuminate\Http\Request;
use App\Models\Environment;

class EnvironmentController extends Controller
{
    public function index()
    {
        return view('cms.environment.index');
    }

    public function create()
    {
        return view('cms.environment.create')->render();
    }

    public function update($id)
    {
        $query  = Environment::where('id', $id)->firstOrFail();

        return view('cms.environment.update', compact('query'))->render();
    }

    public function createImg($id)
    {
        return view('cms.environment.img.create', [
            'idEnv'        => $id
        ]);
    }

    public function updateImg($id)
    {
        $query  = EnvironmentImg::where('id', $id)->firstOrFail();

        return view('cms.environment.img.update', compact('query'))->render();
    }
}
