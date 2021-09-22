<?php

namespace App\Http\Livewire\Cms\Slider;

use Livewire\Component;
use App\Models\Slider;

class ListContent extends Component
{
    public function render()
    {
        $sliders = Slider::orderBy('created_at', 'asc')->paginate(6);
        return view('livewire.cms.slider.list-content', [
            'sliders' => $sliders,
        ]);
    }
}
