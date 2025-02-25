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
        redirect()->back();
    }
    public function show($id)
    {
        $classes = response()->json(Classification::find($id));
        return $classes;
        redirect()->back();
    }
    public function destroy($id)
    {
        Classification::find($id)->delete();
        redirect()->back();
    }
    public function store(Request $request)
    {
        $classes = new Classification();
        $classes->fill($request->all());
        $classes->save();
        redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $classes = Classification::find($id);
        $classes->fill($request->all());
        $classes->save();
        redirect()->back();
    }
}
