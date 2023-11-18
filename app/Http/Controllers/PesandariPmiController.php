<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\PesandariPmi;
use App\Models\StokdarahPmi;
use Illuminate\Http\Request;

class PesandariPmiController extends Controller
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

        $stokdarahpmi = $request->id_pmi;
        $pasien = Pasien::all();
        $stokdarah = StokdarahPmi::all();
        return view('guest.pesandarahpmi', ['pasiens' => $pasien, 'stokdarahpmis' => $stokdarah, 'stokdarahpmi' => $stokdarahpmi]);
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
        PesandariPmi::create([
            'id_pasien' => $pasienBaru->id,
            'id_pmi' => $request->id_pmi,
            'status' => 'belum disetujui',
            'stok_pesanan' => $request->stok_darah,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesandariPmi  $pesandariPmi
     * @return \Illuminate\Http\Response
     */
    public function show(PesandariPmi $pesandariPmi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesandariPmi  $pesandariPmi
     * @return \Illuminate\Http\Response
     */
    public function edit(PesandariPmi $pesandariPmi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesandariPmi  $pesandariPmi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesandariPmi $pesandariPmi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesandariPmi  $pesandariPmi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesandariPmi $pesandariPmi)
    {
        //
    }
}
