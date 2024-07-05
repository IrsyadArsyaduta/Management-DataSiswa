<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan halaman login (views)
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, cek peran pengguna
            $user = Auth::user();
            
            // Jika benar, alihkan ke halaman masing-masing sesuai peran pengguna
            if ($user->role->role === 'admin') {
                return redirect()->intended('/admin-dashboard');
            } elseif ($user->role->role === 'walisiswa') {
                return redirect()->intended('/walisiswa-dashboard');
            } elseif ($user->role->role === 'siswa') {
                return redirect()->intended('/siswa-dashboard');
            }
        }

        // Jika otentikasi gagal, kembali ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
