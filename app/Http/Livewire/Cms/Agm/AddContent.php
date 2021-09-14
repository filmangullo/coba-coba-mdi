<?php

namespace App\Http\Livewire\Cms\Agm;

use App\Models\AnnualGeneralMeetingYear;
use App\Models\AnnualGeneralMeeting;
use Livewire\WithFileUploads;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $agm;
    public $years;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $year;
    public $file;

    protected $rules = [
        'title_id' => 'required|min:6',
        'title_en' => 'required|min:6',
        'title_cn' => 'required|min:6',
        'year'     => 'required',
        'file'     => 'required',
    ];

    public function mount($agm)
    {
        $this->years = AnnualGeneralMeetingYear::orderBy('year', 'desc')->get();
        $this->agm = null;

        if($agm) {

        } else{
            $this->year    = AnnualGeneralMeetingYear::orderBy('year', 'desc')->first()->id;
        }
    }

    public function save()
    {
        $this->validate();

        $file = md5($this->file . microtime()).'.'.$this->file->extension();

        $query = new AnnualGeneralMeeting();

        $query->title_id    = $this->title_id;
        $query->title_en    = $this->title_en;
        $query->title_cn    = $this->title_cn;
        $query->year_id     = $this->year;
        $query->file        = $file;

        $query->save();
        $this->file->storeAs('public', $file);


        return redirect()->route('cms-agm.index');
    }

    public function render()
    {

        return view('livewire.cms.agm.add-content', [

        ]);
    }
}
