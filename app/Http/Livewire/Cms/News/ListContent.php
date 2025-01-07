<?php

namespace App\Http\Livewire\Cms\News;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\News;
class ListContent extends Component
{
    use WithPagination;

    public function delete($id) {
         $news       = News::where("id", $id)->first();

        $news->delete();
    }
    public function render()
    {
        $news       = News::orderBy('news_date', 'desc')
                            ->paginate(5);

        return view('livewire.cms.news.list-content', [
            'news'      => $news
        ]);
    }
}
