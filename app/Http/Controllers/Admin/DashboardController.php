<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {

        # code...
        // $checkouts = Checkout::with('camp')->where('user_id', Auth::id())->get();
        $checkouts = Checkout::with('camp')->get();
        // return $checkouts;
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
