<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create($request->except('_method', '_token'));
        return redirect()->route('index.petugas');
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->update($request->except('_method', '_token'));
        return redirect()->route('index.petugas');
    }

    public function destroy($id)
    {
        $user = User::destroy($id);
        return redirect()->back();
    }
}
