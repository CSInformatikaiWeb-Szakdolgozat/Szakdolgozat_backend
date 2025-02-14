<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Partner;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $beszalitos = Partner::all();
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

        Article::create($request->all());

        return redirect()->route('cikk.index');
    }
}
