<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gambar extends Model
{
    use HasFactory;

    protected $table = 'gambar_menu';
    protected $fillable = [
        'menu_id',
        'gambar'
    ];

    function menu() {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
