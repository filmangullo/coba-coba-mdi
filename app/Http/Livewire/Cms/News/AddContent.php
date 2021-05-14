<?php

namespace App\Http\Livewire\Cms\News;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\User;
use App\Models\News;

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
    public $author_id;

    public function mount($news)
    {
        $this->news = null;

        if($news)
        {
            $this->news    = $news;

            $this->title_id                 = $this->news->title_id;
            $this->title_en                 = $this->news->title_en;
            $this->brief_description_id     = $this->news->brief_description_id;
            $this->brief_description_en     = $this->news->brief_description_en;
            $this->content_id               = $this->news->content_id;
            $this->content_en               = $this->news->content_en;
            $this->date_news                = $this->news->news_date;
            $this->status                   = $this->news->status;
            $this->author_id                = $this->news->author_id;
        } else {
            $this->date_news                = date("Y-m-d");
            $this->status                   = 1;
        }
        // dd();
    }

    public function save()
    {
        $edit = $this->news ? true : false;

        $rules = [
            'author_id'             => ['required'],
            'date_news'             => ['required'],
            'status'                => ['required'],
            'title_id'              => ['required', 'string'],
            'title_en'              => ['required', 'string'],
            'brief_description_id'  => ['required', 'min:1'],
            'brief_description_en'  => ['required', 'min:1'],
            'content_id'            => ['required', 'min:1'],
            'content_en'            => ['required', 'min:1'],
        ];

        if (!$edit) {
            $rules['cover'] = ['required', 'image', 'max:1024' ];
        }

        $this->validate($rules);

        $news = [
            'author_id'             => $this->author_id,
            'slug'                  => date("Y-m-d", strtotime($this->date_news)).'-'.Str::slug($this->title_id, '-'),
            'news_date'             => $this->date_news,
            'status'                => $this->status,
            'title_id'              => $this->title_id,
            'title_en'              => $this->title_en,
            'brief_description_id'  => $this->brief_description_id,
            'brief_description_en'  => $this->brief_description_en,
            'content_id'            => $this->content_id,
            'content_en'            => $this->content_en
        ];

        if ($this->cover) {
            $news['cover'] = 'storage/'. $this->cover->store('', 'public');
        }


        if ($edit) {
            $this->handleEventUpload($news);
        } else {
            News::create($news);
        }

        return $this->redirectRoute('cms-news.index');
    }

    private function handleEventUpload($news)
    {
        if (isset($news['cover'])) {
            Storage::disk('public')->delete(substr($this->news->cover, 8));
        }

        News::find($this->news->id)
                   ->update($news);
    }

    public function render()
    {
        $users = User::get();

        return view('livewire.cms.news.add-content',[
            'users'        => $users
        ]);
    }
}
