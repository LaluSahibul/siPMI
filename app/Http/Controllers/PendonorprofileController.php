<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class PendonorprofileController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendonor = Pendonor::findOrFail($id);
        return view('pendonor.profile.profile', ['pendonor' => $pendonor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendonor = Pendonor::findOrFail($id);
        $data = $request->validate([
            'nama' => 'nullable',
            'username' => 'nullable',
            'alamat' => 'nullable',
            'nomor_hp' => 'nullable',
        ]);
        $pendonor->update($data);
        return back();
    }

    public function update_foto(Request $request, $id)
    {
        $pendonor = Pendonor::findOrFail($id);
        $data = $request->validate([
            'foto' => 'nullable',
        ]);
        if ($request->file('foto')) {
            if (isset($pendonor->foto)) {

                File::delete('storage/' . $pendonor->foto);
                $data['foto'] = $request->file('foto')->store('fotopendonor', 'public');
            } else {

                $data['foto'] = $request->file('foto')->store('fotopendonor', 'public');
            }
        }
        $pendonor->update($data);
        return back();
    }

    public function password($id)
    {
        $pendonor = Pendonor::findOrFail($id);
        return view('pendonor.profile.password', ['pendonor' => $pendonor]);
    }

    public function update_password(Request $request, $id)
    {
        $pendonor = Pendonor::findOrFail($id);
        $data = $request->validate([
            'pwlama' => 'required',
            'pwbaru' => 'required',
            'pwbaru2' => 'required|same:pwbaru',
        ]);
        $isPasswordValid = Hash::check($data['pwlama'], $pendonor->password);

        if ($isPasswordValid) {
            $hashedPassword = Hash::make($data['pwbaru']);

            $pendonor->update(['password' => $hashedPassword]);

            return redirect()->route('profile_pendonor.edit', ['profile_pendonor' => $id])->with('success', 'Password berhasil diperbarui');
        } else {
            return back()->with('error', 'Password lama tidak valid');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
