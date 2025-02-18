<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = response()->json(User::all());
        return $users;
    }
    public function show($id)
    {
        $users = response()->json(User::find($id));
        return $users;
    }
    public function destroy($id)
    {
        User::find($id)->delete();
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->role = 2;
        $user->fill($request->all());
        $user->save();
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->fill($request->all());
        $users->save();
    }
}
