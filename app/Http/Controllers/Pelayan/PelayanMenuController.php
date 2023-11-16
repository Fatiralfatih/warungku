<?php

namespace App\Http\Controllers\Pelayan;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStoreGambarMenuRequest;
use App\Http\Requests\UpdateStorePelayanMenuRequest;
use App\Models\Gambar;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelayanMenuController extends Controller
{
    function index()
    {
        $menu = Menu::latest()
            ->with(['tipe', 'gambar'])
            ->filter(request(['search']))
            ->paginate(10);
        return view("pelayan.menu.menu", [
            'menus' => $menu
        ]);
    }

    function create()
    {
        return view('pelayan.menu.create');
    }

    function store(UpdateStorePelayanMenuRequest $request)
    {

        $menu = Menu::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'status' => $request->status,
            'tipe_id' => $request->tipe_id
        ]);
        if ($request->gambar) {
            foreach ($request->gambar as $gambar) {
                $menu->Gambar()->create([
                    'gambar' => $gambar->store('gambar/menu')
                ]);
            }
        }
        return redirect()->route('pelayan.menu')->with('success', 'Pesanan Berhasil ditambahkan');
    }

    function edit($id)
    {
        $menu = Menu::find($id)->load('tipe');
        return view('pelayan.menu.edit', [
            'menu' => $menu
        ]);
    }

    function update(UpdateStorePelayanMenuRequest $request, $id): RedirectResponse
    {
        $menu = Menu::findOrFail($id);
        if ($request->user()->cannot('update', $menu)) {
            abort(403);
        }
        $menu->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'status' => $request->status,
            'tipe_id' => $request->tipe_id
        ]);

        return redirect()->route('pelayan.menu')->with('success', 'Menu ' . $menu->nama . ' berhasil diupdate');
    }

    function gambar($id)
    {
        $menu = Menu::where('id', $id)->with('gambar')->firstOrFail();
        return view('pelayan.menu.menu-gambar', [
            'menu' => $menu
        ]);
    }

    function gambarTambah(UpdateStoreGambarMenuRequest $request, $id)
    {
        $menu = Menu::where('id', $id)->with('gambar')->firstOrFail();
        if ($request->hasFile('gambar')) {
            foreach ($request->gambar as $gambar) {
                $menu->gambar()->create([
                    'gambar'   => $gambar->store('gambar/menu')
                ]);
            }
        }

        return Redirect()->back()->with('success', 'Gambar Berhasil Di Tambahkan');
    }

    function gambarUpdate(UpdateStoreGambarMenuRequest $request, $id)
    {
        $gambar = Gambar::where('id', $id)->firstOrFail();
        if ($request->hasFile('gambar')) {
            Storage::delete($request->gambar);
            $gambar::update([
                'gambar' => $request->gambar->store('gambar/menu')
            ]);
        }

        return Redirect()->back()->with('success', 'Gambar Berhasil Di Update');
    }


    function gambarDelete(Request $request, $id)
    {
        $gambar = Gambar::where('id', $id)->firstOrFail();
        if ($request->oldGambar) {
            foreach ($request->oldGambar as $gambarold) {
                Storage::delete($gambarold);
            }
        }
        $gambar->delete();

        return redirect()->back()->with('success', 'Gambar Berhasil Di Hapus');
    }


    function delete(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        if ($request->oldGambar) {
            foreach ($request->oldGambar as $gambar) {
                Storage::delete($gambar);
            }
        }
        $menu->gambar()->delete();
        $menu->delete();

        return redirect()->back()->with('success', 'Menu ' . $menu->nama . ' Berhasil Dihapus');
    }
}
