<?php

namespace App\Http\Livewire\Cms\Certificates;


use App\Models\Certificate;
use Livewire\Component;
use Livewire\WithPagination;

class ListContent extends Component
{
    use WithPagination;

    public function render()
    {
        $list  = Certificate::orderBy('created_at', 'desc')
                                   ->paginate(6);
        return view('livewire.cms.certificates.list-content', [
            'list'       => $list
        ]);
    }
}
