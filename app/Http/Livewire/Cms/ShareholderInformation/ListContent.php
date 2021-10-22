<?php

namespace App\Http\Livewire\Cms\ShareholderInformation;

use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\ShareholderInformation;

class ListContent extends Component
{
    use WithPagination;

    public $deleteId = '';

    public function deleteId($id)
    {
        if($id != 0)
        {
            $this->deleteId = $id;
        } else
        {
            $this->deleteId = '';
        }

    }

    public function destroy()
    {
        $query = ShareholderInformation::findOrFail($this->deleteId);

        if (substr($query->file, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->file, 8));
        } else {
            Storage::delete('public/'.$query->file);
        }

        $query->delete();

        $this->deleteId(0);
    }

    public function render()
    {
        $query = ShareholderInformation::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.cms.shareholder-information.list-content', [
            'sh'        => $query
        ]);
    }
}
