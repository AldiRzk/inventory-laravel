<?php

namespace App\Http\Middleware;

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
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah pengguna telah login
        if (!Auth::check()) {
            // Jika belum login, redirect ke halaman login dengan pesan error
            return redirect('/login')->with('error', 'Maaf, Anda harus login');
        }

        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Cek apakah role pengguna sesuai dengan role yang dibutuhkan
        if ($user->role !== $role) {
            // Jika role tidak sesuai, redirect ke halaman utama
            return redirect('/');
        }

        // Jika role sesuai, lanjutkan permintaan
        return $next($request);
    }
}
