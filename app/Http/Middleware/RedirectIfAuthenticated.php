<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $user = Auth::user();
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if($user->permissao == 'ALUNO'){
                    return redirect(RouteServiceProvider::ALUNO);
                }
                if($user->permissao == 'PROFESSOR'){
                    return redirect(RouteServiceProvider::PROFESSOR);
                }
                if($user->permissao == 'ADMINISTRADOR'){
                    return redirect(RouteServiceProvider::ADMINISTRADOR);
                }
                
            }
        }
        
        
        return $next($request);
    }
}
