<?php

namespace App\Http\Livewire\Cms\Environment\Img;

use Illuminate\Support\Facades\Storage;
use App\Models\EnvironmentImg;
use Livewire\WithFileUploads;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $idEnv;
    public $envImg;
    public $img;

    public function save()
    {
        $edit = $this->envImg ? true : false;

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }
        $this->validate($rules);

        if ($this->img) {
            $envImg['environment_id'] = $this->idEnv;
            $envImg['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($envImg);
        } else {
            EnvironmentImg::create($envImg);
        }

        return $this->redirectRoute('cms-environment.index');
    }

    private function handleEventUpload($envImg)
    {
        if (isset($envImg['img'])) {
            Storage::disk('public')->delete(substr($this->envImg->cover, 8));
        }

        EnvironmentImg::find($this->envImg->id)
                          ->update($envImg);
    }

    public function render()
    {
        return view('livewire.cms.environment.img.add-content');
    }
}
