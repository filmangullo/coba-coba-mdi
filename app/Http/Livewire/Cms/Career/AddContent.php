<?php

namespace App\Http\Livewire\Cms\Career;

use Livewire\Component;
use App\Models\User;

class AddContent extends Component
{
    public $event;


    public function render()
    {
        $author = User::get();
        return view('livewire.cms.career.add-content',[
            'author'        => $author
        ]);
    }
}
