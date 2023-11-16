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
        $menu = Menu::where('id', $id)->with(['keranjang'])->firstOrFail();
        $menu->keranjang()->create([
            'costumer_id' => Auth::id(),
            'kuantitas' => $request->kuantitas ?? 1
        ]);
        return redirect()->back()->with('success', 'Menu ' . $menu->nama . ' dimasukkan keranjang');
    }

    function update(Request $request, $id)
    {
        $keranjang = Keranjang::where("id", $id)->select(['id', 'kuantitas', 'menu_id'])->with(['menu:id,stok'])->firstOrFail();

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

    function delete($id)
    {
        $keranjang = Keranjang::where('id', $id)->firstOrFail();
        $keranjang->delete();

        return redirect()->back()->with('success', 'Menu ' . $keranjang->menu->nama  . ' Berhasil di hapus dari keranjang');
    }
}
