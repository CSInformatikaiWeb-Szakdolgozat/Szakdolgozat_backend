<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $menus = Menu::whereNull('main_menu')->get(); // Csak a főmenü kategóriák
        return view('admin.menus.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'main_menu' => 'nullable|exists:menus,id',
            'status' => 'required|boolean',
        ]);

        Menu::create($request->all());

        return redirect()->route('menus.index');
    }
}
