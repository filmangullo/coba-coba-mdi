<?php

namespace App\Http\Livewire\Cms\Career;

use Livewire\Component;
use App\Models\User;

class Create extends Component
{
    public function render()
    {
        $author = User::get();
        return view('livewire.cms.career.create', [
            'author'        => $author
        ]);
    }
}
