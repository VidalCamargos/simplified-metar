<?php

namespace App\Http\Middleware;

use Closure;

class AlwaysReturnJson
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response->header('Content-Type', 'application/json');
    }
}
