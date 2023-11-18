<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendonor;
use Illuminate\Http\Request;

class PendonorhomeController extends Controller
{
    public function pendonor_home()
    {
        $authenticatedUserId = auth()->id();

        // Sekarang Anda memiliki ID pengguna yang terautentikasi, Anda bisa menggunakannya
        // untuk mengambil data pengguna yang sedang terautentikasi.

        $pendonor = Pendonor::find($authenticatedUserId);

        if ($pendonor) {
            // Pengguna terautentikasi ditemukan
            return view('pendonor.dashboard', ['pendonor' => $pendonor]);
        } else {
            // Pengguna tidak ditemukan, atur tindakan yang sesuai
            return redirect()->route('login'); // Contoh: Redirect ke halaman login jika pengguna tidak ditemukan
        }
    }
}
