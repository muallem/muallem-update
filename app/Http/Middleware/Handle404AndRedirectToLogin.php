<?php

namespace App\Http\Middleware;

use Closure;

class Handle404AndRedirectToLogin
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Handle 404 errors
        if ($response->status() == 404) {
            return redirect()->route('login.index'); // Redirect to the login route for 404 errors
        }

        return $response;
    }
}
