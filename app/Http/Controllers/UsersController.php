<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::all();

        return view('admin/users', [
            'users' => $users
        ]);
    }

    public function userRole(Request $request)
    {
        $userId = $request->input('id');
        $user = User::find($userId);

        if ($user->id != Auth::id()) {
            if ($user->role == 'admin' && $user->id) {
                $user->update(['role' => 'regular']);
                return redirect('/admin/usuarios')->with('status.message', 'Cambio de rol exitoso.');
            } else {
                $user->update(['role' => 'admin']);
                return redirect('/admin/usuarios')->with('status.message', 'Cambio de rol exitoso.');
            }
        } else {
            return redirect('/admin/usuarios')->with('status.error', 'No se puede cambiar el rol de esta cuenta mientras tengas sesión iniciada en ella.');
        }
    }

    public function deleteProcess(Request $request)
    {
        $userId = $request->input('id');
        $user = User::find($userId);

        $user->delete();

        return redirect('/admin/usuarios')->with('status.message', 'Usuario eliminado con éxito');
    }

    public function view(int $id)
    {
        $user = User::findOrFail($id);

        return view('admin/view', [
            'user' => $user,
        ]);
    }
}
