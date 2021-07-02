<?php

namespace App\Http\Livewire\Web\News;

use Livewire\Component;
use App\Models\News;

class ListContent extends Component
{
    public function paginationView()
    {
        return 'simple-tailwind';
    }

    public function render()
    {
        return view('livewire.web.news.list-content', [
            'news'      => News::where('status', 1)->orderBy('created_at', 'desc')->paginate(11)
        ]);
    }
}
