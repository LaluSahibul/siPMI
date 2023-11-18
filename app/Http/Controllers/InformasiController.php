<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class InformasiController extends Controller
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
            $informasi = Informasi::latest()->get();
            return view('admin.informasi.informasi', ['user' => $user, 'informasis' => $informasi]);
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
            return view('admin.informasi.tambah', ['user' => $user]);
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
            'judul' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($request->file('foto')) {

            $data['foto'] = $request->file('foto')->store('fotoinformasi', 'public');
        }
        Informasi::create($data);
        return redirect('/admin_informasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        $informasi = Informasi::findOrFail($id);
        if ($user) {
            return view('admin.informasi.edit', ['user' => $user, 'informasi' => $informasi]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $informasi = Informasi::findOrFail($id);
        $request->validate([
            'judul' => 'required',
            'foto' => 'nullable',
            'deskripsi' => 'required',
        ]);
        $data = $request->only([
            'judul',
            'deskripsi',
        ]);
        if ($request->file('foto')) {
            if (isset($informasi->foto)) {
                File::delete('storage/' . $informasi->foto);
                $data['foto'] = $request->file('foto')->store('fotoinformasi', 'public');
            } else {
                $data['foto'] = $request->file('foto')->store('fotoinformasi', 'public');
            }
        }
        $informasi->update($data);
        return redirect('/admin_informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        File::delete('storage/' . $informasi->foto);
        $informasi->delete();
        return redirect('/admin_informasi');
    }
}
