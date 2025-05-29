<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->username,
            'email' => $request->email,
        ]);

        return redirect('/users')->with('success', 'User berhasil diupdate');
    }
}