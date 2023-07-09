<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            
            if (Auth::guard($guard)->check()) {

                if($guard === 'admin'){
                    return redirect()->route('admin.profile');
                }
                if($guard === 'prof'){
                    return redirect()->route('prof.profile');
                }
                if($guard === 'etd'){
                    return redirect()->route('student.profile');
                }
                
                return redirect()->route('user.profile');
                
            }
        }

           // If the user is authenticated as an admin and is not on the admin login page,
        // redirect them to the admin profile page.
        if (Auth::guard('admin')->check() && !$request->routeIs('admin.login')) {
            return redirect()->route('admin.profile');
        }

        // If the user is authenticated as a regular user and is not on the user login page,
        // redirect them to the user profile page.
        if (Auth::guard('prof')->check() && !$request->routeIs('prof.login')) {
            return redirect()->route('prof.profile');
        }

        if (Auth::guard('etd')->check() && !$request->routeIs('student.login')) {
            return redirect()->route('student.profile');
        }

        if (Auth::guard('web')->check() && !$request->routeIs('user.login')) {
            return redirect()->route('user.profile');
        }

        return $next($request);
    }
}
