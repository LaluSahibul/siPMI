<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class PendonorController extends Controller
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
            $pendonor = Pendonor::latest()->get();
            return view('admin.pendonor.pendonor', ['user' => $user, 'pendonors' => $pendonor]);
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
            return view('admin.pendonor.tambah', ['user' => $user]);
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
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'stok_darah' => 'required',
            'golongan_darah' => 'required',
        ]);
        if ($request->password) {
            $data['password'] = Hash::make($data['password']);
        }
        Pendonor::create($data);
        return redirect('/pendonor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function show(Pendonor $pendonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendonor $pendonor)
    {

        $authenticatedUserId = auth()->id();
        $user = User::find($authenticatedUserId);
        if ($user) {
            return view('admin.pendonor.edit', ['user' => $user, 'pendonor' => $pendonor]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendonor = Pendonor::findOrFail($id);
        $data = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'stok_darah' => 'required',
            'golongan_darah' => 'required',
        ]);
        $pendonor->update($data);
        return redirect('/pendonor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendonor $pendonor)
    {
        Pendonor::destroy('id', $pendonor->id);
        File::delete('storage/' . $pendonor->foto);
        return redirect('/pendonor');
    }
}
