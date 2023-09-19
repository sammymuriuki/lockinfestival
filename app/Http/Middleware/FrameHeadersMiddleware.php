<?php

namespace App\Http\Middleware;

use Closure;

class FrameHeadersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
            $response = $next($request);
            //$response->header('X-Frame-Options', 'ALLOW FROM https://soundcloud.com/kevin-mwachiro-76250384');
            $response->headers->set('X-Frame-Options', '*');
            return $response;
        }
}
