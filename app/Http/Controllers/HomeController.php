<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        # code...
        // $checkouts = Checkout::with('camp')->where('user_id', Auth::id())->get();
        $checkouts = Checkout::with('camp')->whereUserId(Auth::id())->get();
        // return $checkouts;
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
