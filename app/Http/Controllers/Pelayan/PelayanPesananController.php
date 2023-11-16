<?php

namespace App\Http\Controllers\Pelayan;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PelayanPesananController extends Controller
{
    function dataPesanan()
    {
        $pesanan = Pesanan::with(['menu.tipe', 'alamat'])->orderByDesc('created_at')->paginate(4);
        return view('pelayan.pesanan.data-pesanan', [
            'pesanans' => $pesanan,
        ]);
    }

    function terima(Request $request, $id)
    {
        try {
            $pesanans = Pesanan::where('id', $id)->with(['menu'])->firstOrFail();
            foreach ($pesanans->menu as $menu) {
                $pesanans->menu()->updateExistingPivot($menu, [
                    'pelayan_id' => Auth::id(),
                    'status' => $request->status
                ]);
            }

            return redirect()->back()->with('success', 'Pesanan Berhasil Diterima');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
