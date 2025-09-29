<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:4|confirmed',
            'nama_lengkap' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
        ]);

        $user->email = $request->email;
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->kota = $request->kota;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('/dashboard')->with('success', 'Profile berhasil diperbarui.');
    }
}
