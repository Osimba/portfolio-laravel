<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Honeypot
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
        if(!config('honeypot.enabled')) {
            return $next($request);
        }

        if( 
            !$request->has(config('honeypot.field_name')) ||
            !empty($request->input(config('honeypot.field_name'))) ||
            $this->getElapsedTime($request) <= config('honeypot.minimum_elapsed_time') 
        ) {
            $this->abort();
        }

        return $next($request);
    }

    protected function getElapsedTime(Request $request) {
        return microtime(true) - $request->input(config('honeypot.field_time_name'));
    }

    protected function abort() {
        return abort(404, config('honeypot.abort_message'));
    }
}
