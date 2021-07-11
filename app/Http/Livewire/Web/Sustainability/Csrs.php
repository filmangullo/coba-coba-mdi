<?php

namespace App\Http\Livewire\Web\Sustainability;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Csr;

class Csrs extends Component
{
    use WithPagination;

    public function render()
    {
        $csr =  Csr::orderBy('date', 'desc')->paginate(12);

        return view('livewire.web.sustainability.csrs', [
            'csr' => $csr
        ]);
    }
}
