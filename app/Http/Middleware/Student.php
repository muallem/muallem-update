<?php

namespace App\Http\Middleware;

use App\Helpers\AuthHelper;
use Closure;
use Illuminate\Http\Request;

class Student
{
    public function handle(Request $request, Closure $next)
    { 
        if (AuthHelper::isAdmin()) {
            return redirect()->route('login.index');
        }
        return $next($request);
    }
}
