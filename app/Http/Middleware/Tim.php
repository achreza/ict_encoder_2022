<?php

namespace App\Http\Middleware;

use Closure;

class Tim
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
        if (auth()->guard('tim')->check()) {
            // !auth()->check
            // if (auth()->guard('tim')->user()->email_verified) {
                return $next($request);
            // }
            return redirect()->back()->with(['status' => false, 'message' => 'Maaf akun anda belum terverifikasi, silahkan cek email anda untuk verifikasi']);
        }

        return redirect()->back()->with(['status' => false, 'message' => 'Maaf Login gagal silahkan coba lagi']);
    }
}
