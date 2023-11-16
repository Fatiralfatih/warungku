<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'alamat',
        'no_hp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
