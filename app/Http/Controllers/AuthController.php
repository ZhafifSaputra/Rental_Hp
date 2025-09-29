<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        return view('admin.login');
    }

    function register()
    {
        return view('admin.register');
    }

    function register_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50|unique:users,email',
            'username' => 'required|string|max:25',
            'password' => 'required|string|min:4|confirmed',
            'nama_lengkap' => 'required|string|max:50|',
            'kota' => 'required|string|max:255',
        ], [
            'email.unique' => 'Email sudah digunakan',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',

            'username.required' => 'Username wajib diisi',
            'username.max' => 'Username maksimal 25 karakter',

            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 4 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',

            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nama_lengkap.max' => 'Nama lengkap maksimal 50 karakter',

            'kota.required' => 'Kota wajib diisi',
            'kota.max' => 'Nama kota terlalu panjang',

        ]);

        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->nama_lengkap = $request->nama_lengkap;
        $user->kota = $request->kota;
        $user->role = $request->role;

        $user->save();

        return redirect('/admin/login')->with('sukses', 'Anda berhasil mendaftar');
    }

    function login_submit(Request $request){
        $data = $request->only('username', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            
            return redirect('/dashboard')->with('sukses', 'Selamat Anda Berhasil Login');
        }
        return redirect('/admin/login')->with('gagal', 'Username atau Password anda salah, Silahkan Coba Lagi');
    }

    function logout(){
        Auth::logout();
        return redirect('/admin/login')->with('logout', 'Berhasil Logout');
    }
}
