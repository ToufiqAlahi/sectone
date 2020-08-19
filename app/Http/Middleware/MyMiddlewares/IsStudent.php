<?php

namespace App\Http\Middleware\MyMiddlewares;

use App\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class IsStudent
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
        if (Auth::user()->hasRole('student')) {
            return $next($request);
        }
        abort(403);
    }
}
