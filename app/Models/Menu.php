<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

	public function child()
    {
        return $this->hasMany(Menu::class, 'parent', 'id');
    }

	public function parent()
    {
        return $this->hasOne(Menu::class, 'id', 'parent');
    }

	public function page()
    {
        return $this->hasOne(Menu::class, 'id', 'menu');
    }
}
