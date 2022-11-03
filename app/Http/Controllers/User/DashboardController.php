<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
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
