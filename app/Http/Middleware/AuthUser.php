<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthUser
{
     public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            return $next($request);
        }
        return redirect()->route('login.index')->with('error','Você deve estar logado para acessar essa área');
    }
}
