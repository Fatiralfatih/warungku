<?php

namespace App\Models;

use App\Models\Tipe;
use App\Models\Gambar;
use App\Models\Keranjang;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama',
        'harga',
        'status',
        'stok',
        'deskripsi',
        'tipe_id'
    ];

    public function newUniqueId(): string
    {
        return Str::uuid()->getHex();
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false, fn ($query, $search) =>
            $query
                ->where('nama', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['status'] ?? false, fn($query, $status) =>
            $query->where('status', $status)
        );

        $query->when($filters['tipe'] ?? false, function($query, $tipe){
            return $query->whereHas('tipe', function($query) use ($tipe) {
                $query->where('nama', $tipe);
            });
        });
    }

    function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }

    function gambar()
    {
        return $this->hasMany(Gambar::class);
    }

    function keranjang() {
        return $this->hasMany(Keranjang::class);
    }

    function pesanan() {
        return $this->belongsToMany(Menu::class, 'pesanan_menu', 'pesanan_id', 'menu_id')
                    ->withPivot(['pelayan_id', 'status'])
                    ->withTimestamps();
    }
}
