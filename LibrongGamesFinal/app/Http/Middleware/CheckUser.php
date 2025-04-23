<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and is a regular user
        if (Auth::check() && Auth::user()->usertype === 'user') {
            return $next($request);
        }

        // If user is authenticated but is an admin, they can still access user routes
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return $next($request);
        }

        // If user is not authenticated, redirect to login
        return redirect('/hello');
    }
} 