<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class POS extends Controller
{
    public function view(){
        if (Auth::check()) {
            return redirect()->intended('home');
        } else {
            return view('login');
        }
    }
}
