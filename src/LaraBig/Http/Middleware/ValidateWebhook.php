<?php

namespace Smartosc\LaraBig\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateWebhook
{
    public function handle(Request $request, Closure $next)
    {
        //todo: handle validate webhook
        return $next($request);
    }
}
