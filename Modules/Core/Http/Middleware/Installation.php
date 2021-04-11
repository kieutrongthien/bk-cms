<?php

namespace Modules\Core\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Installation
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
        $cur_path = $request->path();
        if(!config('app.installed', false) && strpos($cur_path, 'install') === false) {
            if(strpos($cur_path, '_debugbar') !== false) {
                return $next($request);                
            }

            return redirect()->route('install');
        } else
            return $next($request);
    }
}
