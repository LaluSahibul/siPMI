<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use App\Models\PesandariPendonor;

class PesanpendonorController extends Controller
{
    public function index()
    {
        $authenticatedUserId = auth()->id();
        $pendonor = Pendonor::find($authenticatedUserId);
        $pesandaripendonor = PesandariPendonor::latest()->get();
        if ($pendonor) {
            return view('pendonor.pesanan.pesanan', ['pendonor' => $pendonor, 'pesandaripendonors' => $pesandaripendonor]);
        } else {
            return redirect()->route('login');
        }
    }
}
