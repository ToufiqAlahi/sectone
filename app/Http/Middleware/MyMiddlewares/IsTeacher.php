<?php

namespace App\Http\Middleware\MyMiddlewares;

use Closure;

use Illuminate\Support\Facades\Auth;
class IsTeacher
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
        if (Auth::user()->hasRole('teacher')) {
            return $next($request);
        }
        abort(403);
    }
}
