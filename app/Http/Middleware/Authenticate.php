<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (auth()->guard('admin')->check() || auth()->guard('tim')->check()) {
            return $next($request);
        }

        return redirect()->back()->with(['status' => false, 'message' => 'Anda harus login terlebih dahulu']);
    }
}
