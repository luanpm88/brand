<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPlan
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
        if (!$request->user()->hasActivePlan()) {
            return redirect()->action('Client\HomeController@wizard');
        }
        return $next($request);
    }
}
