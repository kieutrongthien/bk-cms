<?php

namespace Modules\User\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        if(auth()->check()) {
            if(auth()->user()->user_type === 'user')
                return $next($request);
            else
                abort(404);
        } else {
            abort(404);
        }
    }
}
