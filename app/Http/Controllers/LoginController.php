<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class LoginController extends Controller
{
    public function loginValidate(Request $request)
    {
        $usuario = $request->input('usuario');
        $senha = $request->input('senha');

        $isValid = Usuario::getUsuario($usuario, $senha);

        if($isValid)
        {
            return redirect()->route('home');
        }

        return redirect()->route('login');
    }
}
