<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsSecretaire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->guest()) {
            if (auth()->user()->role == 'secretaire') {
                if(auth()->user()->compte === 1){
                    return $next($request);
                }
            }else {
                abort(403, "vous ne pouvez pas accéder à cette page, veuillez contacter l'administrateur");
            }
        } else {
            return redirect('login')->with('error', "Vous n'avez pas le droit d'accéder a cette page");
        }
    }
}
