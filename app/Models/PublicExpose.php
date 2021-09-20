<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PublicExposeYear;

class PublicExpose extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public_exposes';
    protected $guarded = [];

    use HasFactory;

    public function publicExposeYears()
    {
        return $this->belongsTo(PublicExposeYear::class, 'year_id', 'id');
    }
}
