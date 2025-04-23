<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and is an admin
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return $next($request);
        }

        // If user is authenticated but not an admin, redirect to dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access the admin area.');
        }

        // If user is not authenticated, redirect to login
        return redirect('/hello');
    }
} 