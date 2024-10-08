<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
{
    if (!auth()->check()) {
        return redirect('login');
    }

    if (!auth()->user()->roles()->whereIn('name', $roles)->exists()) {
        return redirect('home'); // Redirige si no tiene el rol adecuado
    }

    return $next($request);
}

}