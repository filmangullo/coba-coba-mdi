<?php

namespace App\Http\Livewire\Cms\AnnualReport;

use Illuminate\Support\Facades\Storage;
use App\Models\AnnualReport;
use Livewire\Component;

class ListContent extends Component
{
    public $deleteArModal = false;
    public $deleteArId;

    public function openDeleteArModal($id)
    {
        $this->deleteArId = $id;
        $this->deleteArModal = true;
    }

    public function closeDeleteArModal()
    {
        $this->deleteArId = null;
        $this->deleteArModal = false;
    }

    public function deleteAr()
    {
        $query = AnnualReport::findOrFail($this->deleteArId);

        if (substr($query->file, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->file, 8));
        } else {
            Storage::delete('public/'.$query->file);
        }

        if (substr($query->img, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->img, 8));
        } else {
            Storage::delete('public/'.$query->img);
        }

        $query->delete();

        $this->deleteArId = null;
        $this->closeDeleteArModal();
    }

    public function render()
    {
        $annualReport = AnnualReport::orderBy('created_at', 'desc')->paginate(6);
        return view('livewire.cms.annual-report.list-content', [
            'annualReport'      => $annualReport
        ]);
    }
}
