<?php

namespace App\Http\Livewire\Web\Sustainability;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Csr;
use PhpParser\Node\Expr\FuncCall;

class Csrs extends Component
{
    use WithPagination;

    public $shw;

    public function show($id)
    {
        $this->shw = Csr::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.web.sustainability.csrs', [
            'dataCSR' => Csr::paginate(12),
        ]);
    }
}
