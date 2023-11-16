<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuController extends Controller
{
    function menu()
    {
        $menu = Menu::with(['tipe', 'gambar'])
            ->filter(request(['search', 'tipe', 'status']))
            ->latest()
            ->paginate(9)
            ->withQueryString();
        return view("menu.menu", [
            'menus' => $menu,
        ]);
    }
    function show(Menu $menu)
    {    
        return view('menu.show', [
            'menu' => $menu
        ]);
    }
}
