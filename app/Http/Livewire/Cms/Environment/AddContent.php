<?php

namespace App\Http\Livewire\Cms\Environment;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Environment;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $env;
    public $img;

    public function save()
    {
        $edit = $this->env ? true : false;

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }

        $this->validate($rules);

        $env = [];

        if ($this->img) {
            $env['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($env);
        } else {
            Environment::create($env);
        }

        return $this->redirectRoute('cms-environment.index');

    }

    private function handleEventUpload($env)
    {
        if (isset($env['img'])) {
            Storage::disk('public')->delete(substr($this->env->img, 8));
        }

        Environment::find($this->env->id)
                   ->update($env);
    }

    public function render()
    {
        return view('livewire.cms.environment.add-content');
    }
}
