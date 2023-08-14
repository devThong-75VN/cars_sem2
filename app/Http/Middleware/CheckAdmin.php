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
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
            $user = Auth::user();
            if ($user->role == "admin") {
                return $next($request);
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login');
        }
        return redirect()->route('403');
    }
    // {
    //     if (auth()->check() && auth()->user()->role !== 'admin') {
    //         return redirect()->route('home');
    //     }
    //     return $next($request);
    // }
}