<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'fullname' => 'required|max:255',
            'phone' => 'required|',
            'password' => 'required|min:3|max:255|confirmed',
        ]);

        $user = [
            'fullname' => $request->fullname,
            'username' => $request->username,
            'phone' => $request->phone,
            'password' => bcrypt($request->password)
        ];

        User::create($user);

        return redirect('/login')->with('success', 'Register berhasil, silahkan login!');
    }
}
