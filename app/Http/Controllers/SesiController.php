<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Email wajib diisi',
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->role == 'teller') {
                return redirect('teller');
            }
        } else {
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
