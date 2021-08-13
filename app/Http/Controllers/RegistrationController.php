<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'username' => ['required', 'unique:users', 'string', 'min:3', 'max:25'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'Terima kasih, Anda sekarang sudah terdaftar');

        return redirect('/');
    }
}
