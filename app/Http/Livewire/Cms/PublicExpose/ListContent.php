<?php

namespace App\Http\Livewire\Cms\PublicExpose;

use Illuminate\Support\Facades\Storage;
use App\Models\PublicExposeYear;
use Livewire\WithPagination;
use App\Models\PublicExpose;
use Livewire\Component;

class ListContent extends Component
{
    use WithPagination;

    public $addYearModal = false;
    public $deletePeModal = false;
    public $deletePeId;
    public $year;

    protected $rules = [

        'year' => 'required|unique:public_expose_years,year',

    ];

    public function openAddYearModal()
    {
        $this->addYearModal = true;
    }

    public function closeAddYearModal()
    {
        $this->addYearModal = false;
    }

    public function saveYear()
    {
        $this->validate();

        $year = new PublicExposeYear();
        $year->year     = $this->year;

        $year->save();

        $this->year = null;
        $this->closeAddYearModal();
    }

    public function openDeletePeModal($id)
    {
        $this->deletePeId = $id;
        $this->deletePeModal = true;
    }

    public function closeDeletePeModal()
    {
        $this->deletePeId = null;
        $this->deletePeModal = false;
    }

    public function deletePe()
    {
        $query = PublicExpose::findOrFail($this->deletePeId);

        if (substr($query->file, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->file, 8));
        } else {
            Storage::delete('public/'.$query->file);
        }

        $query->delete();

        $this->deletePeId = null;
        $this->closeDeletePeModal();
    }

    public function render()
    {
        $years = PublicExposeYear::orderBy('year', 'desc')->paginate(2);
        return view('livewire.cms.public-expose.list-content', [
            'years'         => $years
        ]);
    }
}
