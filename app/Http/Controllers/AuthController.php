<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginProcess(Request $request) {
        $credentials = $request->only(['username', 'password']);

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('loginError', 'Las credenciales son inválidas')->withInput();
        }

        return redirect('.')->with('logged.user', auth()->user()->username);
    }
}
