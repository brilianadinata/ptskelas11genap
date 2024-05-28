<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // jika user maka menampilkan halaman dashboard dan jika admin maka melanjutkan perintah berikutnya
        if ($request->user() && !$request->user()->isAdmin()) {
            return redirect ('/dashboard');
        }
        return $next($request);
    }
}
