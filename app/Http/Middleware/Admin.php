<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use View;

class Admin
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
        try {
            if (Auth::user()) {
                if (Auth::user()->admin) {
                    return $next($request);
                }
            }
        } catch (Exception $e) {
            echo $e;
        }
        return redirect('/notfound');
    }
}
