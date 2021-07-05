<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard('workers')->check()) {
                return redirect('/admin')->with('authenticated1', 'Ya ha iniciado sesión');
            }

            else if (Auth::guard('sanctum')->check())
            {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
