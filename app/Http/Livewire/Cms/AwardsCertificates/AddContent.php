<?php

namespace App\Http\Livewire\Cms\AwardsCertificates;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\AwardsCertificates;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;
    public $awards_certificates;

    public $title_id;
    public $description_id      = '';
    public $title_en;
    public $description_en      = '';
    public $img;

    public function mount($awards_certificates)
    {
        $this->awards_certificates = null;

        if($awards_certificates)
        {
            $this->awards_certificates      = $awards_certificates;

            $this->title_id                 = $this->awards_certificates->title_id;
            $this->description_id           = $this->awards_certificates->description_id;
            $this->title_en                 = $this->awards_certificates->title_en;
            $this->description_en           = $this->awards_certificates->description_en;
        }
    }

    public function save()
    {
        $edit = $this->awards_certificates ? true : false;

        $rules = [
            'title_id'                  => ['required'],
            'description_id'            => ['required'],
            'title_en'                  => ['required'],
            'description_en'            => ['required'],
        ];

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }
        $this->validate($rules);

        $awards_certificates = [
            'title_id'                  => $this->title_id,
            'description_id'            => $this->description_id,
            'title_en'                  => $this->title_en,
            'description_en'            => $this->description_en,
        ];

        if ($this->img) {
            $awards_certificates['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($awards_certificates);
        } else {
            AwardsCertificates::create($awards_certificates);
        }

        return $this->redirectRoute('cms-awards-certificates.index');
    }

    private function handleEventUpload($awards_certificates)
    {
        if (isset($awards_certificates['img'])) {
            Storage::disk('public')->delete(substr($this->awards_certificates->cover, 8));
        }

        AwardsCertificates::find($this->awards_certificates->id)
                          ->update($awards_certificates);
    }

    public function render()
    {
        return view('livewire.cms.awards-certificates.add-content');
    }
}
