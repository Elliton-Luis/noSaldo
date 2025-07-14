<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authUser(Request $request){

        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:8'
        ],
        [
            'email.required'=>'Necessário Informar um Email',
            'email.email'=>'Formato Inválido',
            'email.exists'=>'Email Não Cadastrado',
            'password.required'=>'Necessário Informar uma Senha',
            'password.min'=>'Mínimo de 8 Caracteres'
        ]);

        $data = $request->except('_token');

        if(!Auth::attempt($data)){
            return redirect()->back()->with('error','Credenciais Inválidas!!');
        }
        return redirect()->route('lobby')->with('success','Usuário Logado Com Sucesso!!');
    }

    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index')->with('success','Sessão Finalizada com sucesso');
    }
}
