<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsurePasswordIsConfirmed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário está autenticado e se a senha foi confirmada.
        if (Auth::check() && !Auth::user()->hasConfirmedPassword()) {
            // Redireciona para a página de confirmação de senha.
            return redirect()->route('password.confirm'); // Assegure-se de ter esta rota configurada.
        }

        return $next($request);
    }
}
