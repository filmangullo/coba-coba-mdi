<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'csrs';
    protected $guarded = [];

    use HasFactory;
}
