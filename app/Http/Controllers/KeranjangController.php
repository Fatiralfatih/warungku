<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    function index()
    {
        $keranjang = Keranjang::where('costumer_id', Auth::id())->with(['menu.tipe'])->addSelect([
            'total_harga' => Menu::whereColumn('menu_id', 'menus.id')
                ->selectRaw('sum(harga*kuantitas) as total_harga')
        ])->get();
        $total = $keranjang->sum('total_harga');
        return view('keranjang.keranjang', [
            'keranjangs' => $keranjang,
            'total' => $total
        ]);
    }

    function store(Request $request, $id)
    {
        try {
            $keranjang = Keranjang::where('menu_id', $id)->first();
            if ($keranjang) {
                if ($request->kuantitas && $keranjang->kuantitas >= $keranjang->menu->stok) {
                    return redirect()->back()->with('error', 'stok dikeranjang sudah mencapai batas stok menu ');
                }
                $keranjang->update([
                    'menu_id' => $id,
                    'costumer_id' => Auth::id(),
                    'kuantitas' => $request->kuantitas + $keranjang->kuantitas
                ]);
            } else {
                Keranjang::create([
                    'menu_id' => $id,
                    'costumer_id' => Auth::id(),
                    'kuantitas' => $request->kuantitas
                ]);
            }

            return redirect()->back()->with('success', 'Menu dimasukkan keranjang');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    function updateKuantitas(Request $request, $id)
    {
        $keranjang = Keranjang::where("id", $id)->select(['id', 'kuantitas', 'menu_id'])->with(['menu:id,stok'])->firstOrFail();
        if ($keranjang) {
            if ($request->kuantitas && $keranjang->kuantitas >= $keranjang->menu->stok) {
                return redirect()->back()->with('error', 'stok dikeranjang sudah mencapai batas stok menu ');
            }
            if ($request->has('kuantitas-tambah')) {
                $keranjang->update([
                    'kuantitas' => $request->kuantitas
                ]);
                return redirect()->back()->with('success', 'kuantitas ditambah');
            } else {
                $keranjang->update([
                    'kuantitas' => $request->kuantitas
                ]);
                return redirect()->back()->with('success', 'kuantitas dikurangi');
            }
        }
    }

    function delete($id)
    {
        $keranjang = Keranjang::where('id', $id)->firstOrFail();
        $keranjang->delete();

        return redirect()->back()->with('success', 'Menu ' . $keranjang->menu->nama  . ' Berhasil di hapus dari keranjang');
    }
}
