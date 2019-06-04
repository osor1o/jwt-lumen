<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(User::all());
    }

    public function show(Request $request, $id)
    {
        return response()->json([User::find($id)]);
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $user = User::create($data);
        return response()->json([$user]);
    }

    public function update(Request $request, $id)
    {
        (array) $data = $request->only(['name', 'email', 'password']);
        $user = User::find($id);
        $user->update($data);
        return response()->json([$user]);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(["status" => "success"]);
    }
}
