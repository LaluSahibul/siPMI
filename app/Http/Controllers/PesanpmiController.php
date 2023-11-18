<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PesandariPmi;

class PesanpmiController extends Controller
{
    public function index()
    {
        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        $pesandaripmi = PesandariPmi::latest()->get();
        if ($user) {
            return view('admin.pesanan.pesanan', ['user' => $user, 'pesandaripmis' => $pesandaripmi]);
        } else {
            return redirect()->route('login');
        }
    }
}
