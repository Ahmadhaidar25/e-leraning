<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class baak
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
        if (Auth::guard('baak')->user()->name=="baak") {
            return $next($request);
        }

        return redirect('/');
        
    }
}
