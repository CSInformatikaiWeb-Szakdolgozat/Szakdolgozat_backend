<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    public function index()
    {
        $companyInfo = response()->json(CompanyInfo::all());
        return $companyInfo;
    }
    public function show($id)
    {
        $companyInfo = response()->json(CompanyInfo::find($id));
        return $companyInfo;
    }
    public function destroy($id)
    {
        CompanyInfo::find($id)->delete();
    }
    public function store(Request $request)
    {
        $companyInfo = new CompanyInfo();
        $companyInfo->fill($request->all());
        $companyInfo->save();
    }
    public function update(Request $request, $id)
    {
        $companyInfo = CompanyInfo::find($id);
        $companyInfo->fill($request->all());
        $companyInfo->save();
    }
}
