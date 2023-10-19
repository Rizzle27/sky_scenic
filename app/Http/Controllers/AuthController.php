<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return redirect()->route('index')->with('logged.user', auth()->user()->username);
    }

    public function logoutProcess(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }

    public function signupProcess(Request $request)
    {
        $data = $request->input();

        $data = $request->only(['username', 'email', 'password']);

        $user = User::create($data);

        Auth::login($user);

        return redirect('/')->with('status.message', 'Usuario creado con éxito');
    }
}
