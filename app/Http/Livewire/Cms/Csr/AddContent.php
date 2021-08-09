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

    public $description_id      = '';

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

            $this->description_id           = $this->csr->description_id;

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

            'description_id'            => ['required'],

            'description_en'            => ['required'],
        ];

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }
        $this->validate($rules);

        $csr = [
            'slug'                      => date("Y-m-d", strtotime($this->date)).'-'.Str::random(40),
            'date'                      => $this->date,

            'description_id'            => $this->description_id,

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
