<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription()
    {
        return view('subscriptions/subscriptions');
    }

    public function subscribe()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->subscribed == false) {
                $user->update(['subscribed' => true]);
                return redirect('/suscripcion')->with('status.message', 'Suscripción exitosa.');
            } else {
                $user->update(['subscribed' => false]);
                return redirect('/suscripcion')->with('status.message', 'Suscripción cancelada de manera exitosa.');
            }
        } else {
            return redirect('/suscripcion')->with('status.error', 'Debes iniciar sesión para suscribirte.');
        }
    }
}
