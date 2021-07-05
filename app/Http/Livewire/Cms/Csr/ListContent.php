<?php

namespace App\Http\Livewire\Cms\Csr;

use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Csr;

class ListContent extends Component
{
    use WithPagination;

    public $modalDelete = false;
    public $idFileDelete;

    public function openModalDelete($id)
    {

        $this->modalDelete      = true;
        $this->idFileDelete     = $id;
    }

    public function delete($id)
    {
        $csr = Csr::findOrFail($id);
        // dd(substr($csr->img, 8));
        if(Storage::disk('public')->delete(substr($csr->img, 8)))
        {
            $csr->delete();
        }

        $this->closeModalDelete();
    }

    public function closeModalDelete()
    {
        $this->modalDelete = false;
    }

    public function render()
    {
        $csr       = Csr::orderBy('created_at', 'desc')
                            ->paginate(5);

        return view('livewire.cms.csr.list-content', [
            'csr'      => $csr
        ]);
    }
}
