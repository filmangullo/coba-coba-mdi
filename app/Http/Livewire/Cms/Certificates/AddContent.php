<?php

namespace App\Http\Livewire\Cms\Certificates;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Certificate;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;
    public $certificates;

    public $title_id;
    public $title_en;
    public $img;

    public function mount($certificates)
    {
        $this->certificates = null;

        if($certificates)
        {
            $this->certificates      = $certificates;

            $this->title_id                 = $this->certificates->title_id;
            $this->title_en                 = $this->certificates->title_en;
        }
    }

    public function save()
    {
        $edit = $this->certificates ? true : false;

        $rules = [
            'title_id'                  => ['required'],
            'title_en'                  => ['required'],
        ];

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }
        $this->validate($rules);

        $certificates = [
            'title_id'                  => $this->title_id,
            'title_en'                  => $this->title_en,
        ];

        if ($this->img) {
            $certificates['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($certificates);
        } else {
            Certificate::create($certificates);
        }

        return $this->redirectRoute('cms-certificates.index');
    }

    private function handleEventUpload($certificates)
    {
        if (isset($certificates['img'])) {
            Storage::disk('public')->delete(substr($this->certificates->cover, 8));
        }

        Certificate::find($this->certificates->id)
                          ->update($certificates);
    }

    public function render()
    {
        return view('livewire.cms.certificates.add-content');
    }
}
