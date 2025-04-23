<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureLoggedOut
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next): Response
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return $next($request);
    }
} 