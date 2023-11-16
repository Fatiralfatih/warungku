<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipe extends Model
{
    use HasFactory;

    function menu() {
        return $this->hasMany(Menu::class);
    }
}
