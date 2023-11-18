<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
        $user = User::findOrFail($id);
        return view('admin.profile.profile', ['user' => $user]);
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
        $user = User::findOrFail($id);
        $data = $request->validate([
            'nama' => 'nullable',
            'username' => 'nullable',
        ]);
        $user->update($data);
        return back();
    }
    public function update_foto(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validate([
            'foto' => 'nullable',
        ]);
        if ($request->file('foto')) {
            if (isset($user->foto)) {

                File::delete('storage/' . $user->foto);
                $data['foto'] = $request->file('foto')->store('foto', 'public');
            } else {

                $data['foto'] = $request->file('foto')->store('foto', 'public');
            }
        }
        $user->update($data);
        return back();
    }

    public function password($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile.password', ['user' => $user]);
    }

    public function update_password(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validate([
            'pwlama' => 'required',
            'pwbaru' => 'required',
            'pwbaru2' => 'required|same:pwbaru',
        ]);
        $isPasswordValid = Hash::check($data['pwlama'], $user->password);

        if ($isPasswordValid) {
            $hashedPassword = Hash::make($data['pwbaru']);

            $user->update(['password' => $hashedPassword]);

            return redirect()->route('profile.edit', ['profile' => $id])->with('success', 'Password berhasil diperbarui');
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
        $user = User::findOrFail($id);
        if ($user->foto) {
            File::delete('storage/' . $user->foto);
        }
        $user->update(['foto' => null]);
        return back();
    }
}
