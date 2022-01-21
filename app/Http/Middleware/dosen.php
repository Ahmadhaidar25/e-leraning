<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class dosen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('dosen')->user()->jk=="laki-laki") {
            return $next($request);
        }elseif(Auth::guard('dosen')->user()->jk=="perempuan"){
           return $next($request); 
        }

        return redirect('/');
    }
}
