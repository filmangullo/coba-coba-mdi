<?php

namespace App\Http\Livewire\Cms\FinancialReport;

use Illuminate\Support\Facades\Storage;
use App\Models\FinancialReportYear;
use App\Models\FinancialReport;
use Livewire\Component;

class ListContent extends Component
{
    public $addYearModal = false;
    public $deleteFrModal = false;
    public $deleteFrId;
    public $year;

    protected $rules = [

        'year' => 'required|unique:financial_report_years,year',

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

        $year = new FinancialReportYear();
        $year->year     = $this->year;

        $year->save();

        $this->year = null;
        $this->closeAddYearModal();
    }

    public function openDeleteFrModal($id)
    {
        $this->deleteFrId = $id;
        $this->deleteFrModal = true;
    }

    public function closeDeleteFrModal()
    {
        $this->deleteFrId = null;
        $this->deleteFrModal = false;
    }

    public function deleteFr()
    {
        $query = FinancialReport::findOrFail($this->deleteFrId);

        if (substr($query->file, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->file, 8));
        } else {
            Storage::delete('public/'.$query->file);
        }

        $query->delete();

        $this->deleteFrId = null;
        $this->closeDeleteFrModal();
    }

    public function render()
    {
        $years = FinancialReportYear::orderBy('year', 'desc')->paginate(2);
        return view('livewire.cms.financial-report.list-content', [
            'years'         => $years
        ]);
    }
}
