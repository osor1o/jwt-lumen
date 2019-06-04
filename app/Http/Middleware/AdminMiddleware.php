<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        return response()->json([$request], 202);
        return $next($request);
    }
}
