<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = response()->json(Menu::all());
        return $menus;
        redirect()->back();
    }
    public function show($id)
    {
        $menus = response()->json(Menu::find($id));
        return $menus;
        redirect()->back();
    }
    public function destroy($id)
    {
        Menu::find($id)->delete();
        redirect()->back();
    }
    public function store(Request $request)
    {
        $menus = new Menu();
        $menus->fill($request->all());
        $menus->save();
        redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $menus = Menu::find($id);
        $menus->fill($request->all());
        $menus->save();
        redirect()->back();
    }
}
