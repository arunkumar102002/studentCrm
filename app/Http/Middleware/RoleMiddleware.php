<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) { // Check if the user is authenticated
            return redirect()->route('login.form'); // Redirect to login page
        }

    }
}
