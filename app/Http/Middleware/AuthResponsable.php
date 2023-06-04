<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthResponsable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)

    {
        if (Auth::guard('responsable')->check()) {
            return $next($request);
        }
        return redirect()->route('login.show')->with("error","not authorised");
    //     $user = auth()->user();

    //     if ($user && $user->role === 'responsable') {
    //     return $next($request);
    // }
    
    //     return redirect()->route('login');
        
    }
}
