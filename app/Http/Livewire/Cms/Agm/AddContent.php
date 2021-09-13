<?php

namespace App\Http\Livewire\Cms\Agm;

use App\Models\AnnualGeneralMeetingYear;
use Livewire\WithFileUploads;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $agm;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $year;
    public $file;

    public function mount($agm)
    {
        $this->agm = null;

        if($agm) {

        } else{
            $this->year    = date('Y', strtotime(now()));
        }
    }

    public function save()
    {
        // $this->validate();
    }

    public function render()
    {
        $years = AnnualGeneralMeetingYear::orderBy('year', 'desc')->get();
        return view('livewire.cms.agm.add-content', [
            'years'     => $years
        ]);
    }
}
