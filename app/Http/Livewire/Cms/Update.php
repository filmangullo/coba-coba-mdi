<?php

namespace App\Http\Livewire\Cms;

use Livewire\Component;
use App\Models\Menu;
use App\Models\Page;

class Update extends Component
{
    public $menu;
    public $edit;
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

    public function mount() {
        $this->type = $this->edit->type;
        $this->parent = $this->edit->parent;
        $this->name_en = $this->edit->name_en;
        $this->name_id = $this->edit->name_id;
        $this->name_cn = $this->edit->name_cn;
        $this->slug = $this->edit->slug;
        if($this->type != 'main') {
            $this->description_en = $this->edit->page->content_en;
            $this->description_id = $this->edit->page->content_id;
            $this->description_cn = $this->edit->page->content_cn;
        }
    }

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
                'slug' => ['required', 'unique:menus,slug,'. $this->edit->id],
            ]);
        } else {
            $this->validate([
                'name_en' => ['required'],
                'name_id' => ['required'],
                'name_cn' => ['required'],
                'slug' => ['required', 'unique:menus,slug,'. $this->edit->id],
            ]);
        }

		$parent = $this->parent == 'null' ? null : $this->parent;

		$menu = Menu::where('id', $this->edit->id)->first();
		$menu->type = $this->type;
		$menu->parent = $parent;
		$menu->slug = $this->slug;
		$menu->name_en = $this->name_en;
		$menu->name_id = $this->name_id;
		$menu->name_cn = $this->name_cn;
		$menu->active = $this->active;
		$menu->save();

		if($menu->type != 'main') {
			$page = Page::where('id', $this->edit->page->id)->first();
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
            if($w != $this->edit->slug) {
                while(Menu::where('slug',$w)->first()) {
                    $w .= rand(0,9);
                }
            }
			$this->slug = $w;
		}
	}

    public function render()
    {
        return view('livewire.cms.update');
    }
}
