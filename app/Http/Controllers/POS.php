<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class POS extends Controller
{
    public function view(){
        if (Auth::check()) {
            $productos=DB::table('productos')->get();
            return view('home.pos')->with('productos',$productos);
        } else {
            return view('login');
        }
    }
}
