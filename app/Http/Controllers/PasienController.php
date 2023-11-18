<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        if ($user) {
            $pasien = Pasien::latest()->get();
            return view('admin.pasien.pasien', ['user' => $user, 'pasiens' => $pasien]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        if ($user) {
            return view('admin.pasien.tambah', ['user' => $user]);
        } else {
            return redirect()->route('login');
        }
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
        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        if ($user) {
            $pasien = Pasien::findOrFail($id);
            return view('admin.pasien.edit', ['user' => $user, 'pasien' => $pasien]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_wa' => 'required',
            'golongan_darah' => 'required',
            'stok_darah' => 'required',
        ]);
        $pasien->update($data);
        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return redirect('/pasien');
    }
}
