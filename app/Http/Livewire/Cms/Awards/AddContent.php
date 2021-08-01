<?php

namespace App\Http\Livewire\Cms\Awards;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Award;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;
    public $awards;

    public $title_id;
    public $description_id      = '';
    public $title_en;
    public $description_en      = '';
    public $year;
    public $img;

    public function mount($awards)
    {
        $this->awards = null;

        if($awards)
        {
            $this->awards      = $awards;

            $this->title_id                 = $this->awards->title_id;
            $this->description_id           = $this->awards->description_id;
            $this->title_en                 = $this->awards->title_en;
            $this->description_en           = $this->awards->description_en;
            $this->year                     = $this->awards->year;
        }
    }

    public function save()
    {
        $edit = $this->awards ? true : false;

        $rules = [
            'title_id'                  => ['required'],
            'description_id'            => ['required'],
            'title_en'                  => ['required'],
            'description_en'            => ['required'],
            'year'                      => ['required'],
        ];

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }
        $this->validate($rules);

        $awards = [
            'title_id'                  => $this->title_id,
            'description_id'            => $this->description_id,
            'title_en'                  => $this->title_en,
            'description_en'            => $this->description_en,
            'year'                      => $this->year,
        ];

        if ($this->img) {
            $awards['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($awards);
        } else {
            Award::create($awards);
        }

        return $this->redirectRoute('cms-awards.index');
    }

    private function handleEventUpload($awards)
    {
        if (isset($awards['img'])) {
            Storage::disk('public')->delete(substr($this->awards->cover, 8));
        }

        Award::find($this->awards->id)
                          ->update($awards);
    }

    public function render()
    {
        return view('livewire.cms.awards.add-content');
    }
}
