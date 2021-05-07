<?php

namespace App\Http\Livewire\Web\Welcome;

use Livewire\Component;
use App\Models\News;
class ShortListNews extends Component
{
    public $news;
    public function mount()
    {
        $this->news = News::orderBy('created_at', 'desc')
                            ->limit(4)
                            ->get();
    }

    public function render()
    {
        return view('livewire.web.welcome.short-list-news');
    }
}
