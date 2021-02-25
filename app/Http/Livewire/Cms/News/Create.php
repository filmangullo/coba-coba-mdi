<?php

namespace App\Http\Livewire\Cms\News;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $drief_description;
    public $date_news;
    public $status;
    public $content;

    public function render()
    {
        return view('livewire.cms.news.create');
    }
}
