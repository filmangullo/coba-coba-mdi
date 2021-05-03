<?php

namespace App\Http\Livewire\Cms\Career;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Career;

class ListContent extends Component
{
    use WithPagination;

    public function render()
    {
        $listCareer  = Career::orderBy('created_at', 'desc')
                             ->paginate(6);
        return view('livewire.cms.career.list-content', [
            'listCareer'       => $listCareer
        ]);
    }
}
