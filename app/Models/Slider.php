<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sliders';
    protected $guarded = [];

    use HasFactory;
}
