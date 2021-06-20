<?php

namespace App\Http\Livewire\Web\Sustainability;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Csr;

class Csrs extends Component
{
    use WithPagination;
    public $nowPreview;

    public function mount()
    {
        if(!$this->nowPreview)
        {
            $this->nowPreview = Csr::orderBy('date', 'desc')->first();
        }
    }

    public function preview($id)
    {
        $this->nowPreview = Csr::findOrFail($id);
    }

    public function render()
    {
        $csr =  Csr::orderBy('date', 'desc')->paginate(10);

        return view('livewire.web.sustainability.csrs', [
            'csr' => $csr
        ]);
    }
}
