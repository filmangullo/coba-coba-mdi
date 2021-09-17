<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FinancialReport;

class FinancialReportYear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'financial_report_years';
    protected $guarded = [];

    use HasFactory;

    public function financialReports()
    {
        return $this->hasMany(FinancialReport::class, 'year_id', 'id');
    }
}
