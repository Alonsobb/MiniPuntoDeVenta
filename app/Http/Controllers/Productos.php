<?php

namespace App\Http\Controllers;

use App\Models\Productos as ModelsProductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class Productos extends Controller
{
    public function view(){
        if (Auth::check()) {
            return view('home.productos');
        } else {
            return view('login');
        }
    }
    public function agregarproducto(){
        if (Auth::check()) {
            return view('agregar.producto');
        } else {
            return view('login');
        }
    }

    public function agregarproductopost(Request $request){

        $request->validate([
            'producto'=>'required',
        ]);

        $form = new ModelsProductos;
        $form->producto=$request->producto;

        $form->save();
        return back()->with('succes','ok');
    }
}
