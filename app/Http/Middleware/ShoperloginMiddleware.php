<?php

namespace App\Http\Middleware;

use Closure;

class ShoperloginMiddleware
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
        if (session('shoper_login')) {
            return $next($request);
        } else {
            return redirect('shoper_admin/login');
        }
    }
}
