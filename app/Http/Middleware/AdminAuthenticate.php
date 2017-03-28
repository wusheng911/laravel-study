<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $admin_prefix = Config('tm.admin_prefix');
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                if(!$request->is("{$admin_prefix}/login*",
                                 "{$admin_prefix}/register*",
                                 "{$admin_prefix}/password/email*",
                                 "{$admin_prefix}/password/reset*")){
                    return redirect()->guest("/login");
                }
            }
        }
        return $next($request);
    }
}
