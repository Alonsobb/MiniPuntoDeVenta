<?php

namespace App\Http\Controllers;

use App\Models\Productos as ModelsProductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Productos extends Controller
{
    public function view(){
        if (Auth::check()) {
            $productos=DB::table('productos')->get();

            return view('home.productos')->with('productos',$productos);
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
            'nombre'=>'required|unique:productos',
            'codigo'=>'required|unique:productos',
            'compra'=>'required|numeric',
            'venta'=>'required|numeric',
            'existencia'=>'required|numeric',
        ]);

        $form = new ModelsProductos;
        $form->nombre=$request->nombre;
        $form->codigo=$request->codigo;
        $form->compra=$request->compra;
        $form->venta=$request->venta;
        $form->existencia=$request->existencia;

        $form->save();
        return back()->with('succes','ok');
    }
}
