<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnnualGeneralMeeting;
class AnnualGeneralMeetingYear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'annual_general_meeting_years';
    protected $guarded = [];

    use HasFactory;

    public function annualGeneralMeetings()
    {
        return $this->hasMany(AnnualGeneralMeeting::class, 'year_id', 'id');
    }

}
