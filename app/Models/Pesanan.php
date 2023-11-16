<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Alamat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';

    protected $fillable = [
        'costumer_id',
        'alamat_id',
        'uang_costumer',
        'kembalian'
    ];

    function alamat() {
        return $this->belongsTo(Alamat::class);
    }

    function menu()
    {
        return $this->belongsToMany(Menu::class, 'pesanan_menu', 'pesanan_id', 'menu_id')
            ->withPivot(['pelayan_id', 'status', 'kuantitas'])
            ->withTimestamps();
    }
}
