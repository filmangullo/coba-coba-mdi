<?php

namespace App\Http\Livewire\Cms\Gallery;

use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Gallery;

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

        $image = Gallery::findOrFail($id);
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
        return view('livewire.cms.gallery.list-content', [
            'galleries' => Gallery::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }
}
