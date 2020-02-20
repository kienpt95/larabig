<?php

namespace Smartosc\LaraBig\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidatePayload
{
    public function handle(Request $request, Closure $next)
    {
        //todo: handle validate payload
        return $next($request);
    }
}
