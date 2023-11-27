<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function auth(Request $request) {

        $credenciais = $request->validate([
            'email' => 'required', 'email',
            'password'=> 'required',
        ],[
            'email.required'=> 'O campo email é obriatório!',
            'wmail.email'=> 'O e-mail não é válido',
            'password.required'=> 'O campo senha é obrigatório!'
            ]);
        
        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('erro', 'Usuário ou senha inválida.');
        }
    }
    
}
