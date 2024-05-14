<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\DatosPersonales;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

class Login extends Controller
{

    public function view(){
        if (Auth::check()) {
            return redirect()->intended('home');
        } else {
            return view('login');
        }
    }

    public function logout(){
        if (Auth::check()) {
			Auth::logout();
		}
		return redirect("/");
    }
	public function login(Request $request)
	{
		$request->validate([
			'user' => 'required',
			'password' => 'required',
		]);

		$user = $request->only('user');
		$pass = $request->password;


		if (Auth::attempt(['email' => $user, 'password' => $pass])) {

            return response()->json(['ok' => 'ok'], 200);

		}
        return response()->json(['message' => 'error', 'errors' => ['error' => 'Usuario y/o contraseña incorrecto']], 404);

	}
}
