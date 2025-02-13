<?php

namespace App\Http\Controllers;

use App\Models\Beszalito;
use App\Models\CikkTorzs;
use Illuminate\Http\Request;

class CikkTorzsController extends Controller
{
    public function create()
    {
        $beszalitos = Beszalito::all();
        return view('admin.cikk.create', compact('beszalitos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'beszalito' => 'required|exists:beszalitos,id',
            'rovat' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        CikkTorzs::create($request->all());

        return redirect()->route('cikk.index');
    }
}
