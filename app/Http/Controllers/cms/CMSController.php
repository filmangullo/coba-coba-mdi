<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class CMSController extends Controller
{
    public function index() {
		$menu = Menu::where('parent',null)->paginate(20);
		return view('cms.index', compact('menu'));
	}

	public function create() {
		$menu = Menu::where('parent',null)->get();
		return view('cms.create', compact('menu'));
	}
}
