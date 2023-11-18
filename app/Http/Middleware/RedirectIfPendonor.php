<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfPendonor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // app/Http/Middleware/RedirectIfPendonor.php

    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'pendonor') {
            return redirect()->route('pendonor_home');
        }

        return $next($request);
    }
}
