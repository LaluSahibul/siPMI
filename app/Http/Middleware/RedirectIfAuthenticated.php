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
            if (Auth::guard($guard)->check()) {
                $homeRoute = $this->getHomeRouteForGuard($guard);
                if ($guard === 'pendonor' && $request->routeIs('login')) {
                    return redirect()->route($homeRoute);
                } else {
                    return redirect()->route($homeRoute);
                }
            }
        }
        return $next($request);
    }

    protected function getHomeRouteForGuard($guard)
    {
        switch ($guard) {
            case 'pendonor':
                return 'pendonor_home';
            case 'web':
                return 'home';
            default:
                return 'home';
        }
    }
}
