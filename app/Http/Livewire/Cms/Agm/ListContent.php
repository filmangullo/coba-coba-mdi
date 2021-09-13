<?php

namespace App\Http\Livewire\Cms\Agm;

use App\Models\AnnualGeneralMeetingYear;
use Livewire\WithPagination;
use Livewire\Component;

class ListContent extends Component
{
    use WithPagination;

    public $addYearModal = false;
    public $year;

    protected $rules = [

        'year' => 'required|unique:annual_general_meeting_years,year',

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

        $year = new AnnualGeneralMeetingYear();
        $year->year     = $this->year;

        $year->save();

        $this->year = null;
        $this->closeAddYearModal();
    }

    public function render()
    {
        $years = AnnualGeneralMeetingYear::orderBy('year', 'desc')->paginate(2);
        return view('livewire.cms.agm.list-content', [
            'years'         => $years
        ]);
    }
}
