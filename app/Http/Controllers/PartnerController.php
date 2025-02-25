<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = response()->json(Partner::all());
        return $partners;
        redirect()->back();
    }
    public function show($id)
    {
        $partners = response()->json(Partner::find($id));
        return $partners;
        redirect()->back();
    }
    public function destroy($id)
    {
        Partner::find($id)->delete();
         redirect()->back();
    }
    public function store(Request $request)
    {
        $partners = new Partner();
        $partners->fill($request->all());
        $partners->save();
        redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $partners = Partner::find($id);
        $partners->fill($request->all());
        $partners->save();
        redirect()->back();
    }
}
