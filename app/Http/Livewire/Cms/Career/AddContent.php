<?php

namespace App\Http\Livewire\Cms\Career;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Career;
use App\Models\User;

class AddContent extends Component
{
    public $career;

    public $publish_date;
    public $author;
    public $position_id;
    public $brief_description_id;
    public $description_id      = '';
    public $position_en;
    public $brief_description_en;
    public $description_en      = '';

    public function mount($career)
    {
        $this->career = null;

        if($career)
        {
            $this->career    = $career;

            $this->publish_date             = $this->career->publish_date;
            $this->author                   = $this->career->author;
            $this->position_id              = $this->career->position_id;
            $this->brief_description_id     = $this->career->brief_description_id;
            $this->description_id           = $this->career->description_id;
            $this->position_en              = $this->career->position_en;
            $this->brief_description_en     = $this->career->brief_description_en;
            $this->description_en           = $this->career->description_en;

        }
    }

    public function save()
    {
        $edit = $this->career ? true : false;

        $rules = [
            'publish_date'          => ['required'],
            'author'                => ['required'],
            'position_id'           => ['required','min:1'],
            'brief_description_id'  => ['required', 'min:1'],
            'description_id'        => ['required'],
            'position_en'           => ['required','min:1'],
            'brief_description_en'  => ['required', 'min:1'],
            'description_en'        => ['required'],
        ];

        // dd($this->validate($rules);

        $career = [
            'publish_date'              => $this->publish_date,
            'author_id'                 => $this->author,
            'slug'                      => $this->publish_date.'-'.Str::slug($this->position_id, '-'),
            'job_position_id'           => $this->position_id,
            'brief_description_id'      => $this->brief_description_id,
            'description_id'            => $this->description_id,
            'job_position_en'           => $this->position_en,
            'brief_description_en'      => $this->brief_description_en,
            'description_en'            => $this->description_en,
        ];
        // dd($career);
        if ($edit) {
            Career::find($this->career->id)
                              ->update($career);
        } else {
            Career::create($career);
        }

        return $this->redirectRoute('cms-career.index');
    }
    public function render()
    {
        $users = User::get();
        return view('livewire.cms.career.add-content',[
            'users'        => $users
        ]);
    }
}
