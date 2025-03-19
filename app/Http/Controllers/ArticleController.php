<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Partner;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = response()->json(Article::all());
        return $articles;
        redirect()->back();
    }
    public function show($id)
    {
        $articles = response()->json(Article::find($id));
        return $articles;
        redirect()->back();
    }
    public function destroy($id)
    {
        Article::find($id)->delete();
    }
    public function store(Request $request)
    {
        $article = new Article();
        $article->fill($request->all());
        $article->save();
    }
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();
    }


}
