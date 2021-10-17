<?php

namespace App\Http\Livewire\Cms\ShareholderInformation;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\ShareholderInformation;

class AddContent extends Component
{
    use WithFileUploads;

    public $shareholders;
    public $info;

    public $id_title;
    public $en_title;
    public $cn_title;
    public $file;

    public function mount($shareholders)
    {
        $this->shareholders = null;

        if($shareholders)
        {
            $this->shareholders = $shareholders;

            $this->id_title         = json_decode($this->shareholders->title)->id;
            $this->en_title         = json_decode($this->shareholders->title)->en;
            $this->cn_title         = json_decode($this->shareholders->title)->cn;
        }
    }

    public function save()
    {
        $edit = $this->shareholders ? true : false;

        $this->rules = [
            'id_title'             => ['required'],
            'en_title'             => ['required'],
            'cn_title'             => ['required'],
        ];

        if (!$edit) {
            $this->rules['file'] = ['required', 'file', 'max:10240' ];
        }

        $this->validate();

        $query = [
            'title'        => json_encode([
                    'id'        => $this->id_title,
                    'en'        => $this->en_title,
                    'cn'        => $this->cn_title
                ]
            )
        ];

        if ($this->file) {
            $query['file'] = 'storage/'. $this->file->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($query);
        } else {
            ShareholderInformation::create($query);
        }

        return $this->redirectRoute('cms-sh.index');
    }

    private function handleEventUpload($query)
    {
        if (isset($query['file'])) {
            Storage::disk('public')->delete(substr($this->shareholders->file, 8));
        }

        ShareholderInformation::find($this->shareholders->id)
                              ->update($query);
    }

    public function render()
    {
        return view('livewire.cms.shareholder-information.add-content');
    }
}
