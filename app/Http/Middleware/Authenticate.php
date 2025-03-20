<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Check if the route is an admin route
        if ($request->is('admin/*')) {
            return route('login'); // Redirect to login only for admin routes
        }

        return null; // Allow other routes (user pages) to work without authentication

    }
}
