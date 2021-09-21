<?php

namespace App\Http\Livewire\Cms\Slider;

use Livewire\Component;

class AddContent extends Component
{
    public $file;
    public function render()
    {
        return view('livewire.cms.slider.add-content');
    }
}
