<?php

namespace App\Http\Livewire\Cms\ShareholderInformation;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\ShareholderInformation;

class ListContent extends Component
{
    use WithPagination;

    public function render()
    {
        $query = ShareholderInformation::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.cms.shareholder-information.list-content', [
            'sh'        => $query
        ]);
    }
}
