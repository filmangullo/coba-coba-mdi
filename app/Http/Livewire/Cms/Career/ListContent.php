<?php

namespace App\Http\Livewire\Cms\Career;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Career;
use App\Models\Setting;

class ListContent extends Component
{
    use WithPagination;
    public $active;

    public function mount() {
        $setting = Setting::where('name', 'career')->first();
        $set = $setting ?? false;
        if($set)
            $this->active = $set->active;
        else {
            $this->active = true;
            $set = new Setting;
            $set->active = true;
            $set->name = 'career';
            $set->save();
        }
    }

    public function career() {
        $set = Setting::where('name', 'career')->first();
        $set->active = $set->active ? false : true;
        $set->save();
        $this->active = $set->active;
    }

    public function render()
    {
        $listCareer  = Career::orderBy('created_at', 'desc')
                             ->paginate(6);
        return view('livewire.cms.career.list-content', [
            'listCareer'       => $listCareer
        ]);
    }
}
