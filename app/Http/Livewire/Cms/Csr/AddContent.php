<?php

namespace App\Http\Livewire\Cms\Csr;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Csr;

class AddContent extends Component
{
    use WithFileUploads;
    public $csr;

    public $date;
    public $slug;
    public $title_id;
    public $description_id      = '';
    public $title_en;
    public $description_en      = '';
    public $img;

    public function mount($csr)
    {
        $this->csr = null;

        if($csr)
        {
            $this->csr                      = $csr;

            $this->date                     = $this->csr->date;
            $this->slug                     = $this->csr->slug;
            $this->title_id                 = $this->csr->title_id;
            $this->description_id           = $this->csr->description_id;
            $this->title_en                 = $this->csr->title_en;
            $this->description_en           = $this->csr->description_en;
        } else {
            $this->date                     = date("Y-m-d");
        }
    }

    public function save()
    {
        $edit = $this->csr ? true : false;

        $rules = [
            'date'                      => ['required'],
            'title_id'                  => ['required'],
            'description_id'            => ['required'],
            'title_en'                  => ['required'],
            'description_en'            => ['required'],
        ];

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }
        $this->validate($rules);

        $csr = [
            'slug'                      => date("Y-m-d", strtotime($this->date)).'-'.Str::slug($this->title_id, '-'),
            'date'                      => $this->date,
            'title_id'                  => $this->title_id,
            'description_id'            => $this->description_id,
            'title_en'                  => $this->title_en,
            'description_en'            => $this->description_en,
        ];

        if ($this->img) {
            $csr['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($csr);
        } else {
            Csr::create($csr);
        }

        return $this->redirectRoute('cms-csr.index');
    }

    private function handleEventUpload($csr)
    {
        if (isset($csr['img'])) {
            Storage::disk('public')->delete(substr($this->csr->img, 8));
        }

        Csr::find($this->csr->id)
                   ->update($csr);
    }

    public function render()
    {
        return view('livewire.cms.csr.add-content');
    }
}
