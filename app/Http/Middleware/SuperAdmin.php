<?php

namespace App\Http\Middleware;

use App\Helpers\AuthHelper;
use Closure;
use Illuminate\Http\Request;

class SuperAdmin
{
    public function handle(Request $request, Closure $next)
    { 
        if (!AuthHelper::isSuperAdmin()) {
            return redirect()->route('login.index');
        }
        return $next($request);
    }
}
