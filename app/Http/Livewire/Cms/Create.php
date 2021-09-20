<?php

namespace App\Http\Livewire\Cms;

use Livewire\Component;
use App\Models\Menu;
use App\Models\Page;

class Create extends Component
{
	public $menu;
	public $disable = false;
	public $aboutdisable = false;
	public $type = 'main';
	public $parent = 'null';
	public $name_en;
	public $name_id;
	public $name_cn;
	public $slug;
	public $description_en;
	public $description_id;
	public $description_cn;
	public $active = true;

	public function disable($w = true, $c = true) {
		$this->disable = $w;
		$this->aboutdisable = $c;
		$this->type = $w ? 'page' : $this->type;
	}

    public function define_about() {
        $this->parent = 'null';
    }

	public function save() {
        if($this->type != 'main') {
            $this->validate([
                'name_en' => ['required'],
                'name_id' => ['required'],
                'name_cn' => ['required'],
                'description_en' => ['required'],
                'description_id' => ['required'],
                'description_cn' => ['required'],
                'slug' => ['required', 'unique:menus,slug'],
            ]);
        } else {
            $this->validate([
                'name_en' => ['required'],
                'name_id' => ['required'],
                'name_cn' => ['required'],
                'slug' => ['required', 'unique:menus,slug'],
            ]);
        }

		$parent = $this->parent == 'null' ? null : $this->parent;

		$menu = new Menu;
		$menu->type = $this->type;
		$menu->parent = $parent;
		$menu->slug = $this->slug;
		$menu->name_en = $this->name_en;
		$menu->name_id = $this->name_id;
		$menu->name_cn = $this->name_cn;
		$menu->active = $this->active;
		$menu->save();

		if($menu->type != 'main') {
			$page = new Page;
			$page->menu = $menu->id;
			$page->content_en = $this->description_en;
			$page->content_id = $this->description_id;
			$page->content_cn = $this->description_cn;
			$page->save();
		}

		redirect()->route('cms.index');
	}

	public function updated($field) {
		if($field == 'name_en')	{
			$w = $this->name_en;
			$w = str_replace(" ","-",$w);
            $w = strtolower($w);
			while(Menu::where('slug',$w)->first()) {
				$w .= rand(0,9);
			}
			$this->slug = $w;
		}
	}

    public function render()
    {
        return view('livewire.cms.create');
    }
}
