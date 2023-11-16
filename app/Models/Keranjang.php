<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
{
    use HasFactory;

    protected $fillable = [
        'costumer_id',
        'menu_id',
        'kuantitas'
    ];

    function costumer()
    {
        return $this->belongsTo(User::class, 'costumer_id');
    }

    function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
