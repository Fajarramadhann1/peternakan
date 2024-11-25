<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Login
    public function login(Request $request) {
        // Validasi input
        $incomingFields = $request->validate([
            'nama' => 'required',
            'password' => 'required'
        ]);

        // Coba login
        if (Auth::attempt(['nama' => $incomingFields['nama'], 'password' => $incomingFields['password']])) {
            // Jika login berhasil, regenerate session untuk keamanan
            $request->session()->regenerate();
            return redirect('/'); // Arahkan ke halaman utama
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'loginError' => 'Nama atau password salah.',
        ])->withInput(); // Menyimpan input lama (kecuali password)
    }

    // Logout
    public function logout() {
        Auth::logout(); // Menghapus session pengguna
        return redirect('/login'); // Arahkan ke halaman login
    }

    // Register
    public function register(Request $request) {
        // Validasi input
        $incomingFields = $request->validate([
            'nama' => ['required', 'min:3', 'max:10'],
            'password' => ['required', 'min:4', 'max:8']
        ]);

        // Enkripsi password
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // Simpan pengguna baru ke database
        $user = User::create($incomingFields);

        // Login otomatis pengguna setelah registrasi
        Auth::login($user);

        // Arahkan ke halaman login
        return redirect('/login');
    }
}
