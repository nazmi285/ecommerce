<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorTracker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $unique_id = hash('sha512', $request->ip());
        if (Visitor::where('today', today())->where('unique_id', $unique_id)->count() < 1)
        {
            Visitor::create([
                'unique_id' => $unique_id,
                'ip' => geoip('default_location')->ip,
                'today' => today(),
                // 'browser' => $browser, 
                // 'browser_version' => $browser_version, 
                // 'os' => $os, 
                // 'os_version' => $os_version, 
                // 'device' => $device_type, 
                // 'user' => $user
            ]);
        }

        return $next($request);
    }
}
