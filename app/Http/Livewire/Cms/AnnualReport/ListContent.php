<?php

namespace App\Http\Livewire\Cms\AnnualReport;

use App\Models\AnnualReport;
use Livewire\Component;

class ListContent extends Component
{
    public $deleteArModal = false;
    public function render()
    {
        $annualReport = AnnualReport::orderBy('created_at', 'desc')->paginate(6);
        return view('livewire.cms.annual-report.list-content', [
            'annualReport'      => $annualReport
        ]);
    }
}
