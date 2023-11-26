<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlamatRequest;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class AlamatController extends Controller
{
  function store(AlamatRequest $request)
  {
    $validated = $request->validated();
    Auth::user()->alamat()->create($validated);

    return redirect()->back()->with('success', 'Alamat Berhasil Ditambahkan');
  }
  function edit(Alamat $alamat)
  {
    return view('costumer.alamat.edit', [
      'alamat' => $alamat,
    ]);
  }
  function update(AlamatRequest $request, Alamat $alamat)
  {
    $alamat->update([
      'costumer_id' => Auth::user()->id,
      'nama' => $request->nama,
      'no_hp' => $request->no_hp,
      'alamat_lengkap' => $request->alamat_lengkap,
      'kota' => $request->kota,
      'provinsi' => $request->provinsi,
      'kode_pos' => $request->kode_pos,
    ]);

    return redirect()->route('pesanan.show')->with('success', 'Alamat Berhasil Di Update');
  }

  function delete(Alamat $alamat)
  {
    $alamat->delete();
    return redirect()->back()->with('success', 'Alamat Berhasil Di Hapus');
  }
}
