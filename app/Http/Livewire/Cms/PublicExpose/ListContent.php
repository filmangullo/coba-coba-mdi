<?php

namespace App\Http\Livewire\Cms\PublicExpose;

use Illuminate\Support\Facades\Storage;
use App\Models\PublicExposeYear;
use Livewire\WithPagination;
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

    public function render()
    {
        return view('livewire.cms.public-expose.list-content');
    }
}
