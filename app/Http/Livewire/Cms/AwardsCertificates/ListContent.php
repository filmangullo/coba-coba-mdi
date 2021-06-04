<?php

namespace App\Http\Livewire\Cms\AwardsCertificates;

use App\Models\AwardsCertificates;
use Livewire\WithPagination;
use Livewire\Component;

class ListContent extends Component
{
    use WithPagination;

    public function render()
    {
        $list  = AwardsCertificates::orderBy('created_at', 'desc')
                                   ->paginate(6);

        return view('livewire.cms.awards-certificates.list-content', [
            'list'       => $list
        ]);
    }
}
