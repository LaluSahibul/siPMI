<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use App\Models\PesandariPendonor;

class PesandariPendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $pendonor = $request->id_pendonor;
        $pasien = Pasien::all();
        return view('guest.pesandarahpendonor', ['pasiens' => $pasien, 'pendonor' => $pendonor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_wa' => 'required',
            'golongan_darah' => 'required',
            'stok_darah' => 'required',
        ]);
        Pasien::create($data);
        $pasienBaru = Pasien::latest()->first();
        PesandariPendonor::create([
            'id_pasien' => $pasienBaru->id,
            'id_pendonor' => $request->id_pendonor,
            'status' => 'belum disetujui',
            'stok_pesanan' => $request->stok_darah,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesandariPendonor  $pesandariPendonor
     * @return \Illuminate\Http\Response
     */
    public function show(PesandariPendonor $pesandariPendonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesandariPendonor  $pesandariPendonor
     * @return \Illuminate\Http\Response
     */
    public function edit(PesandariPendonor $pesandariPendonor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesandariPendonor  $pesandariPendonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesandariPendonor $pesandariPendonor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesandariPendonor  $pesandariPendonor
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesandariPendonor $pesandariPendonor)
    {
        //
    }
}
