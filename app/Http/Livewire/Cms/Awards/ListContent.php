<?php

namespace App\Http\Livewire\Cms\Awards;

use App\Models\Award;
use Livewire\WithPagination;
use Livewire\Component;

class ListContent extends Component
{
    use WithPagination;

    public function render()
    {
        $list  = Award::orderBy('year', 'desc')
                                   ->paginate(6);

        return view('livewire.cms.awards.list-content', [
            'list'       => $list
        ]);
    }
}
