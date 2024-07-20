<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$statuss): Response
    {
        if(in_array($request->user()->status, $statuss)){
            return $next($request);
        }
        // return $next('/dashboardaslab');
        // Mengarahkan pengguna ke halaman /dashboardaslab jika status tidak sesuai
        return redirect('/dashboardaslab');
    }
}
