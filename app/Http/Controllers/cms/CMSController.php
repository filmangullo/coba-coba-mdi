<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class CMSController extends Controller
{
    public function index() {
		$menu = Menu::where('parent',null)->orderBy('name_en', 'asc')->paginate(20);
		return view('cms.index', compact('menu'));
	}

	public function create() {
		$menu = Menu::where('parent',null)->orderBy('name_en', 'asc')->get();
		return view('cms.create', compact('menu'));
	}

    public function update($id) {
        $menu = Menu::where('parent',null)->orderBy('name_en', 'asc')->get();
        $edit = Menu::where('id',$id)->first();
        return view('cms.update', compact('menu', 'edit'));
    }

    public function delete(Request $request) {
        $menu = Menu::where('id', $request->id)->first();
        if($menu->child->count()) {
            session()->flash('fail', 'Menu ini punya turunan, tidak bisa di hapus hingga turunannya sudah di hapus terlebih dahulu.');
            return redirect()->back();
        }
        session()->flash('success', 'Anda telah berhasil menghapus '. $menu->name_en . '!');
        $menu->delete();
        return redirect()->back();
    }
}
