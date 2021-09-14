<?php

namespace App\Http\Livewire\Cms\Agm;

use App\Models\AnnualGeneralMeetingYear;
use Illuminate\Support\Facades\Storage;
use App\Models\AnnualGeneralMeeting;
use Livewire\WithPagination;
use Livewire\Component;

class ListContent extends Component
{
    use WithPagination;

    public $addYearModal = false;
    public $deleteAgmModal = false;
    public $deleteAgmId;
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


    public function openDeleteAgmModal($id)
    {
        $this->deleteAgmId = $id;
        $this->deleteAgmModal = true;
    }

    public function closeDeleteAgmModal()
    {
        $this->deleteAgmId = null;
        $this->deleteAgmModal = false;
    }

    public function deleteAgm()
    {
        $query = AnnualGeneralMeeting::findOrFail($this->deleteAgmId);

        Storage::delete($query->file);
    }

    public function render()
    {
        $years = AnnualGeneralMeetingYear::orderBy('year', 'desc')->paginate(2);
        return view('livewire.cms.agm.list-content', [
            'years'         => $years
        ]);
    }
}
