<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminhomeController extends Controller
{
    public function home()
    {
        $authenticatedUserId = auth()->id();

        // Sekarang Anda memiliki ID pengguna yang terautentikasi, Anda bisa menggunakannya
        // untuk mengambil data pengguna yang sedang terautentikasi.

        $user = User::find($authenticatedUserId);

        if ($user) {
            // Pengguna terautentikasi ditemukan
            return view('admin.dashboard', ['user' => $user]);
        } else {
            // Pengguna tidak ditemukan, atur tindakan yang sesuai
            return redirect()->route('login'); // Contoh: Redirect ke halaman login jika pengguna tidak ditemukan
        }
    }
}
