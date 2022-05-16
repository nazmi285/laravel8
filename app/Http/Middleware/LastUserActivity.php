<?php

namespace App\Http\Middleware;

use Auth;
use Cache;
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
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('web')->check()) {

            User::where('id', Auth::user()->id)->update(['last_logged' => (new \DateTime())->format("Y-m-d H:i:s")]);

        }

        return $next($request);
    }
}
