<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Alert;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();

        return view('pages.profile', [
            'user' => $user
        ]);
    }

    public function edit(){
        $user = auth()->user();

        return view('feature.editProfile', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'fullname' => 'required|max:255',
            'username' => 'required|max:255',
            'phone' => 'required|numeric',
            'address' => 'required',
            'birth_date' => 'required',
            'password' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/profile')->with('success', 'Data diri kamu udah di update nih!!!');
    }

    public function delete(Request $request)
    {
        $user = auth()->user();

        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        User::where('id', $user->id)->delete();
     
        return redirect('/login')->with('message', 'Akun berhasil dihapus!');
    }
}
