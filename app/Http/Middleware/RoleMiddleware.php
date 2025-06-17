<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
 /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // --- AWAL MODIFIKASI ---
                // Tambahkan logika redirect berbasis role di sini
                $role = Auth::user()->role;

                return match ($role) {
                    'admin' => redirect()->route('admin.dashboard'),
                    'psikolog' => redirect()->route('psikolog.dashboard'),
                    'korban' => redirect()->route('korban.dashboard'),
                    default => redirect()->route('dashboard'), // Fallback
                };
                // --- AKHIR MODIFIKASI ---
            }
        }

        return $next($request);
    }
}
