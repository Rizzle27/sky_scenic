<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function subscription() {
        return view('subscriptions/subscriptions');
    }
}
