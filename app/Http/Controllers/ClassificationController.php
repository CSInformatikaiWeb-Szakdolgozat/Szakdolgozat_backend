<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index()
    {
        $classes = response()->json(Classification::all());
        return $classes;
    }
    public function show($id)
    {
        $classes = response()->json(Classification::find($id));
        return $classes;
    }
    public function destroy($id)
    {
        Classification::find($id)->delete();
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $classes = new Classification();
        $classes->fill($request->all());
        $classes->save();
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $classes = Classification::find($id);
        $classes->fill($request->all());
        $classes->save();
        return redirect()->back();
    }
}
