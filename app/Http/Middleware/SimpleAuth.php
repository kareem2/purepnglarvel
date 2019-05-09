<?php

namespace App\Http\Middleware;

use Closure;

class SimpleAuth
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
        // dd(config('app.access_token'));
        // dd($request->access_token);

        if(config('app.access_token') !== $request->access_token){
            return response()->json(['message' => 'Not authorized!'], 404);
        }
        return $next($request);
    }
}