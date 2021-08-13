<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create() {
        return view('login');
    }

    public function store(Request $request) {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            return redirect('/')->with('success', 'Selamat, kamu berhasil login');
        }

        // Check Auth manual
        // $user = User::whereEmail($request->email)->first();
        // if($user) {
        //     if(Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         return redirect('/')->with('success', 'Selamat, kamu berhasil login');
        //     }
        // }

        throw ValidationException::withMessages([
            'email' => 'Email / Password tidak sesuai',
        ]);
    }
}
