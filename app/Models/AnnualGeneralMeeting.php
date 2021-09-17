<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnnualGeneralMeetingYear;

class AnnualGeneralMeeting extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'annual_general_meetings';
    protected $guarded = [];

    public function annualGeneralMeetingYears()
    {
        return $this->belongsTo(AnnualGeneralMeetingYear::class, 'year_id', 'id');
    }
}
