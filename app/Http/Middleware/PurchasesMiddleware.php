<?php

namespace App\Http\Middleware;

use Closure;

class PurchasesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario_actual=\Auth::user();
        if ($usuario_actual->rol_id!=7) {
         //if (!auth()->user()->admin=1) {
            return redirect('/home');
        }
        return $next($request);
    }
}
