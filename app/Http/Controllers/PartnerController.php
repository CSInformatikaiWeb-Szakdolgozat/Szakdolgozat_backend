<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = response()->json(Partner::all());
        return $partners;
    }
    public function show($id)
    {
        $partners = response()->json(Partner::find($id));
        return $partners;
    }
    public function destroy($id)
    {
        Partner::find($id)->delete();
    }
    public function store(Request $request)
    {
        $partners = new Partner();
        $partners->fill($request->all());
        $partners->save();
    }
    public function update(Request $request, $id)
    {
        $partners = Partner::find($id);
        $partners->fill($request->all());
        $partners->save();
    }
}
