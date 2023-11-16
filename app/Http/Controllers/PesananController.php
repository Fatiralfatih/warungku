<?php

namespace App\Http\Controllers;

use App\Http\Requests\PesananCheckoutRequest;
use App\Models\Alamat;
use App\Models\Keranjang;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{

   function show()
   {
      $keranjangs = Keranjang::where('costumer_id', Auth::id())
         ->with(['menu', 'costumer'])
         ->addSelect([
            'total_harga' => Menu::whereColumn('menu_id', 'menus.id')
               ->selectRaw('sum(harga*kuantitas) as total_harga')
         ])
         ->get();
      $total = $keranjangs->sum('total_harga');
      $alamat = Alamat::where('costumer_id', Auth::id())->with(['costumer'])->get();
      return view('costumer.pesanan.checkout', [
         'keranjangs' => $keranjangs,
         'alamats' => $alamat,
         'total' => $total
      ]);
   }

   function checkout(PesananCheckoutRequest $request)
   {
      try {
         $keranjangs = Keranjang::where('costumer_id', Auth::id())
            ->select(['id', 'costumer_id', 'menu_id', 'kuantitas'])
            ->with('menu:id,stok,nama')
            ->get();
         foreach ($keranjangs as $keranjang) {
            // cek apakah kuantitas dikeranjang memenuhi stok di menu
            if ($keranjang->kuantitas > $keranjang->menu->stok) {
               return redirect()->back()->with('error', 'menu ' . $keranjang->menu->nama . ' ini sudah tinggal ' .  $keranjang->menu->stok . ' stok');
            }
            // cek uang_costumer jika tidak memenuhi maka redirect back
            if ($request->uang_costumer < $request->total_harga) {
               return redirect()->back()->with('error', 'Masukkan Uang lebih dari total harga');
            }
            DB::transaction(function () use ($request, $keranjang) {
               $pesanan = Pesanan::create([
                  'costumer_id' => Auth::id(),
                  'alamat_id' => $request->alamat_id,
                  'uang_costumer' => $request->uang_costumer,
                  'kembalian' => $request->uang_costumer - $request->total_harga,
               ]);

               $pesanan->menu()->attach($pesanan, [
                  'menu_id' => $keranjang->menu_id,
                  'kuantitas' => $keranjang->kuantitas
               ]);
               $menus = Menu::where('id', $keranjang->menu_id)->select(['id', 'stok'])->get();
               foreach ($menus as $menu) {
                  $menu->update([
                     'stok' => $menu->stok - $keranjang->kuantitas,
                  ]);
               }
               // ketika berhasil maka data dikeranjang didelete ajah
               $keranjang->delete();
            });
         }
         return redirect()->route('pesanan.detail')->with('success', 'pesanan berhasil dipesan');
      } catch (\Exception $e) {
         return redirect()->back()->with('error', $e->getMessage());
      }
   }

   function detail()
   {
      $pesanan = Pesanan::where('costumer_id', Auth::id())->with(['menu.tipe', 'alamat'])->orderByDesc('created_at')->paginate(4);

      return view('costumer.pesanan.detail', [
         'pesanans' => $pesanan,
      ]);
   }

   function cancel($id) {
      $pesanans = Pesanan::where('id', $id)->with(['menu'])->firstOrFail();
      foreach ($pesanans->menu as $menu ) {
         $pesanans->menu()->updateExistingPivot($menu,[
            'status' => 'canceled'
         ]);
      }
      return redirect()->back()->with('success', 'Pesanan Berhasil Di cancel');
   }
}
