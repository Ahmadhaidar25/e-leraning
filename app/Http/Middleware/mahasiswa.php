<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class mahasiswa
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
        if (Auth::guard('mahasiswa')->user()->jk=="laki-laki") {
            return $next($request);
        }elseif (Auth::guard('mahasiswa')->user()->jk=="perempuan"){
            return $next($request);
        }elseif (Auth::guard('mahasiswa')->user()->jurusan=="informatika"){
            return $next($request);
        }elseif (Auth::guard('mahasiswa')->user()->jurusan=="sistem informasi"){
            return $next($request);
        }elseif (Auth::guard('mahasiswa')->user()->jurusan=="siak"){
            return $next($request);
        }

        return redirect('/');
    }
}
