<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mailparse_determine_best_xfer_encoding(fp)
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()||Auth::user()->role != "admin") {

            return redirect('home1');
        }

        return $next($request);
    }
}
