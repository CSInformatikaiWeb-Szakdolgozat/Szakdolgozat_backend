<?php

namespace App\Http\Controllers;

use App\Models\OtherInformation;
use Illuminate\Http\Request;

class OtherInformationController extends Controller
{
    public function index()
    {
        $otherInfos = response()->json(OtherInformation::all());
        return $otherInfos;
    }
    public function show($id)
    {
        $otherInfos = response()->json(OtherInformation::all($id));
        return $otherInfos;
    }
    public function destroy($id)
    {
        OtherInformation::find($id)->delete();
    }
    public function store(Request $request)
    {
        $otherInfos = new OtherInformation();
        $otherInfos->fill($request->all());
        $otherInfos->save();
    }
    public function update(Request $request, $id)
    {
        $otherInfos = OtherInformation::find($id);
        $otherInfos->fill($request->all());
        $otherInfos->save();
    }
}
