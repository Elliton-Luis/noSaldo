<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function showLogin(){
        return view('login.index');
    }

    public function loginUser(Request $request){

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
}
