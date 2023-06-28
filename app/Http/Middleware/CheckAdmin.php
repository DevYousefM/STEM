<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role === "admin"){
            return $next($request);
        }else{
            return redirect()->route("login");
        }
    }
}
