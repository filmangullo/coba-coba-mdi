<?php

namespace App\Http\Livewire\Cms\OurProduct;

use Illuminate\Support\Facades\Storage;
use App\Models\OurProduct;
use Livewire\WithPagination;
use Livewire\Component;

class ListContent extends Component
{
    use WithPagination;

    public $deleteOpModal = false;
    public $deleteOpId;

    public function updateOp($id)
    {
        return redirect()->route('cms-op.update', $id);
    }

    public function openDeleteOpModal($id)
    {
        $this->deleteOpId = $id;
        $this->deleteOpModal = true;
    }

    public function closeDeleteOpModal()
    {
        $this->deleteOpId = null;
        $this->deleteOpModal = false;
    }

    public function deleteOp()
    {
        $query = OurProduct::findOrFail($this->deleteOpId);

        if (substr($query->file, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->file, 8));
        } else {
            Storage::delete('public/'.$query->file);
        }

        $query->delete();

        $this->deleteOpId = null;
        $this->closeDeleteOpModal();
    }


    public function render()
    {
        $ops = OurProduct::orderBy('created_at', 'asc')->paginate(6);
        return view('livewire.cms.our-product.list-content', [
            'ops'       => $ops
        ]);
    }
}
