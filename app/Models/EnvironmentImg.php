<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Environment;

class EnvironmentImg extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'environment_imgs';
    protected $guarded = [];

    use HasFactory;

    public function environments()
    {
        return $this->belongsTo(Environment::class, 'environment_id', 'id');
    }
}
