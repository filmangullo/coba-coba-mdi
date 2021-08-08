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

    public $title_id;
    public $description_id      = '';
    public $title_en;
    public $description_en      = '';

    public function mount($env)
    {
        $this->env = null;

        if($env)
        {
            $this->env      = $env;

            $this->title_id                 = $this->env->title_id;
            $this->description_id           = $this->env->description_id;
            $this->title_en                 = $this->env->title_en;
            $this->description_en           = $this->env->description_en;
        }
    }

    public function save()
    {
        $edit = $this->env ? true : false;

        $rules = [
            'title_id'                  => ['required'],
            'description_id'            => ['required'],
            'title_en'                  => ['required'],
            'description_en'            => ['required'],
        ];

        $this->validate($rules);

        $env = [
            'title_id'                  => $this->title_id,
            'description_id'            => $this->description_id,
            'title_en'                  => $this->title_en,
            'description_en'            => $this->description_en,
        ];

        if ($edit) {
            $this->handleEventUpload($env);
        } else {
            Environment::create($env);
        }

        return $this->redirectRoute('cms-environment.index');

    }

    private function handleEventUpload($env)
    {
        Environment::find($this->env->id)
                   ->update($env);
    }

    public function render()
    {
        return view('livewire.cms.environment.add-content');
    }
}
