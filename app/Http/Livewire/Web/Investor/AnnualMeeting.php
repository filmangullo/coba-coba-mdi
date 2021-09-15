<?php

namespace App\Http\Livewire\Web\Investor;

use Livewire\Component;
use App\Models\AnnualGeneralMeeting;
use App\Models\AnnualGeneralMeetingYear;

class AnnualMeeting extends Component
{
    public function render()
    {
        $annual = AnnualGeneralMeeting::all();
        $year = AnnualGeneralMeetingYear::all();

        $annualdata = [];
        foreach($year as $y){
            foreach($annual as $key => $a){
                if($y->id == $a->year_id){
                    $annualdata[$y->year][$key]['title_id'] = $a->title_id;
                    $annualdata[$y->year][$key]['title_en'] = $a->title_en;
                    $annualdata[$y->year][$key]['title_cn'] = $a->title_cn;
                    $annualdata[$y->year][$key]['file'] = $a->file;
                }
            }
        }

        krsort($annualdata);

        return view('livewire.web.investor.annual-meeting', ['annual' => $annualdata]);
    }
}
