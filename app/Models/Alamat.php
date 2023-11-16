<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alamat extends Model
{
    use HasFactory;

    protected $table = 'alamats';

    protected $fillable = [
        'costumer_id',
        'pesanan_id',
        'nama',
        'no_hp',
        'alamat_lengkap',
        'kota',
        'provinsi',
        'kode_pos'
    ];

    function costumer()
    {
        return $this->belongsTo(User::class, 'costumer_id');
    }
}
