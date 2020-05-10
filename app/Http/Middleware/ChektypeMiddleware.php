<?php

namespace App\Http\Middleware;

use Closure;

class ChektypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$type)
    {
        if (auth()->check() && auth()->user()->etablissements->typeEtablissement->type===$type ) {
            return $next($request);
        }
        return redirect()->back();
    }
}
