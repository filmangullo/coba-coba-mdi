<?php

namespace App\Http\Livewire\Cms\News;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $news;

    public $title_id;
    public $title_en;
    public $brief_description_id;
    public $brief_description_en;
    public $content_id;
    public $content_en;
    public $date_news;
    public $status;
    public $cover;

    public function mount($news)
    {
        $this->news = null;

        if($news)
        {
            $this->title_id                 = $news->title_id;
            $this->title_en                 = $news->title_en;
            $this->brief_description_id     = $news->brief_description_id;
            $this->brief_description_en     = $news->brief_description_en;
            $this->content_id               = $news->content_id;
            $this->content_en               = $news->content_en;
            $this->date_news                = $news->date_news;
            $this->status                   = $news->status;
        }
    }

    public function save()
    {

    }
    public function render()
    {
        return view('livewire.cms.news.add-content');
    }
}
