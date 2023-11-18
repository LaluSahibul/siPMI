<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pendonor;
use App\Models\PesandariPmi;
use App\Models\StokdarahPmi;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $stokdarah = StokdarahPmi::latest()->get();
        $pendonor = Pendonor::latest()->get();
        $informasi = Informasi::latest()->get();
        return view('guest.home', [
            'stokdarahpmis' => $stokdarah,
            'pendonors' => $pendonor,
            'informasis' => $informasi,
        ]);
    }
    public function detail_informasi($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('guest.detail_informasi', ['informasi' => $informasi]);
    }
    public function guest_infomasi()
    {
        $informasi = Informasi::latest()->get();
        return view('guest.informasi', ['informasis' => $informasi]);
    }
}
