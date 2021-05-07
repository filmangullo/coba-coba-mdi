<?php

namespace App\Http\Livewire\Cms\News;

use Livewire\Component;

class ShowContent extends Component
{
    public $news;

    public function render()
    {
        return view('livewire.cms.news.show-content');
    }
}
