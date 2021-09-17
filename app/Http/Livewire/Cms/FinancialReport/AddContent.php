<?php

namespace App\Http\Livewire\Cms\FinancialReport;

use App\Models\FinancialReportYear;
use App\Models\FinancialReport;
use Livewire\WithFileUploads;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $fr;
    public $years;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $month;
    public $year;
    public $file;

    protected $rules = [
        'title_id' => 'required|min:1',
        'title_en' => 'required|min:1',
        'title_cn' => 'required|min:1',
        'month'     => 'required',
        'year'     => 'required',
        'file'     => 'required',
    ];

    public function mount($fr)
    {
        $this->years = FinancialReportYear::orderBy('year', 'desc')->get();
        $this->fr = null;

        if($fr) {

        } else{
            $this->year    = FinancialReportYear::orderBy('year', 'desc')->first()->id ?? '';
        }
    }

    public function save()
    {
        $this->validate();

        $file = md5($this->file . microtime()).'.'.$this->file->extension();

        $query = new FinancialReport();

        $query->title_id    = $this->title_id;
        $query->title_en    = $this->title_en;
        $query->title_cn    = $this->title_cn;
        $query->month       = $this->month;
        $query->year_id     = $this->year;
        $query->file        = 'storage/'.$file;

        $query->save();
        $this->file->storeAs('public', $file);


        return redirect()->route('cms-fr.index');
    }

    public function render()
    {
        return view('livewire.cms.financial-report.add-content');
    }
}
