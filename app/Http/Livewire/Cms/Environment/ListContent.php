<?php

namespace App\Http\Livewire\Cms\Environment;

use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use App\Models\Environment;
use Livewire\Component;

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

        $image = Environment::findOrFail($id);
        // dd(substr($image->img, 8));
        if(Storage::disk('public')->delete(substr($image->img, 8)))
        {
            $image->delete();
        }

        $this->closeModalDelete();
    }

    public function closeModalDelete()
    {
        $this->modalDelete = false;
    }

    public function render()
    {
        return view('livewire.cms.environment.list-content', [
            'env' => Environment::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
