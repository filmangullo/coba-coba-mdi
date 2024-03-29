<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PublicExpose;

class PublicExposeYear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public_expose_years';
    protected $guarded = [];

    use HasFactory;

    public function publicExposes()
    {
        return $this->hasMany(PublicExpose::class, 'year_id', 'id');
    }
}
