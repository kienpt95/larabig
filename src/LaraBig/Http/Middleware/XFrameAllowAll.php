<?php

namespace Smartosc\LaraBig\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XFrameAllowAll
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $response->header('X-Frame-Options', 'ALLOWALL');
        return $response;
    }
}
