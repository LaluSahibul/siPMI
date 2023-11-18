<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StokdarahPmi;
use Illuminate\Http\Request;

class StokdarahPmiController extends Controller
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
            $stokdarahpmi = StokdarahPmi::latest()->get();
            return view('admin.stokdarahpmi.stokdarahpmi', ['user' => $user, 'stokdarahpmis' => $stokdarahpmi]);
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
            return view('admin.stokdarahpmi.tambah', ['user' => $user]);
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
            'nama_pmi' => 'required',
            'stok_darah_a' => 'required',
            'stok_darah_b' => 'required',
            'stok_darah_ab' => 'required',
            'stok_darah_o' => 'required',
            'stok_darah_am' => 'required',
            'stok_darah_bm' => 'required',
            'stok_darah_abm' => 'required',
            'stok_darah_om' => 'required',
        ]);
        StokdarahPmi::create($data);
        return redirect('/stokdarahpmi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StokdarahPmi  $stokdarahPmi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StokdarahPmi  $stokdarahPmi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        if ($user) {
            $stokdarahPmi = StokdarahPmi::findOrFail($id);
            return view('admin.stokdarahpmi.edit', ['user' => $user, 'stokdarahpmi' => $stokdarahPmi]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StokdarahPmi  $stokdarahPmi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stokdarahPmi = StokdarahPmi::findOrFail($id);
        $data = $request->validate([
            'nama_pmi' => 'required',
            'stok_darah_a' => 'required',
            'stok_darah_b' => 'required',
            'stok_darah_ab' => 'required',
            'stok_darah_o' => 'required',
            'stok_darah_am' => 'required',
            'stok_darah_bm' => 'required',
            'stok_darah_abm' => 'required',
            'stok_darah_om' => 'required',
        ]);
        $stokdarahPmi->update($data);
        return redirect('/stokdarahpmi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StokdarahPmi  $stokdarahPmi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stokdarahPmi = StokdarahPmi::findOrFail($id);
        $stokdarahPmi->delete();
        return redirect('/stokdarahpmi');
    }
}
