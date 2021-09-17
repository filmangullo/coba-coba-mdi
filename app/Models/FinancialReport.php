<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FinancialReportYear;

class FinancialReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'financial_reports';
    protected $guarded = [];

    use HasFactory;

    public function financialReportYears()
    {
        return $this->belongsTo(FinancialReportYear::class, 'year_id', 'id');
    }
}
