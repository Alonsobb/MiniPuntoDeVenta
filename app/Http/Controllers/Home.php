<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Home extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            return view('home.home');
        } else {
            return redirect()->intended('login');
        }
    }
}
