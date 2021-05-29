<?php

namespace App\Http\Livewire\Cms\Csr;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Csr;

class ListContent extends Component
{
    use WithPagination;

    public function render()
    {
        $csr       = Csr::orderBy('created_at', 'desc')
                            ->paginate(5);

        return view('livewire.cms.csr.list-content', [
            'csr'      => $csr
        ]);
    }
}
