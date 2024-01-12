<?php

namespace App\Http\Middleware;

use App\Helpers\AuthHelper;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (AuthHelper::isSessionToken()) {
                if(AuthHelper::isAdmin()){
                    return redirect()->route('dashboard.index');
                }elseif(AuthHelper::isSuperAdmin()){
                    return redirect()->route('dashboard.materi');
                }
                return redirect()->route('student.index');
            }
        }
        $response = $next($request);

        // Handle 404 errors
        if ($response->status() == 404) {
            return redirect()->route('login.index'); // Redirect to the login route for 404 errors
        }
        return $response;
    }
}
