<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
//            return route('login');
            return route('dashboard-auth-signin');
        }
    }
	
//	/**
//	 * Handle an incoming request.
//	 *
//	 * @param  \Illuminate\Http\Request  $request
//	 * @param  \Closure  $next
//	 * @param  string|null  $guard
//	 * @return mixed
//	 */
//	public function handle($request, Closure $next, $guard = null)
//	{
//		if ($this->auth->guard($guard)->guest()) {
////            return response('Unauthorized.', 401);
//			return redirect(route('dashboard-auth-signin'));
//		}
//
//		return $next($request);
//	}
}
