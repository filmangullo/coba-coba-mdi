<?php

namespace App\Http\Livewire\Cms\News;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\News;
class ListContent extends Component
{
    public function render()
    {
        $news       = News::paginate(10);

        return view('livewire.cms.news.list-content', [
            'news'      => $news
        ]);
    }
}
