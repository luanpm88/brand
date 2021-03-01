<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Client
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
        // $user = $request->user();

        // // check if user currently has wizard
        // if ($user->hasWizard()) {
        //     return redirect()->action('Client\HomeController@wizard');
        // }

        return $next($request);
    }
}
