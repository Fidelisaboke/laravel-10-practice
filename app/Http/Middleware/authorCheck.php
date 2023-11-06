<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class authorCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->author && $request->author=='true'){
            echo "<h1>You are an author</h1>";
        }else{
            echo "<h1>Not an author! Get out of here!</h1>";
        }
        return $next($request);
    }
}
