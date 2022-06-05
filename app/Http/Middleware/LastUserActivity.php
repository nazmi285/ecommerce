<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LastUserActivity
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
        if (Auth::check()) {
            $user = Auth::user();
            $user->last_logged = (new \DateTime())->format("Y-m-d H:i:s");
            $user->timestamps=false;
            $user->save();

        }
        return $next($request);
    }
}
